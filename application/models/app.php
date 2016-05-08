<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/6 0006
 * Time: 11:58
 */
class app extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function create_subject(){
        $data = array(
            'subject' => $this->input->post('subject'),
            'img_url' => $this->input->post('img_url'),
            'question' => $this->input->post('question'),
            'point' => $this->input->post('point'),
            'tScore' => $this->input->post('tScore'),
            'reason' => $this->input->post('reason'),
        );

        return $this->db->insert('subject', $data);
    }
    public function get_subject(){
        $query = $this->db->get('subject');
        return $query->result_array();
    }
    public function answer_subject(){
        $data = array(
            'sScore' => $this->input->post('sScore'),
        );
        return $this->db->insert('stusubject', $data);
    }


    public function get_showanswer(){
        $this->db->select('*');
        $this->db->from('subject');
        $this->db->join('stusubject', 'subject.id = stusubject.id');
        $query = $this->db->get();
        return $query->result_array();
    }

}