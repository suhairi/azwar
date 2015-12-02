<?php
include 'header.php';
include 'nav.php';
include 'notifications.php';
?>

<div class="row">
    <div class="col-xs-8">

        <div class="panel panel-primary">
            <div class="panel-heading"><h4>Register a Member</h4></div>
            <div class="panel-body">

                <form>
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input class="form-control" type="text" name="name"/>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="text" name="email"/>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password"/>
                    </div>
                    <div align="right"><button class="btn btn-primary">Register</button></div>
                </form>

            </div>
        </div>

    </div>

    <?php include 'side_content.php';?>

</div>


<?php
include 'footer.php';
?>
