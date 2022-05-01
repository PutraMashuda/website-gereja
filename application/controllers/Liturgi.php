<?php defined('BASEPATH') or exit('No direct script access allowed');

class Liturgi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Liturgi_model');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('login');
    }

    /**
     *
     */
    public function index()
    {
        $allData = $this->Liturgi_model->getAll();
        /**
         * split all data to 3 array
         * every array has 3 data
         */
        $data['liturgi'] = array_chunk($allData, 3);

        $this->load->view('Liturgi/template/header');
        // $this->load->view('Liturgi/partials/alert');
        $this->load->view('Liturgi/index', $data);
        $this->load->view('Liturgi/template/footer');
    }
    /**
     *
     */
    public function create()
    {
        if (!IsLoggedIn()) {
            redirect('login');
            return false;
        }

        $this->load->view('Liturgi/template/header');
        // $this->load->view('Liturgi/partials/alert');
        $this->load->view('Liturgi/create');
        $this->load->view('Liturgi/template/footer');
    }

    /**
     *
     */
    public function store()
    {
        if (!IsLoggedIn()) {
            redirect('login');
            return false;
        }

        // if request method is not POST, show 404
        if (!$this->input->post()) {
            show_404();
        }

        $this->form_validation->set_rules($this->Liturgi_model->rules());
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('danger', validation_errors("<li>", "</li>"));
            redirect('liturgi/create');
        } else {
            $this->Liturgi_model->title = $this->input->post('title');
            $this->Liturgi_model->slug = url_title($this->input->post('title') . '-' . time(), 'dash', true);
            $this->Liturgi_model->image = $this->Liturgi_model->_uploadImage();
            $this->Liturgi_model->pdf = $this->Liturgi_model->_uploadPdf();
            $this->Liturgi_model->save();
        }
    }

    /**
     *
     */
    public function download($slug)
    {
        if (!isset($slug)) {
            show_404();
        }
        try {
            $data = $this->Liturgi_model->getBySlug($slug);
            if (!$data) {
                show_404();
                return false;
            }

            $file = 'uploads/pdf/' . $data->pdf;

            $this->load->helper('download');
            force_download($file, null);
            $this->session->set_flashdata('success', 'File berhasil diunduh!');
            redirect('liturgi');
        } catch (Exception $e) {
            $this->session->set_flashdata('danger', 'File not found!');
            redirect('liturgi');
        }
    }

    /**
     *
     */
    public function read($slug)
    {
        if (!isset($slug)) {
            show_404();
        }
        try {
            $liturgi = $this->Liturgi_model->getBySlug($slug);
            if (!$liturgi) {
                show_404();
                return false;
            }

            $data['title'] = $liturgi->title;
            $data['pdf'] = "/uploads/pdf/" . $liturgi->pdf;
            $this->load->view('Liturgi/template/header');
            // $this->load->view('Liturgi/partials/alert');
            $this->load->view('Liturgi/read', $data);
            $this->load->view('Liturgi/template/footer');
        } catch (Exception $e) {
            show_404();
        }
    }

    /**
     *
     */
    public function edit($slug)
    {
        // die(json_encode($this->Liturgi_model->getBySlug($slug)));
        if (!IsLoggedIn()) {
            redirect('login');
            return false;
        }

        $data['liturgi'] = $this->Liturgi_model->getBySlug($slug);

        if (!$data['liturgi']) {
            show_404();
        }

        $this->load->view('Liturgi/template/header');
        // $this->load->view('Liturgi/partials/alert');
        $this->load->view('Liturgi/edit', $data);
        $this->load->view('Liturgi/template/footer');
    }

    /**
     *
     */
    public function update()
    {
        if (!IsLoggedIn()) {
            redirect('login');
            return false;
        }

        if (!$this->input->post()) {
            show_404();
        }

        $this->form_validation->set_rules($this->Liturgi_model->rules());
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('danger', validation_errors("<li>", "</li>"));
            redirect('liturgi/edit/' . $this->input->post('slug'));
        } else {
            $this->Liturgi_model->title = $this->input->post('title');

            // Check if user upload new image
            if (!empty($_FILES['image']['name'])) {
                $this->Liturgi_model->image = $this->Liturgi_model->_uploadImage();
            } else {
                $this->Liturgi_model->image = $this->Liturgi_model->getBySlug($this->input->post('slug'))->image;
            }

            // Check if user upload pdf
            if ($_FILES['pdf']['name']) {
                $this->Liturgi_model->pdf = $this->Liturgi_model->_uploadPdf();
            } else {
                $this->Liturgi_model->pdf = $this->Liturgi_model->getBySlug($this->input->post('slug'))->pdf;
            }

            $this->Liturgi_model->updateBySlug($this->input->post('slug'));
        }
    }

    /**
     *
     */
    // public function delete($slug)
    // {
    //     //
    // }

    /**
     *
     */
    public function delete()
    {
        if (!IsLoggedIn()) {
            redirect('login');
            return false;
        }

        // if request method is not POST, show 404
        if (!$this->input->post()) {
            show_404();
        }

        $this->Liturgi_model->deleteBySlug($this->input->post('slug'));
    }

    /**
     *
     */
    public function search()
    {
        //
    }

    /**
     *
     */
    public function remove_image()
    {
        if (!IsLoggedIn()) {
            redirect('login');
            return false;
        }

        if (!$this->input->post()) {
            show_404();
        }

        $liturgi = $this->Liturgi_model->getBySlug($this->input->post('slug'));
        if ($liturgi) {
            $filename = './uploads/img/' . $liturgi->image;
            if (file_exists($filename)) {
                // unlink($filename);
                $this->Liturgi_model->title = $liturgi->title;
                $this->Liturgi_model->image = 'default.png';
                $this->Liturgi_model->pdf = $liturgi->pdf;
                $this->Liturgi_model->updateBySlug($this->input->post('slug'), true);
            }
        }

        return json_encode(['status' => false]);
    }
}