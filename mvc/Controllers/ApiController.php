<?php

class ApiController extends Controller
{
    public function products()
    {
        // require, create new and get all products
        $this->model('ProductModel');
        $Product = new ProductModel();
        $products = $Product->getAll();

        // check number of product
        if (mysqli_num_rows($products) > 0) {
            $arr = [];
            // browser the array products and insert it into array
            while ($row = mysqli_fetch_array($products)) {
                array_push(
                    $arr,
                    [$row[0], $row[1], $row[2]]
                );
            }
        }
        // print the string in JSON format
        echo json_encode($arr);
    }
}