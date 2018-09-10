<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Dragos
 * Date: 08/09/2018
 * Time: 08:48
 */
class Clothes extends CI_Controller
{

    function __construct() {
        parent::__construct();
        $this->load->model('ClothesModel');
    }

    public function index() {

        if(!isset($this->session->userdata['user_id'])) {
            redirect("login");
        }

        $data = array();

        // Read data from the json api instead of db
        $clothingApi = 'https://therapy-box.co.uk/hackathon/clothing-api.php?username=swapnil';
        $ch = curl_init($clothingApi);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $clothingJson = curl_exec($ch);
        if(curl_error($ch)) {
            echo 'error:' . curl_error($ch);
        };
        curl_close($ch);
        $clothes = json_decode($clothingJson);

        //$clothes = $this->ClothesModel->get_count();

        $item = array();
        foreach($clothes->payload as $r) {
            array_push($item, $r->clothe);
        }

        $values = array_count_values($item);

        $data["values"] = $values;

        $this->load->template('clothes', $data);
    }

}