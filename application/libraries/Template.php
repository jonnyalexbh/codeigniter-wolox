<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Template
{
    public $ci;

    /**
     * __construct
     *
     */
    public function __construct()
    {
        $this->ci = &get_instance();
        $this->page_title = '';
        $this->navbar_menu = array();
    }

    /**
     * load
     *
     */
    public function load($tpl_view, $body_view = '', $data = array())
    {
        $data['page_title'] = $this->page_title;
        $data['navbar_menu'] = $this->navbar_menu;
        $data['body'] = ($body_view == '') ? '' : $this->ci->load->view($body_view, $data, true);
        $this->ci->load->view('layouts/' . $tpl_view, $data);
    }
}
