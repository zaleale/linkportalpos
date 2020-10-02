<?php defined('BASEPATH') or exit('No direct script access allowed');

class Lacakresi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_not_login();

        $this->load->model('lacakresi_m');
    }

    public function index()
    {
        $data['row'] = $this->lacakresi_m->get();

        $this->template->load('template', 'lacakresi/lacakresi_data', $data);
    }

    // public function add()
    // {
    //     //tambah dan edit biar satu form
    //     $product_knowledge = new stdClass();
    //     $product_knowledge->product_knowledge_id = null;
    //     $product_knowledge->nama_aplikasi = null;
    //     $product_knowledge->user = null;
    //     $product_knowledge->password = null;
    //     $product_knowledge->link = null;
    //     $data = array(
    //         'page' => 'add',
    //         'row' => $product_knowledge
    //     );
    //     $this->template->load('template', 'product_knowledge/product_knowledge_form', $data);
    // }

    // public function edit($id)
    // {
    //     $query = $this->product_knowledge_m->get($id);
    //     if ($query->num_rows() > 0) {
    //         $product_knowledge = $query->row();
    //         $data = array(
    //             'page' => 'edit',
    //             'row' => $product_knowledge
    //         );
    //         $this->template->load('template', 'product_knowledge/product_knowledge_form', $data);
    //     } else {
    //         echo "<script>alert ('data tidak ditemukan');";
    //         echo "<script> window.location='" . site_url('product_knowledge') . "';</script>";
    //     }
    // }

    // public function process()
    // {
    //     $post = $this->input->post(null, TRUE);
    //     if (isset($_POST['add'])) {
    //         $this->product_knowledge_m->add($post);
    //     } else if (isset($_POST['edit'])) {
    //         $this->product_knowledge_m->edit($post);
    //     }

    //     if ($this->db->affected_rows() > 0) {
    //         echo "<script>alert ('data berhasil disimpan');</script>";
    //     }
    //     echo "<script> window.location='" . site_url('product_knowledge') . "';</script>";
    // }

    // public function del($id)
    // {
    //     //ini method post
    //     // $id = $this->input->post('user_id');

    //     //ini method get
    //     $this->product_knowledge_m->del($id);

    //     if ($this->db->affected_rows() > 0) {
    //         echo "<script>alert ('data berhasil dihapus');</script>";
    //     }
    //     echo "<script> window.location='" . site_url('product_knowledge') . "';</script>";
    // }
}
