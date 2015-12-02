<div class="row">
    <div class="panel panel-info">

        <div class="panel-heading"><h4><i class="glyphicon glyphicon-shopping-cart"> </i> Shopping Cart</h4></div>
        <div class="panel-body">

            <?php
                if(empty($_SESSION['cart']))
                {
                    echo "<p>The shopping cart is empty.</p>";
                }else{
            ?>
                    <table border="0">
            <?php

                    foreach($_SESSION['cart'] as $product)
                    {
            ?>
                        <tr>
                            <td>
                                <img src="images/products/<?= $product['images']; ?>" height="30" width="30"> <br />
                                <strong>Code : </strong><?= $product['id']; ?><br />
                                <strong>Name : </strong><?= $product['name']; ?><br />
                                <strong>Price : </strong><?= $product['price']; ?><br />
                                <strong>Discount : </strong><?= $product['discount']; ?><br />
                                <strong>Quantity : </strong><?= $product['quantity']; ?>

                            </td>
                        </tr>
            <?php
                    }
            ?>
                    </table>
                    <div align="right"><button class="btn btn-success">Checkout</button></div>
            <?php
                }
            ?>



        </div>
    </div>
</div>