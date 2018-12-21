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

        $this->template->page_title = 'Users';
        $this->template->load('default', 'users/index', compact('users'));
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
        redirect('user/index', 'refresh');
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
     * edit
     *
     */
    public function edit($id)
    {
        $this->load->helper('form');
        $user = $this->m->find($id);
        $this->load->view('users/edit', compact('user'));
    }

    /**
     * update
     *
     */
    public function update()
    {
        $this->m->update($this->input->post('id'));
        $this->session->set_flashdata('success', 'user updated correctly');
        redirect('user/index', 'refresh');
    }

    /**
     * destroy
     *
     */
    public function destroy($id)
    {
        $this->m->destroy($id);
        $this->session->set_flashdata('success', 'user successfully deleted');
        redirect('user/index', 'refresh');
    }
}
