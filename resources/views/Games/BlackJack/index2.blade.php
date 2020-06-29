<!DOCTYPE html>
<html>

<head>
    <title>BLACKJACK</title>
    <link rel="stylesheet" href="{{ asset('storage/Games/BlackJack/css/reset.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('storage/Games/BlackJack/css/main.css')}} " type="text/css">
    <link rel="stylesheet" href="{{ asset('storage/Games/BlackJack/css/orientation_utils.css')}} " type="text/css">
    <link rel="stylesheet" href="{{ asset('storage/Games/BlackJack/css/ios_fullscreen.css')}} " type="text/css">
    <link rel='shortcut icon' type='image/x-icon' href="{{ asset('storage/Games/BlackJack/favicon.ico')}}" />
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,minimal-ui" />
    <meta name="msapplication-tap-highlight" content="no" />

    <script type="text/javascript" src="{{asset('storage/Games/BlackJack/js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/Games/BlackJack/js/createjs-2015.11.26.min.js')}} "></script>
    <script type="text/javascript" src="{{asset('storage/Games/BlackJack/js/platform.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/Games/BlackJack/js/ios_fullscreen.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/Games/BlackJack/js/howler.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/Games/BlackJack/js/screenfull.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/Games/BlackJack/js/ctl_utils.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/Games/BlackJack/js/sprite_lib.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/Games/BlackJack/js/settings.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/Games/BlackJack/js/CLang.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/Games/BlackJack/js/CPreloader.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/Games/BlackJack/js/CMain.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/Games/BlackJack/js/CTextButton.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/Games/BlackJack/js/CGfxButton.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/Games/BlackJack/js/CToggle.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/Games/BlackJack/js/CMenu.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/Games/BlackJack/js/CGame.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/Games/BlackJack/js/CInterface.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/Games/BlackJack/js/CTweenController.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/Games/BlackJack/js/CSeat.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/Games/BlackJack/js/CFichesController.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/Games/BlackJack/js/CVector2.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/Games/BlackJack/js/CGameSettings.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/Games/BlackJack/js/CEasing.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/Games/BlackJack/js/CHandController.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/Games/BlackJack/js/CCard.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/Games/BlackJack/js/CInsurancePanel.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/Games/BlackJack/js/CGameOver.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/Games/BlackJack/js/CMsgBox.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/Games/BlackJack/js/CCreditsPanel.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/Games/BlackJack/js/CFiche.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/Games/BlackJack/js/CCTLText.js')}}"></script>
</head>

<body ondragstart="return false;" ondrop="return false;">
    <div style="position: fixed; background-color: transparent; top: 0px; left: 0px; width: 100%; height: 100%"></div>
    <script>
        $(document).ready(function(){
                     var oMain = new CMain({
                                    win_occurrence: 40,          //WIN OCCURRENCE PERCENTAGE. VALUES BETWEEN 0-100
                                    min_bet: 1,                  //MIN BET PLAYABLE BY USER. DEFAULT IS 0.1$
                                    max_bet: 300,                //MAX BET PLAYABLE BY USER. 
                                    bet_time: 10000,             //WAITING TIME FOR PLAYER BETTING
                                    money: 1000,                 //STARING CREDIT FOR THE USER
                                    blackjack_payout: 1.5,       //PAYOUT WHEN USER WINS WITH BLACKJACK (DEFAULT IS 3 TO 2). BLACKJACK OCCURS WHEN USER GET 21 WITH FIRST 2 CARDS
                                    game_cash: 500,              //GAME CASH AVAILABLE WHEN GAME STARTS
                                    show_credits:true,           //ENABLE/DISABLE CREDITS BUTTON IN THE MAIN SCREEN
                                    fullscreen:true,             //SET THIS TO FALSE IF YOU DON'T WANT TO SHOW FULLSCREEN BUTTON
                                    check_orientation:true,      //SET TO FALSE IF YOU DON'T WANT TO SHOW ORIENTATION ALERT ON MOBILE DEVICES
                                    //////////////////////////////////////////////////////////////////////////////////////////
                                    ad_show_counter: 3           //NUMBER OF HANDS PLAYED BEFORE AD SHOWN
                                    //
                                    //// THIS FUNCTIONALITY IS ACTIVATED ONLY WITH CTL ARCADE PLUGIN.///////////////////////////
                                    /////////////////// YOU CAN GET IT AT: /////////////////////////////////////////////////////////
                                    // http://codecanyon.net/item/ctl-arcade-wordpress-plugin/13856421 ///////////
                                });


					 
                    $(oMain).on("recharge", function(evt) {
                             //INSERT HERE YOUR RECHARGE SCRIPT THAT RETURN MONEY TO RECHARGE
                            var iMoney = 1000;
                            if(s_oGame !== null){
                                s_oGame.setMoney(iMoney);
                            }
                    });
                    
                    $(oMain).on("bet_placed", function (evt, iTotBet) {
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


                    $(oMain).on("save_score", function(evt,iScore) {
                           if(getParamValue('ctl-arcade') === "true"){
                               parent.__ctlArcadeSaveScore({score:iScore});
                           }
                           //...ADD YOUR CODE HERE EVENTUALLY
                    });

                    $(oMain).on("show_interlevel_ad", function(evt) {
                           if(getParamValue('ctl-arcade') === "true"){
                               parent.__ctlArcadeShowInterlevelAD();
                           }
                           //...ADD YOUR CODE HERE EVENTUALLY
                    });

                    $(oMain).on("share_event", function(evt, iScore) {
                           if(getParamValue('ctl-arcade') === "true"){
                               parent.__ctlArcadeShareEvent({   img: TEXT_SHARE_IMAGE,
                                                                title: TEXT_SHARE_TITLE,
                                                                msg: TEXT_SHARE_MSG1 + iScore + TEXT_SHARE_MSG2,
                                                                msg_share: TEXT_SHARE_SHARE1 + iScore + TEXT_SHARE_SHARE1});
                           }
                    });
                    
                    if (isIOS()) {
                        setTimeout(function () {
                            sizeHandler();
                        }, 200);
                    } else {
                        sizeHandler();
                    }
           });

    </script>

    <div class="check-fonts">
        <p class="check-font-1">test 1</p>
    </div>

    <canvas id="canvas" class='ani_hack' width="1700" height="768"> </canvas>
    <div data-orientation="landscape" class="orientation-msg-container">
        <p class="orientation-msg-text">Please rotate your device</p>
    </div>
    <div id="block_game"
        style="position: fixed; background-color: transparent; top: 0px; left: 0px; width: 100%; height: 100%; display:none">
    </div>
</body>

</html>