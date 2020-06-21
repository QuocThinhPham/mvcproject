<?php

class ProductController extends Controller
{
    // defined Product variables
    private $Product;

    public function __construct()
    {
        // require ProductModel to use and create new object
        $this->model('ProductModel');
        $this->Product = new ProductModel();
    }

    public function index()
    {
        // get all products
        $products = $this->Product->getAll();
        // return view
        return $this->view('frontend.products.index', [
            'products'  => $products,
        ]);
    }

    public function show($id)
    {
        // get product by $id
        $product = $this->Product->findById($id);
        // return view and product be founded
        return $this->view('frontend.products.show', [
            'product'   => $product,
        ]);
    }

    public function search($name)
    {
        // get product by $name
        $products = $this->Product->findByName($name);
        // return view and all products be founded
        return $this->view('frontend.products.search', [
            'products'  => $products,
        ]);
    }
}