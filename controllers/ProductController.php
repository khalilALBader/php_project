<?php
require_once 'models/Product.php';
require_once 'controllers/Controller.php';
require_once 'config/Database.php';
class ProductController extends Controller
{

    public function index()
    {
        $role = 'admin';
        if ($role == 'admin'){
            $product = $this->model('product');
            $products = $product->all();
            $this->render('admin.products.index', [
                'pageTitle' => 'All Products',
                'products' => $products
            ]);
        }
        else{
            echo 'you are not authorized';
        }
    }

    public function create()
    {
        $this->render('admin.products.create', ['title' => 'Create Product']);
    }

    public function store(){
        $category_id=$_POST['category_id'] ?? null;
        $product_name = $_POST['product_name'] ?? null;
        $description = $_POST['description'] ?? null;
        $price = $_POST['price'] ?? null;
        $image_url = $_POST['image_url'] ?? null;


        $errors = $this->validate([
            'category_id' => 'required|numeric',
            'product_name' => 'required|alphanumeric|min:3',
            'description' => 'required',
            'price' => 'required|numeric',
            'image_url' => 'required'
        ]);
        if (!empty($errors)) {
            dd($errors);
        }
        $product = $this->model('product');
        $product->create([
            'category_id' => $category_id,
            'product_name' => $product_name,
            'description' => $description,
            'price' => $price,
            'image_url' => $image_url
        ]);
        $this->redirect('/products');
    }
    public function edit($id)
    {
        $product = $this->model('product');
        $product = $product->find($id);
       // dd($product);
        $this->render('admin.products.edit', ['title' => 'Edit Product', 'product' => $product]);
    }

    public function update($id)
    {
        $category_id=$_POST['category_id'] ?? null;
        $product_name = $_POST['product_name'] ?? null;
        $description = $_POST['description'] ?? null;
        $price = $_POST['price'] ?? null;
        $image_url = $_POST['image_url'] ?? null;

        $errors = $this->validate([
            'category_id' => 'required|numeric',
            'product_name' => 'required|alphanumeric|min:3',
            'description' => 'required',
            'price' => 'required|numeric',
            'image_url' => 'required'
        ]);

        if (!empty($errors)) {
            dd($errors);
        }
        $product = $this->model('product');
        $product->update($id,[
            'category_id' => $category_id,
            'product_name' => $product_name,
            'description' => $description,
            'price' => $price,
            'image_url' => $image_url
        ]);
        $this->redirect('/products');
    }

    public function show($id)
    {
        $product = $this->model('product');
        $product = $product->find($id);
        $this->render('admin.products.show', ['product' => $product]);
    }

    public function destroy($id)
    {
        // dd($id);
        $product = $this->model('product');
        $product->delete($id);
        $this->redirect('/products');
    }



    public function createphp()
    {
        $this->render('admin.products.create');
    }

    public function editphp()
    {
        $this->render('admin.products.edit');
    }
    
    public function showphp()
    {
        $this->render('admin.products.show');
    }
}