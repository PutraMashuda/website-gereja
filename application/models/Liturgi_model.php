<?php defined('BASEPATH') or exit('No direct script access allowed');

class Liturgi_model extends CI_Model
{
    private $table = 'liturgi';

    public $title, $image, $pdf, $slug;

    // method for rules
    public function rules()
    {
        return [
            [
                'field' => 'title',
                'label' => 'Title',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.',
                ],
            ],
        ];
    }

    // method for upload image
    public function _uploadImage()
    {
        $this->form_validation->set_rules($this->rules());
        $newName = time() . '-' . $_FILES['image']['name'];

        $config['upload_path'] = 'uploads/img/';
        $config['allowed_types'] = 'jpg|png|jpeg|JPG|PNG|JPEG';
        $config['file_name'] = $newName;
        $config['overwrite'] = true;
        $config['max_size'] = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data('file_name');
        } else {
            return 'default.png';
        }
    }

    // method for upload pdf
    public function _uploadPdf()
    {
        $this->form_validation->set_rules($this->rules());
        $newName = time() . '-' . $_FILES['pdf']['name'];

        $config['upload_path'] = 'uploads/pdf/';
        $config['allowed_types'] = 'pdf|PDF|application/pdf';
        $config['file_name'] = $newName;
        $config['overwrite'] = true;
        $config['max_size'] = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('pdf')) {
            return $this->upload->data('file_name');
        } else {
            $this->session->set_flashdata('danger', "Error saat mengunggah PDF. " . $this->upload->display_errors());
            redirect('liturgi/create');
        }
    }

    // method for create
    public function save()
    {
        if ($this->db->insert($this->table, $this)) {
            $this->session->set_flashdata('success', 'Data berhasil ditambahkan!');
            redirect('liturgi');
        } else {
            $this->session->set_flashdata('danger', 'Data gagal ditambahkan!');
            redirect('liturgi/create');
        }
    }

    // method for get all data
    public function getAll()
    {
        return $this->db->order_by('id', direction:'DESC')->get($this->table)->result();
    }

    // method for get data by slug
    public function getBySlug($slug)
    {
        $data = $this->getAll();
        $row = null;
        foreach ($data as $row) {
            if ($row->slug === $slug) {
                return $row;
            }
        }
    }

    // method for get data by id
    public function getById($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    // method for delete by slug
    public function deleteBySlug($slug)
    {
        $data = $this->getAll();
        foreach ($data as $item) {
            if ($item->slug === $slug) {
                $this->db->delete($this->table, ['slug' => $slug]);
                $this->session->set_flashdata('success', 'Data <strong>' . $item->title . '</strong> berhasil dihapus!');
                redirect('liturgi');
            }
        }
    }

    // method for update by slug
    public function updateBySlug($slug, $isAjax = false)
    {
        $data = $this->getAll();
        foreach ($data as $item) {
            if ($item->slug === $slug) {
                $this->title = $this->title;
                $this->image = $this->image;
                $this->pdf = $this->pdf;
                $this->slug = $slug;
                // $this->slug = $item->slug;
                $this->db->update($this->table, $this, ['slug' => $slug]);
                if ($isAjax) {
                    header('Content-Type: application/json');
                    echo json_encode(['status' => true, 'data' => $this]);
                } else {
                    $this->session->set_flashdata('success', 'Data <strong>' . $item->title . '</strong> berhasil diubah!');
                    redirect('liturgi');
                }
            }
        }
    }
}