<?php
class Home extends CI_Controller
{

	public function index()
	{
		$this->load->model("model_data");
		$data['list_karyawan'] = $this->model_data->read();

		$this->load->view("data_karyawan", $data);
	}

	public function add()
	{
		$this->load->model("model_data");
		$data['tipe'] = "Add";

		if (isset($_POST['submit'])) {
			//proses simpan dilakukan
			$this->model_data->simpan($_POST);
			redirect("home");
		}

		$this->load->view("form_karyawan", $data);
	}

	public function edit($id)
	{
		$this->load->model("model_data");

		$data['tipe'] = "Update";
		if (isset($_POST['submit'])) {
			$this->model_data->update($_POST, $id);
			redirect("home");
		}

		$data['default'] = $this->model_data->get_default($id);
		$this->load->view("form_karyawan", $data);
	}

	public function delete($id)
	{
		$this->load->model("model_data");
		$this->model_data->hapus($id);
		redirect("home");
	}
}
