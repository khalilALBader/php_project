<?php
require_once 'models/User.php';
require_once 'controllers/Controller.php';
class AdminAdminsController extends Controller
{

    public function index()
    {
        $user = $this->model('user');
        $users = $user->all();

        $title = 'Users';
        $this->render('admin.users.index', [
            'pageTitle' => 'All Products',
            'users' => $users
        ]);
    }


    public function show($id)
    {
        echo "<h1>Showing user with ID: {$id}</h1>";
    }
    public function create()
    {
        $this->render('admin.admins.create', ['title' => 'Create Product']);
    }

    public function store()
    {
        // 1. Retrieve data from POST
        $username = $_POST['username'] ?? null;
        $email    = $_POST['email'] ?? null;

        // 2. (Optionally) Validate the data
        $errors = $this->validate([
            'username' => 'required|alphanumeric|min:3',
            'email'    => 'required|email'
        ]);

        // If validation fails, re-render form with errors
        if (!empty($errors)) {
            // In a real app, you might:
            //   - Store errors in session or re-render the form
            //   - For simplicity, we'll just dump them:
            dd($errors);
        }
        $user = $this->model('user');
        $user->create([
            'username' => $username,
            'email'    => $email
        ]);
        $this->redirect('/admins');
    }


    public function edit($id)
    {
        $user = $this->model('user');
        $user = $user->find($id);
        $this->render('admin.admins.edit', ['user' => $user]);
    }

    public function update($id)
    {
        $data = [
            'username' => $_POST['username'] ?? '',
            'email'    => $_POST['email'] ?? ''
        ];

        // Update the user record
        $userModel = $this->model('user'); // "user" maps to User.php, extends Model
        $result = $userModel->update($id, $data);

        if ($result) {
            // Update succeeded
            // Redirect or show a success message
            $this->redirect('/admins');
        } else {
            // Update failed
            echo "Error updating user with ID: " . htmlspecialchars($id);
        }
    }

    public function destroy($id)
    {
        $user = $this->model('user');
        $user->delete($id);
        $this->redirect('/admins'); {
        }
    }



    


    public function createphp()
    {
        $this->render('admin.admins.create');
    }

    public function editphp()
    {
        $this->render('admin.admins.edit');
    }
    
    public function showphp()
    {
        $this->render('admin.admins.show');
    }
}
