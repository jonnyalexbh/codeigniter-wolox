<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    /**
     * __construct
     *
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel', 'm');
    }

    /**
     * index
     *
     */
    public function index()
    {
        $users = $this->m->all();
        $this->load->view('users/index', compact('users'));
    }

    /**
     * create
     *
     */
    public function create()
    {
        $this->load->helper('form');
        $this->load->view('users/create');
    }

    /**
     * store
     *
     */
    public function store()
    {
        $this->m->create();
        $this->session->set_flashdata('success', 'user added correctly');
        redirect('user/create', 'refresh');
    }

    /**
     * show
     *
     */
    public function show($id)
    {
        $user = $this->m->find($id);
        $this->load->view('users/show', compact('user'));
    }

    /**
     * destroy
     *
     */
    public function destroy($id)
    {
        $this->m->destroy($id);
        redirect('user/index');
    }
}
