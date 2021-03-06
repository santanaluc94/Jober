<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'controllers/user/UserSettings.php';

class Delete extends UserSettings
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(): void
    {
        if ($this->hasSession()) {
            $data = get_object_vars($_SESSION['userData']);
            $data = $this->formatUserData($data);

            $this->template->show("user/account/delete.php", $data);
        } else {
            redirect('/guest/login');
        }
    }
}
