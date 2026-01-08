<?php
require_once "../core/Controller.php";
require_once "../app/models/User.php";

class AuthController extends Controller {

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $userModel = new User();
            $result = $userModel->login($email);

            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();

                if (password_verify($password, $user['password'])) {
                    $_SESSION['user'] = $user;

                    if ($user['role'] == 'admin') {
                        header("Location: ../dashboard/admin");
                    } else {
                        header("Location: ../dashboard/user");
                    }
                } else {
                    echo "Password salah";
                }
            } else {
                echo "Email tidak ditemukan";
            }
        }

        $this->view('auth/login');
    }

    public function logout() {
        session_destroy();
        header("Location: ../login");
    }
}
