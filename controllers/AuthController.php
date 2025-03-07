<?php 

class AuthController extends Controller
{
       public function index()
    {
        $this->render('auth/login');
    }

    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        //dd($email, $password);

        $user = $this->model('user');
        $user = $user->where('email', $email);
        //dd($user[0]['password']);
        if ($user) {
            if (password_verify($password, $user[0]['password'])) {
                $_SESSION['user'] = $user;
                $this->redirect('home');
            } else {
                $_SESSION['errors'] = 'Invalid email or password';
                //$errors = 'Invalid email or password';
                $this->redirect('/login');
            }
        } else {
            $_SESSION['errors'] = 'Invalid email or password';
            $this->redirect('/login');
        }
    }

    public function singnup()
    {
        $this->render('auth/signup');
    }

    public function register()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $this->model('user');
        $user->create([
            'username' => $name,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ]);
       
       

        $this->redirect('/login');
    }

    public function logout()
    {
        session_destroy();
        $this->redirect('/home');
    }
}