<section class="content-item">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-left breadcrumb-c white">
                <a href="home">Home</a> > <span>Clothes</span>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-left">
                <h1 class="page-title" style="position: relative;">
                    Clothes
                </h1>
            </div>
            <div class="col-sm-12 col-md-10 mx-auto text-center home-cards big-pie">
                <div class="row">
                    <div class="col-sm-6">
                        <span class="pie-colours-1" style="display: none;"><?php echo $values["jumper"]; ?>,<?php echo $values["hoodie"]; ?>,<?php echo $values["jacket"]; ?>,<?php echo $values["sweater"]; ?>,<?php echo $values["blazer"]; ?>,<?php echo $values["raincoat"]; ?></span>
                    </div>
                    <div class="col-sm-6 key-map text-left white">
                        <div class="col-12 key-c">
                            <span class="key" style="background: cyan;"></span> <span class="clothe"> - Jumper (<?php echo getPercentage($values["jumper"]); ?>)</span>
                        </div>
                        <div class="col-12 key-c">
                            <span class="key" style="background: magenta;"></span> <span class="clothe"> - Hoodie (<?php echo getPercentage($values["hoodie"]); ?>)</span>
                        </div>
                        <div class="col-12 key-c">
                            <span class="key" style="background: yellow;"></span> <span class="clothe"> - Jacket (<?php echo getPercentage($values["jacket"]); ?>)</span>
                        </div>
                        <div class="col-12 key-c">
                            <span class="key" style="background: black;"></span> <span class="clothe"> - Sweater (<?php echo getPercentage($values["sweater"]); ?>)</span>
                        </div>
                        <div class="col-12 key-c">
                            <span class="key" style="background: OrangeRed;"></span> <span class="clothe"> - Blazer (<?php echo getPercentage($values["blazer"]); ?>)</span>
                        </div>
                        <div class="col-12 key-c">
                            <span class="key" style="background: LimeGreen;"></span> <span class="clothe"> - Raincoat (<?php echo getPercentage($values["raincoat"]); ?>)</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<script>
    $( document ).ready(function() {
        $(".pie-colours-1").peity("pie", {
            fill: ["cyan", "magenta", "yellow", "black", "OrangeRed ", "LimeGreen "]
        });
    });
</script>