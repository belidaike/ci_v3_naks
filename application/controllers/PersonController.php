<?php
class PersonController extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->model('PersonModel');
        $this->load->helper('url');
    }

    public function index(){
        $data['persons'] = $this->PersonModel->getall();
        $this->load->view('persons/index', $data);
    }

    public function create(){
        $this->load->view('persons/create');
    }

    public function store(){
        $data = [
            'FIRSTNAME' => $this->input->post('personFirst'),
            'LASTNAME' => $this->input->post('personLast'),
            'ADDRESS' => $this->input->post('personAdd'),
            'BIRTHDAY' => $this->input->post('personBirth'),
            'CONTACTNO' => $this->input->post('contactNo'),
        ];
        $this->PersonModel->insert($data);
        redirect('persons');
    }

    public function edit($id){
        $data['persons'] = $this->PersonModel->getPerson($id);
        $this->load->view('persons/edit', $data);
    }

    public function update($id){
        $data = [
            'FIRSTNAME' => $this->input->post('personFirst'),
            'LASTNAME' => $this->input->post('personLast'),
            'ADDRESS' => $this->input->post('personAdd'),
            'BIRTHDAY' => $this->input->post('personBirth'),
            'CONTACTNO' => $this->input->post('contactNo'),
        ];
        $this->PersonModel->update($id, $data);
        redirect('persons');
    }

    public function delete($id){
        $this->PersonModel->delete($id);
        redirect('persons');
    }
    
}
?>