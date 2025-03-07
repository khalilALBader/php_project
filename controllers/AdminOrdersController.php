<?php
require_once 'models/Orders.php';
require_once 'controllers/Controller.php';
require_once 'config/Database.php';
class AdminOrdersController extends Controller
{

    public function index()
    {
        $role = 'admin';
        if ($role == 'admin'){
            $order = $this->model('order');
            $orders = $order->all();
            $this->render('admin.orders.index', [
                'pageTitle' => 'All Orders',
                'orders' => $orders
            ]);
        }
        else{
            echo 'you are not authorized';
        }
    }

    public function create()
    {
        $this->render('admin.orders.create', ['title' => 'Create Orders']);
    }

    public function store(){
        $status = $_POST['status'] ?? null;


        $errors = $this->validate([
            'status' => 'required'
        ]);
        if (!empty($errors)) {
            dd($errors);
        }
        $order = $this->model('order');
        $order->create([
            'status' => $status
        ]);
        $this->redirect('/orders');
    }
    public function edit($id)
    {
        $order = $this->model('order');
        $order = $order->find($id);
       // dd($product);
        $this->render('admin.orders.edit', ['title' => 'Edit Orders', 'order' => $order]);
    }

    public function update($id)
    {
        $status = $_POST['status'] ?? null;

        $errors = $this->validate([
            'status' => 'required'
        ]);

        if (!empty($errors)) {
            dd($errors);
        }
        $order = $this->model('order');
        $order->update($id,[
            'status' => $status
        ]);
        $this->redirect('/orders');
    }

    public function show($id)
    {
        $order = $this->model('order');
        $order = $order->find($id);
        $this->render('admin.orders.show', ['order' => $order]);
    }

    public function destroy($id)
    {
        // dd($id);
        $order = $this->model('order');
        $order->delete($id);
        $this->redirect('/order');
    }




    public function editphp()
    {
        $this->render('admin.orders.edit');
    }
    
}