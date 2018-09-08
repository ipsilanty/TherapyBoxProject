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

        $clothes = $this->ClothesModel->get_count();
        $item = array();
        foreach($clothes as $cl) {
            array_push($item, $cl->clothe);
        }
        $values = array_count_values($item);

        $data["values"] = $values;

        $this->load->template('clothes', $data);
    }

}