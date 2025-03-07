<?php
require_once 'models/Categories.php';
require_once 'controllers/Controller.php';
require_once 'config/Database.php';
class AdminCategoriesController extends Controller
{

    public function index()
    {
        $role = 'admin';
        if ($role == 'admin'){
            $category = $this->model('category');
            $categories = $category->all();
            $this->render('admin.categories.index', [
                'pageTitle' => 'All Categories',
                'categories' => $categories
            ]);
        }
        else{
            echo 'you are not authorized';
        }
    }

    public function create()
    {
        $this->render('admin.categories.create', ['title' => 'Create Category']);
    }

    public function store(){
        $category_name =$_POST['category_name'] ?? null;

        $errors = $this->validate([
            'category_name' => 'required|alphanumeric|min:3'
        ]);
        if (!empty($errors)) {
            dd($errors);
        }
        $category = $this->model('category');
        $category->create([
            'category_name' => $category_name
        ]);
        $this->redirect('/categories');
    }
    public function edit($id)
    {
        $category = $this->model('category');
        $category = $category->find($id);
       // dd($product);
        $this->render('admin.categories.edit', ['title' => 'Edit Category', 'category' => $category]);
    }

    public function update($id)
    {
        $category_name =$_POST['category_name'] ?? null;

        $errors = $this->validate([
            'category_name' => 'required|alphanumeric|min:3'

        ]);

        if (!empty($errors)) {
            dd($errors);
        }
        $category = $this->model('category');
        $category->update($id,[
            'category_name' => $category_name

        ]);
        $this->redirect('/categories');
    }

    public function show($id)
    {
        $category = $this->model('category');
        $category = $category->find($id);
        $this->render('admin.categories.show', ['category' => $category]);
    }

    public function destroy($id)
    {
        // dd($id);
        $category = $this->model('category');
        $category->delete($id);
        $this->redirect('/categories');
    }



    public function createphp()
    {
        $this->render('admin.categories.create');
    }

    public function editphp()
    {
        $this->render('admin.categories.edit');
    }
    
    public function showphp()
    {
        $this->render('admin.categories.show');
    }
}