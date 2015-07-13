<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/js/main.js'></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/tooltips.css">
        <link rel='stylesheet' type='text/css' href='<?php echo base_url();?>assets/css/odabirCarolije.css'>
    </head>
    <body>
        <div class="header"><p>Odaberi čaroliju</p></div>
            <div class="wrapper-center">
                <div class="inner-wrapper">
                    <div class="inner-wrapper-full">
                        <form class="carolije_form" method="post" action="<?php echo site_url('welcome/spremi_caroliju'); ?>">
                            <table>
                                <tbody>
                                    <tr>
                                      <?php for ($i = 1; $i < 4; $i++) { ?>
                                        <td>
                                          <div class="icon-spell">
                                            <label class="prvaCarolija" data-tooltip="<?php $var=0; $this->load->helper('funkcije_helper'); echo tooltipCarolije($i, $lik, $var); ?>" for="<?php echo $lik . $i; ?>" style="background-image:
                                              url('../assets/images/<?php echo $lik . $i; ?>.png');"></label>
                                            <input type="radio" name="odabir" value="<?php echo $lik . $i; ?>"
                                              id="<?php echo $lik . $i; ?>" <?php echo $i == 1 ? 'checked' : ''; ?>>
                                          </div>
                                        </td>
                                      <?php } ?>
                                    </tr>
                                </tbody>
                            </table>
                            <input type="submit" name="" value="Odaberi" id="kreni">
                        </form>
                    </div>
                </div>
            </div>
    </body>
</html>


<!--<td>-->
<!--  <div class="icon-spell">-->
<!--    <label data-tooltip="I’m the tooltip text" class="prvaCarolija" for="toggle-1" style="background-image: url('.-->
<!--    ./assets/images/spell1.png');"></label>-->
<!--    <input type="radio" name="odabir" value="mage1" id="toggle-1"-->
<!--      onchange="toggleStatus()">-->
<!--  </div>-->
<!--</td>-->
<!--<td>-->
<!--  <div class="icon-spell">-->
<!--    <label class="drugaCarolija" for="toggle-2" style="background-image: url('../assets/images/spell2.png');"></label>-->
<!--    <input type="radio" name="odabir" value="mage2" id="toggle-2"-->
<!--      onchange="toggleStatus()">-->
<!--  </div>-->
<!--</td>-->
<!---->
<!---->
<!---->
<!---->
<!---->

