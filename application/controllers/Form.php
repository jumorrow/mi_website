<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

   /**
     * Contact Action
     *
     * @return $this
     */
    public function contact()
    {
        $contact_name = $this->input->post('contact_name');
        $contact_email = $this->input->post('contact_email');
        $contact_subject = $this->input->post('contact_subject');
        $contact_message = $this->input->post('contact_message');
        $contact_validate = $this->input->post('contact_validate');
        
        $ip_address = $this->input->ip_address();
        $ip_link = 'http://www.infosniper.net/index.php?ip_address=' . $ip_address . '&map_source=1&overview_map=1&lang=1&map_type=1&zoom_level=7';

        $contact_from = get_email_address();
        $contact_to = get_email_address();
       
        if (!$contact_name || !$contact_email || !$contact_subject || !$contact_message || $contact_validate != "4") {
            $this->session->set_flashdata('message', '<style>div.banner-hide {display:none;}</style><div class="banner-text"><h1 class="responsive-headline">Hmm. Try Again?</h1><br /><h3>Psssst. Check your math.</h3></div>');
            
            //redirect back to home page and display flash message
            redirect();
            
        } else {
            $this->load->library('email');
            $this->email->from($contact_from, 'Contact Form');
            $this->email->to($contact_to);
            $this->email->reply_to($contact_email, $contact_name);

            $this->email->subject($contact_subject);
            $this->email->message("Message : {$contact_message}.  Geo : {$ip_link}");

            $this->email->send();
            $this->session->set_flashdata('message', '<style>div.banner-hide {display:none;}</style><div class="banner-text"><h1 class="responsive-headline">Got Your Message!</h1><br /><h3>You will hear from me shortly.</h3></div>');
            
            //redirect back to home page and display flash message
            redirect();
            }
    }             
}
