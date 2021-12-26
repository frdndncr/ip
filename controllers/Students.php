<?php  


class Students extends CI_Controller
{

    Public Function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view("student");
    }

    public function insert()
    {
        $this->load->model("Students_Model");
        
        $data = array(
            "name" => $this->input->post("name")
        );

        $this->Stundets_Model->insert(array(
            "name" => $this->input->post("name", $data),
        ));
    }

    public function delete()
    {
        echo "Kayıt silme yapılıyor.";
    }

    public function update()
    {
        echo "Kayıt güncelleniyor.";
    }

}










?>