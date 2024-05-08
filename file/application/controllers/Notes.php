<?php

class Notes extends CI_Controller 
{
    function __construct() 
    {
        parent::__construct();
        $this->load->model('data');
    }

    public function index() 
    {
        $data['data'] = $this->data->get_data('qeydler');
        $this->load->view('crud/read', $data);
    }

    public function data_crud() 
    {

        $data['ad'] = $this->input->post('ad');
		$data['yazici'] = $this->input->post('yazici');
        $data['tesvir'] = $this->input->post('tesvir');
		$data['tarix'] = $this->input->post('tarix');

        $this->data->insert('qeydler', $data);
		redirect(base_url("notes"));
    }

    public function edit($id)
	{
		$data['data'] = $this->data->find_data('qeydler', $id);
		$this->load->view('crud/update', $data);
	}

	public function update($id)
	{
		$data['ad'] = $this->input->post('ad');
		$data['yazici'] = $this->input->post('yazici');
        $data['tesvir'] = $this->input->post('tesvir');
		$data['tarix'] = $this->input->post('tarix');

		$this->data->update('qeydler', $data, $id);
		redirect(base_url("notes"));
	}

    public function add()
	{
		$this->load->view('crud/create');
	}

    public function delete($id)
	{
		$this->data->delete('qeydler', $id);
		redirect(base_url("notes"));
	}
}

?>