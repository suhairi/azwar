<?php

    session_start();

// 1. Get the details of the products from database using the id
// 2. Check if the same product is ordered again. Increase quantity


    $quantity = 1;

    if(!empty($_SESSION['cart']))
    {
        $flag = false;
        foreach($_SESSION['cart'] as &$cart)
        {
            if($cart['id'] == $_GET['id'])
            {
                $quantity = $cart['quantity'] + 1;
                $cart['quantity'] = $quantity;
                $flag = true;
            }
        }

        if(!$flag)
        {
            $product = [
                'id'        => $_GET['id'],
                'images'    => $_GET['images'],
                'name'      => 'Apple Watch (Black)',
                'price'     => 'RM 1235.60',
                'discount'  => '20',
                'quantity'  => $quantity
            ];

            array_push($_SESSION['cart'], $product);
        }
    }else{

        $product = [
            'id'        => $_GET['id'],
            'images'    => $_GET['images'],
            'name'      => 'Apple Watch (Black)',
            'price'     => 'RM 1235.60',
            'discount'  => '20',
            'quantity'  => $quantity
        ];

        array_push($_SESSION['cart'], $product);
    }

//    print_r($_SESSION['cart']);
//exit;

    echo "<meta http-equiv='refresh' content='0; url=../" . $_GET['site'] . ".php'>";
