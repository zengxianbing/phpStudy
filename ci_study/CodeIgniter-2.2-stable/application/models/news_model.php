<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class News_model extends CI_Model
{

    const TBL = 'news';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function add_news($data)
    {
        return $this->db->insert(self::TBL, $data);
    }

    public function list_news()
    {
        $query = $this->db->get(self::TBL);
        return $query->result_array();
    }

    public function delete_news($id)
    {
        return $this->db->delete('news', array(
            'id' => $id
        ));
        // return  $this->db->delete()
    }
}

?>