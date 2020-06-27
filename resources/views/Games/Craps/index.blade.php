<!DOCTYPE html>
<html>
    <head>
        <title>CRAPS</title>
        <link rel="stylesheet" href="{{ asset('storage/Games/Craps/css/reset.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('storage/Games/Craps/css/main.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('storage/Games/Craps/css/orientation_utils.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('storage/Games/Craps/css/ios_fullscreen.css')}}" type="text/css">
        <link rel='shortcut icon' type='image/x-icon' href=' {{ asset('storage/Games/Craps/favicon.ico')}}' />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui" />
	    <meta name="msapplication-tap-highlight" content="no"/>

        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/jquery-3.2.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/createjs-2015.11.26.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/screenfull.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/platform.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/ios_fullscreen.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/howler.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/ctl_utils.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/sprite_lib.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/settings.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/CGameSettings.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/CFichesController.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/CLang.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/CPreloader.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/CMain.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/CTextButton.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/CGfxButton.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/CFicheBut.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/CBetTableButton.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/CToggle.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/CMenu.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/CGame.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/CInterface.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/CMsgBox.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/CTweenController.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/CSeat.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/CTableController.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/CEnlight.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/CFiche.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/CDicesAnim.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/CGameOver.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/CCreditsPanel.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/CRollingTextController.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/CPuck.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/CDicesTopDownView.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/CAreYouSurePanel.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/CScoreText.js') }}"></script>
        <script type="text/javascript" src="{{ asset('storage/Games/Craps/js/CCTLText.js') }}"></script>
    </head>
    <body ondragstart="return false;" ondrop="return false;" >
	<div style="position: fixed; background-color: transparent; top: 0px; left: 0px; width: 100%; height: 100%"></div>
          <script>
            $(document).ready(function(){
                     var oMain = new CMain({
                                            money: 1000,        //STARING CREDIT FOR THE USER
                                            min_bet: 1,       //MINIMUM BET
                                            max_bet: 100,      //MAXIMUM BET   
                                            win_occurrence: 30,//Win occurrence percentage (100 = always win). 
                                            time_show_dice_result: 3000, //TIME IN MILLISECONDS OF DICE RESULT SHOWING.                    
                                            casino_cash:400,   //The starting casino cash that is recharged by the money lost by the user
                                            show_credits:true, //SET THIS VALUE TO FALSE IF YOU DON'T WANT TO SHOW CREDITS BUTTON
                                            audio_enable_on_startup:false, //ENABLE/DISABLE AUDIO WHEN GAME STARTS 
                                            fullscreen:true, //SET THIS TO FALSE IF YOU DON'T WANT TO SHOW FULLSCREEN BUTTON
                                            check_orientation:true,     //SET TO FALSE IF YOU DON'T WANT TO SHOW ORIENTATION ALERT ON MOBILE DEVICES
                                            num_hand_before_ads:10    //NUMBER OF DICE ROLLING TO COMPLETE, BEFORE TRIGGERING SAVE_SCORE EVENT. USEFUL FOR INTER-LEVEL AD EVENTUALLY.
                                            //
                                            //// THIS FUNCTIONALITY IS ACTIVATED ONLY WITH CTL ARCADE PLUGIN.///////////////////////////
                                            /////////////////// YOU CAN GET IT AT: /////////////////////////////////////////////////////////
                                            // http://codecanyon.net/item/ctl-arcade-wordpress-plugin/13856421 ///////////
                                });

                     
                    $(oMain).on("recharge", function(evt) {
                            var iMoney = 1000;
                            if(s_oGame !== null){
                                s_oGame.onRecharge(iMoney);
                            }
                     });
                     
                    $(oMain).on("bet_placed", function (evt, iTotBet) {

                        //...ADD YOUR CODE HERE EVENTUALLY
                    });
                    
                    $(oMain).on("clear_bet", function (evt, iTotBet) {
                        //...ADD YOUR CODE HERE EVENTUALLY
                    });
                    
                     $(oMain).on("start_session", function(evt) {
                            if(getParamValue('ctl-arcade') === "true"){
                                parent.__ctlArcadeStartSession();
                            }
                            //...ADD YOUR CODE HERE EVENTUALLY
                     });
                     
                    $(oMain).on("end_session", function(evt) {
                            if(getParamValue('ctl-arcade') === "true"){
                                parent.__ctlArcadeEndSession();
                            }
                            //...ADD YOUR CODE HERE EVENTUALLY
                    });
                     
                    $(oMain).on("save_score", function(evt,iMoney) {
                            if(getParamValue('ctl-arcade') === "true"){
                                parent.__ctlArcadeSaveScore({score:iMoney});
                            }
                            //...ADD YOUR CODE HERE EVENTUALLY
                     });
                     
                     $(oMain).on("show_interlevel_ad", function(evt) {
                            if(getParamValue('ctl-arcade') === "true"){
                                parent.__ctlArcadeShowInterlevelAD();
                            }
                            //...ADD YOUR CODE HERE EVENTUALLY
                     });
                     
                     $(oMain).on("share_event", function(evt,iMoney) {
                            if(getParamValue('ctl-arcade') === "true"){
                                parent.__ctlArcadeShareEvent({ img:"200x200.jpg",
                                                                title:TEXT_CONGRATULATIONS,
                                                                msg:TEXT_SHARE_1 + iMoney + TEXT_SHARE_2,
                                                                msg_share:TEXT_SHARE_3 + iMoney + TEXT_SHARE_4
                                                            });
                            }
                            //...ADD YOUR CODE HERE EVENTUALLY
                     });
                     
                     if(isIOS()){
                         setTimeout(function(){sizeHandler();},200);
                     }else{
                         sizeHandler();
                     }
           });

        </script>
        
        <div class="check-fonts">
            <p class="check-font-1">test 1</p>
            <p class="check-font-2">test 2</p>
        </div> 
        
        <canvas id="canvas" class='ani_hack' width="1280" height="768"> </canvas>
        <div data-orientation="landscape" class="orientation-msg-container"><p class="orientation-msg-text">Please rotate your device</p></div>
        <div id="block_game" style="position: fixed; background-color: transparent; top: 0px; left: 0px; width: 100%; height: 100%; display:none"></div>
    </body>
</html>