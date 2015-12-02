<div class="col-xs-4">

    <?php

        if($_SESSION['logged_in'] == false)
            include 'forms/_login.php';

        include 'contents/_cart.php';
        include 'contents/_promotions.php';
    ?>

</div>