<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  /**
  * index
  *
  */
	public function index()
	{
    $data['title'] = 'title home';
		$this->load->view('home', $data);
  }
  
  /**
  * create
  *
  */
  public function create()
  {
    echo 'showing create';
  }

  /**
  * store
  *
  */
  public function store()
  {
    echo 'showing store';
  }

  /**
  * show
  *
  */
  public function show()
  {
    echo 'showing show';
  }

  /**
  * edit
  *
  */
  public function edit()
  {
    echo 'showing edit';
  }

  /**
  * update
  *
  */
  public function update()
  {
    echo 'showing update';
  }

  /**
  * destroy
  *
  */
  public function destroy()
  {
    echo 'showing destroy';
  }
}
