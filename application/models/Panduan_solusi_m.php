<?php defined('BASEPATH') or exit('No direct script access allowed');

class Panduan_solusi_m extends CI_Model
{

    public function get($id = null)
    {
        $this->db->from('panduan_solusi');
        if ($id != null) {
            $this->db->where('panduan_solusi_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    // public function add($post)
    // {
    //     //tambah dan edit biar satu form
    //     $params = [
    //         'nama_aplikasi' => $post['nama_aplikasi'],
    //         'user' => $post['user'],
    //         'password' => $post['password'],
    //         'link' => $post['link'],
    //     ];
    //     $this->db->insert('product_knowledge', $params);
    // }

    // public function edit($post)
    // {
    //     //tambah dan edit biar satu form
    //     $params = [
    //         'nama_aplikasi' => $post['nama_aplikasi'],
    //         'user' => $post['user'],
    //         'password' => $post['password'],
    //         'link' => $post['link'],
    //         'updated' => date('Y-m-d H:i:s')
    //     ];
    //     $this->db->where('product_knowledge_id', $post['id']);
    //     $this->db->update('product_knowledge', $params);
    // }

    // public function del($id)
    // {
    //     $this->db->where('product_knowledge_id', $id);
    //     $this->db->delete('product_knowledge');
    // }
}
