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
        $contact_to = get_email_address();
        
        //server specific config for email->send();
        $config['protocol']    = 'smtp';
        
        //add values to email config
        $this->email->initialize($config);
        
        if (!$contact_name || !$contact_email || !$contact_subject || !$contact_message || $contact_validate != "4") {
            $this->session->set_flashdata('message', '<style>div.banner-hide {display:none;}</style><div class="banner-text"><h1 class="responsive-headline">Hmm. Try Again?</h1><br /><h3>Psssst. Check your math.</h3></div>');
            
            //redirect back to home page and display flash message
            redirect();
            
        } else {
            
            //needs to be specific e-mail address defined on hostgator to send
            $this->email->from('jmorrow@gator4095.hostgator.com', 'Contact Form');
            $this->email->to($contact_to);
            $this->email->reply_to($contact_email, $contact_name);

            $this->email->subject($contact_subject);
            $this->email->message($contact_message);

            $this->email->send();
            $this->session->set_flashdata('message', '<style>div.banner-hide {display:none;}</style><div class="banner-text"><h1 class="responsive-headline">Got Your Message!</h1><br /><h3>You will hear from me shortly.</h3></div>');
            
            //redirect back to home page and display flash message
            redirect();
            }
    }  
}