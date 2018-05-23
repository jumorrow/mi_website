<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<section id="about">
    <div class="row">
        <div class="three columns"><img class="profile-pic" src="<?php echo get_asset_path('images','profilepic.jpg');?>" alt=""></div>
        <div class="nine columns main-col">
            <h2>About Me</h2>
            <p>During my fourteen years of working experience, I've held positions within technical sales engineering, complex solutions selling, e-commerce software architecture, software engineering/development, project and account management, team building, application support and network engineering. I also co-own and operate multiple e-commerce store fronts.</p>
            <p>Outside of work, you'll likely find me listening to Radiohead, searching for the finest nigiri this planet has to offer or mountain biking through the woods.</p>
            <div class="row">
                <div class="columns contact-details">
                    <h2>Contact Details</h2>
                    <p class="address"><span>Justin Ellis Morrow</span><br />
                    <span><?php echo get_phone_number();?></span><br />
                    <span><a href="mailto:<?php echo get_email_address();?>"><?php echo get_email_address();?></a></span><br />
                    <span><a href="<?php echo get_linkedin_url();?>">LinkedIn</a></span></p>
                </div>
                <div class="columns download">
                    <p><a href="<?php echo get_asset_path('assets','resumes/justin-morrow.pdf');?>" class="button" target="_blank" >Download Resum&eacute;</a></p>
                </div>
            </div>
        </div>
    </div>
</section>