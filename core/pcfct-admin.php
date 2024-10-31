<?php
global $pagenow;
if($pagenow == 'plugins.php'){
    add_action('admin_notices', 'pcfct_admin_notice');
}

function pcfct_admin_notice(){
    ?>
    <div class="updated notice">
        <p><strong>PCF Countdown</strong></p>
        <p>Have you considered upgrading to premium? <a href="http://www.pcfutures.co.uk/plugins/premium-countdown/" target="_blank">Click here for information!</a></p>
    </div>
    <?php
}

?>