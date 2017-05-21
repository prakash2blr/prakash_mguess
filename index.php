<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0,minimal-ui" id="viewport"/>
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>mGuess</title>
  <link rel="stylesheet" type="text/css" href="bootstrap.min_3.css">
  <link rel="stylesheet" type="text/css" href="msweep.css">
  <script type="text/javascript">

  </script>
</head>
<body onload="cl=clearFields(1); newTop();_gaq.push(['_trackPageview','page_load']);">
    <header></header>
    <div class="modal-body" id="modal-body"></div>
    <div id="modal-spread">
        <div class="div-center container " id="main-div" >
            <div class="counter-section"><span id="counter"></span></div>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r11');"  id="r11" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r12');"  id="r12" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r13');"  id="r13" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r14');"  id="r14" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r15');"  id="r15" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r16');"  id="r16" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r17');"  id="r17" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r18');"  id="r18" type="text" readonly="readonly"  data-place-mine=''/>
            <br>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r21');"  id="r21" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r22');"  id="r22" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r23');"  id="r23" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r24');"  id="r24" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 collogALL('setMines Called');-sm-1" onclick="cl.checkMine('r25');"  id="r25" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r26');"  id="r26" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r27');"  id="r27" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r28');"  id="r28" type="text" readonly="readonly"  data-place-mine=''/>
               <br>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r31');"  id="r31" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r32');"  id="r32" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r33');"  id="r33" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r34');"  id="r34" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r35');"  id="r35" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r36');"  id="r36" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r37');"  id="r37" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r38');"  id="r38" type="text" readonly="readonly"  data-place-mine=''/>
            <br>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r41');"  id="r41" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r42');"  id="r42" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r43');"  id="r43" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r44');"  id="r44" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r45');"  id="r45" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r46');"  id="r46" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r47');"  id="r47" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r48');"  id="r48" type="text" readonly="readonly"  data-place-mine=''/>
            <br>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r51');"  id="r51" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r52');"  id="r52" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r53');"  id="r53" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r54');"  id="r54" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r55');"  id="r55" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r56');"  id="r56" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r57');"  id="r57" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r58');"  id="r58" type="text" readonly="readonly"  data-place-mine=''/>
            <br>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r61');"  id="r61" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r62');"  id="r62" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r63');"  id="r63" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r64');"  id="r64" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r65');"  id="r65" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r66');"  id="r66" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r67');"  id="r67" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r68');"  id="r68" type="text" readonly="readonly"  data-place-mine=''/>
            <br>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r71');"  id="r71" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r72');"  id="r72" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r73');"  id="r73" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r74');"  id="r74" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r75');"  id="r75" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r76');"  id="r76" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r77');"  id="r77" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r78');"  id="r78" type="text" readonly="readonly"  data-place-mine=''/>
            <br>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r81');"  id="r81" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r82');"  id="r82" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r83');"  id="r83" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r84');"  id="r84" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r85');"  id="r85" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r86');"  id="r86" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r87');"  id="r87" type="text" readonly="readonly"  data-place-mine=''/>
            <input class="msweep-text col-lg-1 col-md-1 col-xs-1 col-sm-1" onclick="cl.checkMine('r88');"  id="r88" type="text" readonly="readonly"  data-place-mine=''/>
            <br>
        </div>
        <div class="button-placeholder">
            <div id="error-display"></div>
                <div id="game-options-1" class="game-options">
                    TRY TO GUESS 50 BOXES
            <!--        FOR 250rs-->
                    <button class="btn-sm btn-default" style="display: block;margin: 0 auto;" onclick="slideUp(1);_gaq.push(['_trackPageview','guess_50_box_ok']);">oK</button>
                </div>
                <div id="game-options-2" class="game-options">
                    TRY TO GUESS 50 BOXES
            <!--        FOR 125rs-->
                    <button class="btn-sm btn-default" style="display: block;margin: 0 auto;" onclick="slideUp(1);_gaq.push(['_trackPageview','guess_50_box_ok']);">oK</button>
                </div>
                <div id="game-options-3" class="game-options">
                    TRY TO GUESS 40 BOXES
            <!--        FOR 75rs-->
                    <button class="btn-sm btn-default" style="display: block;margin: 0 auto;" onclick="slideUp(1);_gaq.push(['_trackPageview','guess_40_box_ok']);">oK</button>
                </div>
                <div id="game-options-4" class="game-options">
                    TRY TO GUESS 30 BOXES
            <!--        FOR 30rs-->
                    <button class="btn-sm btn-default" style="display: block;margin: 0 auto;" onclick="slideUp(1);_gaq.push(['_trackPageview','guess_30_box_ok']);">oK</button>
                </div>
            <button id="" class="btn-lg btn-primary" onclick="clearFields(1);" >RESET</button>
        </div>
    </div>
</body>
<script type="text/javascript" src="msweep.js"></script>
</html>
