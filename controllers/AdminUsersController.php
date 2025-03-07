<?php
require_once 'models/User.php';
require_once 'controllers/Controller.php';
require_once 'config/Database.php';
class AdminUsersController extends Controller
{

    public function index()
    {
        $role = 'admin';
        if ($role == 'admin'){
            $user = $this->model('user');
            $users = $user->all();
            $this->render('admin.users.index', [
                'pageTitle' => 'All Users',
                'users' => $users
            ]);
        }
        else{
            echo 'you are not authorized';
        }
    }

    public function create()
    {
        $this->render('admin.admins.create', ['title' => 'Create Admin']);
    }

    public function store(){
        $username=$_POST['username'] ?? null;
        $email= $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;
        $role = "admin";


        $errors = $this->validate([
            'username' => 'required|alphanumeric|min:3',
            'email'    => 'required|email',
            'password' => 'required|alphanumeric|min:8'
        ]);
        if (!empty($errors)) {
            dd($errors);
        }
        $product = $this->model('product');
        $product->create([
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'role' => $role
        ]);
        $this->redirect('/admins');
    }
    public function edit($id)
    {
        $admin = $this->model('admin');
        $admin = $admin->find($id);
       // dd($product);
        $this->render('admin.admins.edit', ['title' => 'Edit Admin', 'admin' => $admin]);
    }

    public function update($id)
    {
        $username=$_POST['username'] ?? null;
        $email= $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;
        $role = "admin";

        $errors = $this->validate([
            'username' => 'required|alphanumeric|min:3',
            'email'    => 'required|email',
            'password' => 'required|alphanumeric|min:8'
        ]);

        if (!empty($errors)) {
            dd($errors);
        }
        $admin = $this->model('admin');
        $admin->update($id,[
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'role' => $role
        ]);
        $this->redirect('/admins');
    }

    public function show($id)
    {
        $admin = $this->model('admin');
        $admin = $admin->find($id);
        $this->render('admin.admins.show', ['admin' => $admin]);
    }

    public function destroy($id)
    {
        // dd($id);
        $admin = $this->model('admin');
        $admin->delete($id);
        $this->redirect('/admins');
    }



    public function createphp()
    {
        $this->render('admin.admins.create');
    }

    public function editphp()
    {
        $this->render('admin.admins.edit');
    }

    // public function indexphp()
    // {
    //     $this->render('admin.product.index');
    // }

    public function showphp()
    {
        $this->render('admin.admins.show');
    }
}