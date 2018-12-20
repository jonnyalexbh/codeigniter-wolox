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

    /**
     * create
     *
     */
    public function create()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
        );

        $this->db->insert('users', $data);
        $last_id = $this->db->insert_id();

        return $last_id;
    }

    /**
     * find
     *
     */
    public function find($id)
    {
        $this->db->where('id', $id);

        $user = $this->db->get('users');
        return $user->row_array();

    }

    /**
     * destroy
     *
     */
    public function destroy($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("users");
    }
}
