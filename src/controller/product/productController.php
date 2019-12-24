<?php

namespace Controller;

use Model\productModel;

class productController  
{
    public function getProdPage($page = 0)
    {
        $results_per_page = 4;
        $offset = $page * $results_per_page;

        $product_model = new productModel();

        $products = array();
        $products = $product_model->getProdsPage($offset);

        return $products;
    }

    public function getProdInfo($prod_id)
    {
        $product_model = new productModel();

        $products = array();
        $products = $product_model->getProdInfo($prod_id);

        return $products;
    }
}
