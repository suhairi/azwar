<!-- Static navbar -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">e-Shop</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Babies</a></li>
                        <li><a href="#">Kitchen</a></li>
                        <li><a href="#">Misc</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Other Categories</li>
                        <li><a href="men.php">Men</a></li>
                        <li><a href="#">Ladies</a></li>
                    </ul>
                </li>
            </ul>

            <?php
                if($_SESSION['logged_in'] == true)
                {
            ?>
                    <ul class="nav navbar-nav navbar-right">

                    <?php
                        if($_SESSION['level'] == 'ADMIN') {
                            ?>

                            <li><a href="seed.php">SEED <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">Manage Membership</a></li>
                            <li><a href="#">Products</a></li>
                    <?php
                        }
                    ?>
                        <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Log out</a></li>
                    </ul>
            <?php
                }else {
            ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Add Product</a></li>
                        <li><a href="#">Fixed top</a></li>
                    </ul>
            <?php
                }
            ?>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>