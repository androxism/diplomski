<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/js/main.js'></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/tooltips.css">
        <link rel='stylesheet' type='text/css' href='<?php echo base_url();?>assets/css/odabirLika.css'>
    </head>
    <body>
        <div class='wrapper'>
            <div class='header'>
                <p>Odabir lika</p>
            </div>
                <div class='inner-left'>

                </div>
                <div class='inner-right'>
                    <div class='opis'>
                        <div class='opis-inner'>
                            <div class='opis-inner-text'>
                                <div id='tekstLika'><h1 style='text-align: center; padding-top:50px;'>Odaberite svoga lika klikom na ikonu</h1><div class='arrow bounce'></div></div>
                            </div>
                        </div>
                    </div>
                    <form class='testtt' method='post' action="<?php echo site_url('welcome/spremi_lika'); ?>">
                        <label class='mage' for='toggle-1' <?php if($session['spol']=='m'){echo 'onclick="return one();"';} else{echo 'onclick="return oneZ();"';} ?>></label>
                        <input type='radio' name='odabir' value='mage' id='toggle-1' checked>
                        <label class='healer' for='toggle-2' <?php if($session['spol']=='m'){echo 'onclick="return two();"';} else{echo 'onclick="return twoZ();"';} ?>></label>
                        <input type='radio' name='odabir' value='heal' id='toggle-2'>
                        <label class='warrior' for='toggle-3' <?php if($session['spol']=='m'){echo 'onclick="return three();"';} else{echo 'onclick="return threeZ();"';} ?>></label>
                        <input type='radio' name='odabir' value='warr' id='toggle-3'>
                        </br><input style='width:200px; margin-top:20px;' type='image' src='../assets/images/gumb.png' alt='Submit'>
                    </form> 
                </div>
        </div>
    </body>
</html>  

