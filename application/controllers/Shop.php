<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('session');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
    }

    public function index() {
        if (isset($_POST['submit'])) {
            $off_drive = array(
                'user_name' => $this->input->post('person_name'),
                'contact_no' => $this->input->post('contact_no'),
                'vehicle_name' => $this->input->post('vehicle_name'),
                'vehicle_no' => $this->input->post('vehicle_no'),
            );

            $this->db->insert('offer_drive', $off_drive);
        }


        $this->load->view('home');
    }

    public function contactus() {
        if (isset($_POST['sendmessage'])) {
            $web_enquiry = array(
                'last_name' => $this->input->post('last_name'),
                'first_name' => $this->input->post('first_name'),
                'email' => $this->input->post('email'),
                'contact' => $this->input->post('contact'),
                'subject' => $this->input->post('subject'),
                'message' => $this->input->post('message'),
                'datetime' => date("Y-m-d H:i:s a"),
            );

            $this->db->insert('web_enquiry', $web_enquiry);

            $emailsender = email_sender;
            $sendername = email_sender_name;
            $email_bcc = email_bcc;
            $sendernameeq = $this->input->post('last_name') . " " . $this->input->post('first_name');
            if ($this->input->post('email')) {
                $this->email->set_newline("\r\n");
                $this->email->from($this->input->post('email'), $sendername);
                $this->email->to(email_bcc);
//                $this->email->bcc(email_bcc);
                $subjectt = $this->input->post('subject');
                $orderlog = array(
                    'log_type' => 'Enquiry',
                    'log_datetime' => date('Y-m-d H:i:s'),
                    'user_id' => 'ENQ',
                    'log_detail' => "Enquiry from website - " . $this->input->post('subject')
                );
                $this->db->insert('system_log', $orderlog);

                $subject = "Enquiry from website - " . $this->input->post('subject');
                $this->email->subject($subject);

                $web_enquiry['web_enquiry'] = $web_enquiry;

                $htmlsmessage = $this->load->view('Email/web_enquiry', $web_enquiry, true);
                $this->email->message($htmlsmessage);

                $this->email->print_debugger();
                $send = $this->email->send();
                if ($send) {
                    echo json_encode("send");
                } else {
                    $error = $this->email->print_debugger(array('headers'));
                    echo json_encode($error);
                }
            }

            redirect('Shop/contactus');
        }
        $this->load->view('pages/contactus');
    }

    public function aboutus() {
        $this->load->view('pages/aboutus');
    }

    public function faq() {
        $this->load->view('pages/faq');
    }

    public function catalogue() {
        $this->load->view('pages/catalogue');
    }

    public function appointment() {
        if (isset($_POST['submit'])) {
            $appointment = array(
                'last_name' => $this->input->post('last_name'),
                'first_name' => $this->input->post('first_name'),
                'email' => $this->input->post('email'),
                'contact_no' => $this->input->post('contact_no'),
                'select_time' => $this->input->post('select_time'),
                'select_date' => $this->input->post('select_date'),
                'no_of_person' => $this->input->post('no_of_person'),
                'referral' => $this->input->post('referral'),
                'datetime' => date("Y-m-d H:i:s a"),
                'appointment_type' => "Local",
            );

            $this->db->insert('appointment_list', $appointment);

            $emailsender = email_sender;
            $sendername = email_sender_name;
            $email_bcc = email_bcc;
            $sendernameeq = $this->input->post('last_name') . " " . $this->input->post('first_name');
            if ($this->input->post('email')) {
                $this->email->set_newline("\r\n");
                $this->email->from(email_bcc, $sendername);
                $this->email->to($this->input->post('email'));
                $this->email->bcc(email_bcc);
                $subjectt = "Octopuscart Appointment : " . $appointment['select_date'] . " (" . $appointment['select_time'] . ")";
                $orderlog = array(
                    'log_type' => 'Appointment',
                    'log_datetime' => date('Y-m-d H:i:s'),
                    'user_id' => 'Appointment User',
                    'log_detail' => $sendernameeq . "  " . $subjectt
                );
                $this->db->insert('system_log', $orderlog);

                $subject = $subjectt;
                $this->email->subject($subject);

                $appointment['appointment'] = $appointment;

                $checksend = 1;
                $htmlsmessage = $this->load->view('Email/appointment', $appointment, true);
                if ($checksend) {
                    $this->email->message($htmlsmessage);
                    $this->email->print_debugger();
                    $send = $this->email->send();
                    if ($send) {
                        echo json_encode("send");
                    } else {
                        $error = $this->email->print_debugger(array('headers'));
                        echo json_encode($error);
                    }
                } else {
                    echo $htmlsmessage;
                }
            }

            redirect('Shop/appointment');
        }
        $this->load->view('pages/appointment');
    }

    public function pickride() {
        $data['msg'] = '';
        //echo $this->user_id;
        $current_date =  date("m/d/Y");
       
        $query = $this->db->query("SELECT of.*, IF((select st.offer_drive_id from confirn_pick_drive as st where st.user_id = ".$this->user_id." and st.offer_drive_id = of.id ), 1, 0) as stat FROM `offer_drive` as of where of.off_date >= '$current_date' ");

        $attr_value = $query->result_array();
        $data["attr_value"] = $attr_value;
        if (isset($_POST['confirm_pick_drive'])) {
            
            
            $this->db->select('*');
            $this->db->from('confirn_pick_drive');
            
            $this->db->order_by("id", "DESC");
            $this->db->where('user_id', $this->user_id);
            
            $query = $this->db->get();
            if ($query->num_rows() > 0) {
                
            } else {
                $data1 = array(
                    'offer_drive_id' => $this->input->post('offer_drive_id'),
                    'op_date_time' => date("Y-m-d h:i:s A"),
                    'user_id' => $this->user_id
                );
                $this->db->insert('confirn_pick_drive', $data1);
                $data['msg'] = "yes";
            }
        }
        $this->load->view('pickdrive', $data);
    }
    
    public function drivemap($id) {
        
        $query = $this->db->query("SELECT start_point,end_point from offer_drive where id = $id");

        $data['data'] = $query->result_array();
      
        $this->load->view('drivemap',$data);
    }

    public function offerdrive() {
        
        if (isset($_POST['submit'])) {
            $off_drive = array(
                'user_id' => $this->user_id,
                'person_name' => $this->input->post('person_name'),
                'contact_no' => $this->input->post('contact_no'),
                'vehicle_name' => $this->input->post('vehicle_name'),
                'vehicle_no' => $this->input->post('vehicle_no'),
                'off_date' => $this->input->post('off_date'),
                'start_point' => $this->input->post('start_point'),
                'end_point' => $this->input->post('end_point'),
                'available_sit' => $this->input->post('available_sit'),
                'pickup_time' => $this->input->post('pickup_time'),
                'offer_amount' => $this->input->post('offer_amount'),
                's_lat' => $this->input->post('lat'),
                's_lng' => $this->input->post('lng'),
            );

            $this->db->insert('offer_drive', $off_drive);
             redirect('Shop/pickride');
        }
        $this->load->view('offerdrive');
    }

}
