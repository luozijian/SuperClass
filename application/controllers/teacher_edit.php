<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class teacher_edit extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
{
    parent::__construct();
    $this->load->model('app');
    $this->load->helper('form');
}

    public function index(){
        $this->load->view('header');
        $this->load->view('edit');
        $this->load->view('footer');
    }

    public function create()
    {
        $this->app->create_subject();
        $this->load->view('success');
    }

    public function do_upload()
    {
        $config['upload_path']      = './uploads/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']     = 100000;
        $config['max_width']        = 1020004;
        $config['max_height']       = 7600008;

        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        echo'上传成功,';
        echo'<a href="index">继续填写</a>';
    }

}