<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Rollbar\Payload\Level;
use Rollbar\Rollbar;

class Home extends CI_Controller
{
    /**
     * __construct
     *
     */
    public function __construct()
    {
        Rollbar::init(array(
            'access_token' => getenv('ROLLBAR_TOKEN'),
            'environment' => ENVIRONMENT,
        ));

        parent::__construct();
    }

    /**
     * index
     *
     */
    public function index()
    {
        // Rollbar::log(Level::WARNING, 'testing from codeigniter framework');

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
