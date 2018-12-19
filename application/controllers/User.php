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
     * show
     *
     */
    public function show($id)
    {
      $user = $this->m->find($id);
      $this->load->view('users/show', compact('user'));
    }
}
