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
        
        if (!$contact_name || !$contact_email || !$contact_subject || !$contact_message || $contact_validate != "4") {
            
            //set flash data for error/success messages
            $this->session->set_flashdata('message', '<style>div.banner-hide {display:none;}</style><div class="banner-text"><h1 class="responsive-headline">Hmm. Try Again?</h1><br /><h3>Psssst. Check your math.</h3></div>');
            
            //redirect back to home page and display flash message
            redirect();
            
        } else {
            
            //$headers[] = 'MIME-Version: 1.0';
            //$headers[] = 'Content-type: text/html; charset=iso-8859-1';

            //Send using standard PHP Mail Function
            //CodeIgniter email library not working on server
            //mail($contact_to, $contact_subject, $contact_message, implode("\r\n", $headers));
            mail('jumorrow@protonmail.com' , 'test from inside ci', 'test from ci');
            //set flash data for error/success 
            $this->session->set_flashdata('message', '<style>div.banner-hide {display:none;}</style><div class="banner-text"><h1 class="responsive-headline">Got Your Message!</h1><br /><h3>You will hear from me shortly.</h3></div>');
            
            //redirect back to home page and display flash message
            redirect();
            }
    }
    public function testmail()
    {
        mail('jumorrow@protonmail.com' , 'test from inside ci', 'test from ci');
    }
}