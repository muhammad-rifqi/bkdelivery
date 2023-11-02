<?php 
 
 header("Access-Control-Allow-Origin: *");
 header("Access-Control-Allow-Credentials: true");
 header("Access-Control-Allow-Methods: POST, GET, OPTIONS");;

 $data = array(
    array(
        "id" => "9",
        "title" => "Special Promo [ 1-5 Nov&#x27;23 ]",
        "price" => "$125.00",
        "date" => "May 4,2023",
        "stock" => "5",
        "image" => "https://media-order.bkdelivery.co.id/thumb/group_photo/2023/11/1/bhbpfq8oswcfk7rye5jnof_product_list.jpg"
    ),
    array(
        "id" => "1",
        "title" => "Special Promo [ 1-5 Nov&#x27;23 ]",
        "price" => "$125.00",
        "date" => "May 4,2023",
        "stock" => "3",
        "image" => "https://media-order.bkdelivery.co.id/thumb/group_photo/2023/11/1/bhbpfq8oswcfk7rye5jnof_product_list.jpg"
    ),
    array(
        "id" => "2",
        "title" => "Special Promo [ 1-5 Nov&#x27;23 ]",
        "price" => "$125.00",
        "date" => "May 4,2023",
        "stock" => "2",
        "image" => "https://media-order.bkdelivery.co.id/thumb/group_photo/2023/11/1/bhbpfq8oswcfk7rye5jnof_product_list.jpg"
    ),
    array(
        "id" => "3",
        "title" => "Special Promo [ 1-5 Nov&#x27;23 ]",
        "price" => "$125.00",
        "date" => "May 4,2023",
        "stock" => "2",
        "image" => "https://media-order.bkdelivery.co.id/thumb/group_photo/2023/11/1/bhbpfq8oswcfk7rye5jnof_product_list.jpg"
    ),
    array(
        "id" => "4",
        "title" => "Special Promo [ 1-5 Nov&#x27;23 ]",
        "price" => "$125.00",
        "date" => "May 4,2023",
        "stock" => "1",
        "image" => "https://media-order.bkdelivery.co.id/thumb/group_photo/2023/11/1/bhbpfq8oswcfk7rye5jnof_product_list.jpg"
    ),
    array(
        "id" => "5",
        "title" => "Special Promo [ 1-5 Nov&#x27;23 ]",
        "price" => "$125.00",
        "date" => "May 4,2023",
        "stock" => "7",
        "image" => "https://media-order.bkdelivery.co.id/thumb/group_photo/2023/11/1/bhbpfq8oswcfk7rye5jnof_product_list.jpg"
    ),
    array(
        "id" => "6",
        "title" => "Special Promo [ 1-5 Nov&#x27;23 ]",
        "price" => "$125.00",
        "date" => "May 4,2023",
        "stock" => "12",
        "image" => "https://media-order.bkdelivery.co.id/thumb/group_photo/2023/11/1/bhbpfq8oswcfk7rye5jnof_product_list.jpg"
    ),
 );

 echo json_encode($data);
?>