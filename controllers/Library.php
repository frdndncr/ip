<?php 


class library extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view("libraryview");
    }

    public function insert()
    {
        echo "kitap kaydı yapıldı.";
    }
}





?>