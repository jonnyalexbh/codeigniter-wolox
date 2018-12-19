<?php
class UserModel extends CI_Model
{

    /**
     * __construct
     *
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
     * all
     *
     */
    public function all()
    {
        $users = $this->db->get('users');
        return $users->result();
    }
}
