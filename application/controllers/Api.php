<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH . 'libraries/REST_Controller.php');

class Api extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('session');
        $this->checklogin = $this->session->userdata('logged_in');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
    }

    public function index() {
        $this->load->view('welcome_message');
    }

    function gpsPosition_get($user_id) {
        $this->db->where_in('user_id', $user_id);
        $query = $this->db->get('user_position');
        $current_postion = $query->row();
        if ($current_postion) {
            $this->response($current_postion);
        }
    }

    function gpsPosition_post() {
        $user_id = $this->post('user_id');
        $lat = $this->post('lat');
        $lng = $this->post('lng');
        
        

        $this->db->where_in('user_id', $user_id);
        $query = $this->db->get('user_position');
        $current_postion = $query->row();
 
        if ($current_postion) {
            $this->db->set('lat', $lat);
            $this->db->set('lng', $lng);
            $this->db->where('user_id', $this->user_id);
            $this->db->update('user_position');
          
        } else {
            $positionArray = array(
                'user_id' => $this->input->post('user_id'),
                'lat' => $this->input->post('lat'),
                'lng' => $this->input->post('lng'),
                'offer_drive_id' => $this->input->post('offer_drive_id'),
               
            );
            $this->db->insert('user_position', $postion);
     
        }
        $positions = array(
            'lat' => $this->input->post('lat'),
            'lng' => $this->input->post('lng'),
        );
        $this->response($positions);
    }

}

?>