<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!--- Doc Type Content
================================================== -->
<?php $this->load->view('doc_type');?>

<html class="no-js" lang="en">
<!--<![endif]-->
<head>
<!--- Head Content
================================================== -->
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

<!--- Footer Content
================================================== -->
<?php $this->load->view('footer');?>

<!--- Final Script Content
================================================== -->
<?php $this->load->view('final_scripts');?>
</body>
</html>
