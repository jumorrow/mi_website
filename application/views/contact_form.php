<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<section id="contact">
    <div class="row">
        <div class="eight columns">
            <form action="<?php echo site_url('form/contact');?>" method="post">
                <fieldset>
                    <div>
                        <label for="contact_name">Name <span class="required">*</span></label>
                        <input type="text" value="" size="35" id="contact_name" name="contact_name" required="required" />
                    </div>
                    <div>
                        <label for="contact_email">Email <span class="required">*</span></label>
                        <input type="text" value="" size="35" id="contact_email" name="contact_email" required="required" />
                    </div>
                    <div>
                        <label for="contact_subject">Subject</label>
                        <input type="text" value="" size="35" id="contact_subject" name="contact_subject" required="required" />
                    </div>
                    <div>
                        <label for="contact_message">Message <span class="required">*</span></label>
                        <textarea cols="50" rows="15" id="contact_message" name="contact_message" required="required"></textarea>
                    </div>
                    <div>
                        <label for="contact_validate">2 + 2 =</label>
                        <input type="text" value="" size="35" id="contact_validate" name="contact_validate" required="required" />
                    </div>
                <div>
                    <button class="submit">Submit</button>
                    <span id="image-loader"><img alt="" src="images/loader.gif"></span>
                </div>
                </fieldset>
            </form>
        </div>
        <aside class="four columns footer-widgets">
        <div class="widget widget_contact">
            <h4>Get Started Now</h4>
            <p>Use the contact form to request more information about technical career mentorship.</p>
            <p>Average response time is within 2-3 business days.</p>
        </div>
        </aside>
    </div>
</section>
