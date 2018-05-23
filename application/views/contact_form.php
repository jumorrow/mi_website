<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<form action="<?php echo site_url('form/contact');?>" method="post" class="contact-form">
    <div>
      <p><span>Name : </span><br />
        <input type="text" name="contact_name" class="contact-name" required="required" />
      </p>
      <p><span>E-Mail : </span><br />
        <input type="email" name="contact_email" class="contact-email" required="required" />
      </p>
      <p><span>Subject : </span><br />
        <input type="text" name="contact_subject" class="contact-subject" required="required" />
      </p>
    </div>
    <div>
      <textarea name="contact_message" class="contact-message" required="required">Enter your message here, remember to be nice.</textarea>
    </div>
    <p><span>2 + 2 Equals? </span><br />
        <input type="text" name="contact_validate" class="contact-validate" required="required" />
    </p>
    <div>
      <input class="contact-submit" type="submit" name="contact_submitted" value="Send Me Details" />
    </div>
</form>
