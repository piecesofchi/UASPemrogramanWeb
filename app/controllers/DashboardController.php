<?php
require_once "../core/Controller.php";

class DashboardController extends Controller {

    public function admin() {
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'admin') {
            header("Location: ../login");
        }
        $this->view('admin/dashboard');
    }

    public function user() {
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'user') {
            header("Location: ../login");
        }
        $this->view('user/dashboard');
    }
}
