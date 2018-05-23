<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!--- Doc Type Content
================================================== -->
<?php $this->load->view('doc_type');?>

<head>
    <?php $this->load->view('head');?>
</head>

<body>

<!--- Header Content
================================================== -->
<?php $this->load->view('header');?>

<!--- About Content
================================================== -->
<?php $this->load->view('about');?>

<!--- Resume Content
================================================== -->
<?php $this->load->view('resume');?>

<!--- Mentorship Content
================================================== -->
<?php $this->load->view('mentorship');?>

<!--- Testimonial Content
================================================== -->
<?php $this->load->view('testimonials');?>

<!-- Contact Section
================================================== -->
<?php $this->load->view('contact_form');?>

<!-- Footer Content
================================================== -->
<?php $this->load->view('footer');?>

<!-- Final Scripts
================================================== -->
<?php $this->load->view('final_scripts');?>

</body>
</html>