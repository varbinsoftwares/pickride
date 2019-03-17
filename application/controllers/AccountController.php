<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AccountController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->model('User_model');
        $this->load->model('Product_model');
        $session_user = $this->session->userdata('logged_in');
        if ($session_user) {
            $this->user_id = $session_user['login_id'];
        } else {
            $this->user_id = 0;
        }
    }

    function profile() {

        if ($this->user_id == 0) {
            redirect('login');
        }
        $user_details = $this->User_model->user_details($this->user_id);
        #$data['user_details'] = $user_details;
        $data['user_data'] = $user_details;
        //print_r($data);
        $data['msg'] = "";
        $query = $this->db->query("SELECT * from `offer_drive` WHERE user_id = $this->user_id order by id desc");

        $data_value = $query->result_array();

        $offer_container = array();

        foreach ($data_value as $key => $value) {
            $offerdata = $value;
            #print_r($offerdata);

            $query1 = $this->db->query("SELECT cp.id,cp.status,ur.user_name,ur.mobile_no FROM
                `confirn_pick_drive` as cp
                join user_registration as ur on cp.user_id = ur.id
                WHERE cp.offer_drive_id = " . $value['id'] . " ");
            $temp1 = $query1->result_array();
            $offerdata['picker'] = $temp1;
            array_push($offer_container, $offerdata);
        }
        $data['user_ride_data'] = $offer_container;

        ##########
        if (isset($_POST['confirm_pick_drive_id'])) {
            $c_p_d_id = $this->input->post('confirm_pick_drive_id');
            $this->db->set('status', 'Done');
            $this->db->where('id', $c_p_d_id);
            $this->db->update('confirn_pick_drive');
            redirect('AccountController/profile');
        }

        #print_r($data);
        $this->load->view('profile', $data);
    }

    function registration() {
        $data1['msg'] = "";

        if (isset($_POST['submit'])) {

            $mobile_no = $this->input->post('mobile_no');
            $password = $this->input->post('password');
            $user_name = $this->input->post('user_name');
            $cpassword = $this->input->post('con_password');


            if ($cpassword == $password) {
                $user_check = $this->User_model->check_user($mobile_no);
                if ($user_check) {
                    $data1['msg'] = 'Mobile No. Already Registered.';
                } else {
                    $userarray = array(
                        'user_name' => $user_name,
                        'mobile_no' => $mobile_no,
                        'password' => md5($password),
                        'password2' => $password,
                        'registration_datetime' => date("Y-m-d h:i:s A")
                    );
                    $this->db->insert('user_registration', $userarray);
                    $user_id = $this->db->insert_id();

                    $sess_data = array(
                        'mobile_no' => $mobile_no,
                        'user_name' => $user_name,
                        'login_id' => $user_id,
                    );

                    $this->session->set_userdata('logged_in', $sess_data);
                    redirect('AccountController/profile');
                }
            } else {
                $data1['msg'] = 'Password did not match.';
            }
        }


        $this->load->view('registration', $data1);
    }

    //login page
    function login() {

        $otp = rand(1000, 9999);
        if (isset($_POST['signIn'])) {


            $username = $this->input->post('mobile_no');

            redirect('AccountController/otpcheck');
        }

        $this->load->view('login');
    }

    // OTP
    function otpcheck() {


        if (isset($_POST['signIn'])) {


            $username = $this->input->post('mobile_no');

            $otp = rand(1000, 9999);
            $this->db->select('*');
            $this->db->from('user_registration');
            $this->db->where('mobile_no', $username);
            $this->db->limit(1);
            $query = $this->db->get();

            if ($query->num_rows() > 0) {
                $userdata = $query->result_array()[0];
                $this->db->set('password2', $otp);
                $this->db->where('mobile_no', $username);
                $this->db->update('user_registration');
                $sess_data = array(
                    'mobile_no' => $username,
                    'user_name' => $username,
                    'login_id' => $userdata['id'],
                );
                $user_id = $userdata['id'];
                $session_cart = $this->session->userdata('session_cart');
                $this->session->set_userdata('logged_in', $sess_data);
                //redirect('AccountController/profile');
            } else {
                #new registration
                $userarray = array(
                    'user_name' => $username,
                    'mobile_no' => $username,
                    'password' => md5($otp),
                    'password2' => $otp,
                    'registration_datetime' => date("Y-m-d h:i:s A")
                );
                $this->db->insert('user_registration', $userarray);
                $user_id = $this->db->insert_id();

                $sess_data = array(
                    'mobile_no' => $user_name,
                    'user_name' => $user_name,
                    'login_id' => $user_id,
                );

                $this->session->set_userdata('logged_in', $sess_data);
                //redirect('AccountController/profile');
            }
        }

        $this->load->view('otpcheck');
    }

    // Logout from admin page
    function logout() {
        $newdata = array(
            'username' => '',
            'password' => '',
            'logged_in' => FALSE,
        );

        $this->session->unset_userdata($newdata);
        $this->session->sess_destroy();

        redirect('AccountController/login');
    }

    function confirmdrive() {
        $query = $this->db->query("SELECT od.*,cp.op_date_time FROM `confirn_pick_drive` as cp
        join offer_drive as od on cp.offer_drive_id = od.id
        WHERE cp.user_id = $this->user_id and cp.STATUS = 'Done'  ");

        $result_array = $query->result_array();
        $data['result'] = $result_array;
        $this->load->view('confirmdrive', $data);
    }

}

?>