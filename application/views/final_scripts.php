<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<script src="<?php echo get_jquery_assets();?>" type="text/javascript"></script>

<script type="text/javascript">
window.jQuery || document.write('<script src="<?php echo get_asset_path('js','jquery-1.10.2.min.js');?>"><\/script>');
grecaptcha.ready(function() {
    grecaptcha.execute('6LdJgd0UAAAAACu4JhWz8JJHgWUbgbIFlWOx1AUV', {action: 'homepage'}).then(function(token) {
       ...
    });
});

</script>

<script type="text/javascript" src="<?php echo get_asset_path('js','jquery-migrate-1.2.1.min.js');?>"></script>
<script src="<?php echo get_asset_path('js','jquery.flexslider.js');?>" type="text/javascript"></script>
<script src="<?php echo get_asset_path('js','waypoints.js');?>" type="text/javascript"></script>
<script src="<?php echo get_asset_path('js','jquery.fittext.js');?>" type="text/javascript"></script>
<script src="<?php echo get_asset_path('js','magnific-popup.js');?>" type="text/javascript"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LdJgd0UAAAAACu4JhWz8JJHgWUbgbIFlWOx1AUV"></script>
<script src="<?php echo get_asset_path('js','init.js');?>" type="text/javascript"></script>
