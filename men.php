<?php
include 'header.php';
include 'nav.php';
include 'notifications.php';
?>

<div class="row">
    <div class="col-xs-8">

        <!--            First Content-->
        <div class="row">
            <div class="col-xs-12">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h4>Men's Products</h4></div>
                    <div class="panel-body">

                        <?php
                            include 'products/_watch.php';
                            include 'products/_shoe.php';
                        ?>

                    </div>
                </div>
            </div>
        </div>


    </div>

    <?php include 'side_content.php';?>

</div>


<?php
include 'footer.php';
?>
