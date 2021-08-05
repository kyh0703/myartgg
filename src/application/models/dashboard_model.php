<?php
class Dashboard_model extends Base_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function gets()
    {
        return $this->db->query("SELECT * FROM ci_dashboard")->result();
    }

    public function get($id)
    {
        $data = $this->db->get_where('ci_dashboard', $id)->row();
        return $data;
    }

    public function save()
    {
        $this->load->helper('url');
        $data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content')
        );
        return $this->db->insert('ci_dashboard', $data);
    }
}
