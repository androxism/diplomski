<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bitka Znanja</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/login.css">
    </head>
    <body>
        <div class="center">
                <form style="height:100%;" action="<?php echo site_url('welcome/login'); ?>" method="post">
                    <div class="center-inner">
                        <div id="inner">
                            <div id="inner-username">
                                <input type="text" placeholder="Ovdje upiši ime..."  name="username" />
                            </div>
                            <div id="inner-password">
                                <input type="password" placeholder="Ovdje upiši lozinku..."  name="password" />
                            </div>
                        </div>
                    </div>
                <input type="submit" name="submit" value="" id="kreni" >
            </form>
        </div>
    </body>
</html>
