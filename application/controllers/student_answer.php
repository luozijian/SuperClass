<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/8 0008
 * Time: 16:31
 */
class student_answer extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('app');
        $this->load->helper('form');
    }

    public function get(){
        $data['subdata'] = $this->app->get_subject();
        $this->load->view('studentanswer',$data);
    }

    public function answer(){
        $this->app->answer_subject();
        $data['studata'] = $this->app->get_showanswer();
        $this->load->view('showanswer',$data);
    }
}