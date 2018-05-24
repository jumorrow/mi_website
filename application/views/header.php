<?php defined('BASEPATH') OR exit('No direct script access allowed');?> 

<header id="home">
    <nav id="nav-wrap">
        <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
        <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>
        <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="#home">Home</a></li>
            <li><a class="smoothscroll" href="#about">About</a></li>
            <li><a class="smoothscroll" href="#resume">Resum&eacute;</a></li>
            <li><a class="smoothscroll" href="#call-to-action">Mentorship</a></li>
            <li><a class="smoothscroll" href="#testimonials">Testimonials</a></li>
            <li><a class="smoothscroll" href="#contact">Contact</a></li>
        </ul>
    </nav>
    <div class="row banner">
        <?php echo $this->session->flashdata('message'); ?>
        <div class="banner-text banner-hide">
            <h1 class="responsive-headline">Howdy, I'm Justin.</h1>
            <h3>Thanks for stopping by, I'd offer you a coffee but we're not quite there yet with technology. Let's work on making e-coffee a real thing.<br />
            Or maybe we just <a class="smoothscroll" href="#about">start scrolling</a> and learn more <a class="smoothscroll" href="#about">about me </a>?</h3>
            <hr />
        </div>
    </div>
    <p class="scrolldown"><a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a></p>
</header>