<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('session_helper');
        $this->load->helper('user_data_helper');
    }

    public function index(): void
    {
        if (hasSession()) {
            $data = get_object_vars($_SESSION['userData']);
            $data = formatUserData($data);

            $this->template->show("user/dashboard.php", $data);
        } else {
            redirect('/guest/login');
        }
    }

    public function logOut(): void
    {
        $this->session->sess_destroy();
        header("Location: " . base_url() . "guest/login");
    }
}