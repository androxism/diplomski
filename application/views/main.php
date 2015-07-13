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
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/snapfit.js"></script> 
        <script type='text/javascript' src='<?php echo base_url();?>assets/js/main.js'></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/tooltips.css">
        <link rel='stylesheet' type='text/css' href='<?php echo base_url();?>assets/css/main.css'>
    </head>
    <body>
        <div class="wrapper">
            <div class="main">
                <div class="content-left">
                    <div class="content-inner-left">
                        <div class="inner-left-info">
                            <div class="char-info">
                                <h1><?php echo $session['ime'] . ' ' . $session['prezime']; ?></h1>
                                <h2><?php echo $session['razinaIgraca']; ?>. razina lika</h2>
                                <div class="completed">
                                    <div data-tooltip="Postotak rješenosti nivoa: 98%" class="completedItem tooltip-right">
                                        <h3>Prvi koraci</h3>
                                    </div>
                                    <div data-tooltip="Postotak rješenosti nivoa: 100%" class="completedItem tooltip-right">
                                        <h3>Strojna i programska oprema</h3>
                                    </div>
                                    <div data-tooltip="Postotak rješenosti nivoa: 89%" class="completedItem tooltip-right">
                                        <h3>Rješavanje problema</h3>
                                    </div>
                                    <div data-tooltip="Postotak rješenosti nivoa: 77%" class="completedItem tooltip-right">
                                        <h3>Multimedija</h3>
                                    </div>
                                    <div data-tooltip="Postotak rješenosti nivoa: 78%" class="completedItem tooltip-right">
                                        <h3>Obrada teksta</h3>
                                    </div>
                                    <div data-tooltip="Postotak rješenosti nivoa: -" class="completedItem notCompleted tooltip-right">
                                        <h3>Internet</h3>
                                    </div>
                                    <div data-tooltip="Postotak rješenosti nivoa: -" class="completedItem notCompleted tooltip-right">
                                        <h3>Završna provjera</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inner-left-char">
                            <h1>Moj heroj</h1>
                            <img src="../assets/images/<?php echo $session['lik']; ?>.png">
                            <div class="bars">
                                <div data-tooltip="Trenutna količina zdravlja" class="bar">
                                    <div id="slika2">
                                        <div class="progress">
                                            <div class="progress-inner" style="height:<?php foreach($resursi as $res) echo ($res->trenutnoZdravlje/$res->kolZdravlje)*100; ?>%; background-color: red;">
                                                <div id="bubbles">
                                                    <div class="bubble x1"></div>
                                                    <div class="bubble x2"></div>
                                                    <div class="bubble x3"></div>
                                                    <div class="bubble x4"></div>
                                                    <div class="bubble x5"></div>
                                                    <div class="bubble x6"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-tooltip="Trenutna količina energije" class="bar">
                                    <div id="slika1">
                                        <div class="progress">
                                            <div class="progress-inner" style="height:<?php foreach($resursi as $res2) echo ($res2->trenutnoEnergija/$res2->kolEnergija)*100; ?>%; background-color: blue;">
                                                <div id="bubbles">
                                                    <div class="bubble x1"></div>
                                                    <div class="bubble x2"></div>
                                                    <div class="bubble x3"></div>
                                                    <div class="bubble x4"></div>
                                                    <div class="bubble x5"></div>
                                                    <div class="bubble x6"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div data-tooltip="Trenutna količina znanja" class="inner-left-xp tooltip-right">
                            <div class="inner-left-xp-inner" style="height:<?php foreach($resursi as $res3) echo ($res3->trenutnoZnanje/$res3->kolZnanje)*100; ?>%;"><p><?php foreach($resursi as $res3) echo ($res3->trenutnoZnanje/$res3->kolZnanje)*100; ?>%</p></div>                         
                        </div>
                    </div>
                </div>
                <div class="content-right">
                    <div id="content-inner-top">
                        <div id="wrapper-friends">
                            <div class='friends-inner'>
                                <?php
                                    foreach($igraci as $rec)
                                    {
                                        if ($rec->id_ucenik == $session['id_ucenik'] or $rec->lik == '') continue;
                                        echo "<div class='friend-item'>
                                                <div class='friend-inner-wrapper'>
                                                    <div class='friend-image'>
                                                        <img src='../assets/images/"; echo $rec->lik;  echo ".png'>
                                                    </div>
                                                    <div class='friend-naslovi'>
                                                        <h1>"; echo $rec->ime." ".$rec->prezime; echo "</h1>
                                                        <h2>"; echo $rec->razinaIgraca; echo " razina lika</h2>
                                                    </div>
                                                </div>
                                            </div>";
                                    }
                                ?>
                            </div>
                        </div>
                        <div id='map-holder'>
                            <img src='../assets/images/karta.png' class='content-inner-map' />
                            <div id='position1'></div>
                            <div id='position2'></div>
                            <div id='position3'></div>
                            <div id='position4'></div>
                            <div id='position5'></div>
                            <div id='position6' onclick='glavniGrad()'></div>
                            <div id='position7'></div>
                        </div>
                        <div id='map-holder-position6'>
                            <img src='../assets/images/kartaPosition6.png' class='content-inner-map' />
                            <img id='position6-img1' src='../assets/images/monster1.png'>
                            <img id='position6-img2' src='../assets/images/monster2.png'>
                            <img id='position6-img3' src='../assets/images/monster3.png'>
                            <img id='position6-img4' src='../assets/images/monster4.png'>
                            <img id='position6-img5' src='../assets/images/monster5.png'>
                            <img id='position6-img6' src='../assets/images/monster6.png'>
                            <img id='position6-img7' src='../assets/images/monster7.png'>
                        </div>
                        <div id="carolijeOdabir">
                            
                        </div>
                    </div>
                    <div class="content-inner-bottom">
                        <div data-tooltip="Moji prijatelji..." class="item" id="button1" onclick="f1()"></div>
                        <div data-tooltip="Karta" class="item" id="button2" onclick="f2()"></div>  
                        <div data-tooltip="Dnevni zadaci" class="item" id="button3"></div> 
                        <div data-tooltip="Čarolije" class="item" id="button4"></div> 
                    </div>
                    </div>
                </div>
            </div> 
    </body>
</html>
