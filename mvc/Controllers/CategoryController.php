<?php

class CategoryController extends Controller
{
    private $Category;
    public function __construct()
    {
        // require CategoryModel to use and create new object
        $this->model('CategoryModel');
        $this->Category = new CategoryModel();
    }
    public function index($id = null, $name = null)
    {
        if (isset($id) || isset($name)) {
            $this->Category->add($id, $name);
        }
        // get all categories
        $categories = $this->Category->getAll();
        // return view
        return $this->view('frontend.categories.index', [
            'title' => 'Danh sách sản phẩm theo danh mục',
            'categories' => $categories,
        ]);
    }

    public function add()
    {
        return $this->view('frontend.categories.add');
    }

    // public function postAdd($id = null, $name)
    // {
    //     header('Location: ./category');
    // }
}