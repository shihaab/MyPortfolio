<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Portfolio showcasing my learning outcomes">
        <meta name="keywords" content="Portfolio, learning outcome, shihaab, rouine">
        <meta name="author" content="Shihaab Rouine">

        <title>fail your way to succes</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap');
            html, body {
                margin: 0;
            }
            body {
                background: rgb(255,222,227);
                background: linear-gradient(0deg, rgba(255,222,227,1) 0%, rgba(156,136,255,1) 100%);
                height: 100vh;
                position: relative;
                font-family: 'Montserrat', sans-serif;
            }
            .title {
                font-size: 5em;
                color: grey;
                line-height: 0;
                position: absolute;
                left: 5vw;
                top: 2.5vh;
                z-index: 2;
                mix-blend-mode: color-burn;
                pointer-events: none;
            }
            .mood {
                height: 100px;
                position: absolute;
                z-index: 1;
                right: 10px;
                top: 10px;
                pointer-events: none;
                mix-blend-mode: difference;
                /* mix-blend-mode: color; */
            }
            .happy-mood,.sad-mood {
                opacity: .3;
                transition: .4s;
            }
            .active-mood {
                opacity: 1;
            }
            .cls-1,.cls-2,.cls-3{
                fill:none;
            }
            .cls-2,.cls-3{
                stroke:#fff;
                stroke-width:8px;
            }
            .cls-3{
                stroke-linecap:round;
            }
            .cls-4{
                fill:#fff;
            }
            .video-wrap {
                height: 80vh;
                width: 85vw;
                position: absolute;
                left: 7.5vw;
                top: 10vh;
                cursor: pointer;
            }
            #sad,#happy {
                position: absolute;
                width: 100%;
                height: 100%;
                /* display: none; */
                opacity: 0;
            }
            #sad {
                /* background-color: #ff7f50; */
            }
            #happy {
                /* background-color: #7bed9f; */
            }
            .moodOn {
                /* display: block!important; */
                opacity: 1!important;
            }

            #player_wrapper
            {
                position: absolute;
                width: 100%;
                height: 100%;
            }
            #player_controls
            {
                bottom: 6vh;
                position: absolute;
                width: 100%;
                padding: 5px;
                box-sizing: border-box;
            }
            input[type="image"]
            {
                float: left;
                height: 50px;
                margin-left: 49%;
            }
            #vol_img
            {
                margin-left: 35%;
                width: 25px;
            }

            /* The Modal (background) */
            .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            }

            /* Modal Content */
            .modal-content {
            background-color: #a29bfe;
            margin: auto;
            padding: 40px;
            width: 90%;
            }

            /* The Close Button */
            .close {
            color: white;
            float: right;
            font-size: 28px;
            font-weight: bold;
            }

            .close:hover,
            .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
            }
        </style>
    </head>
    <body>
        <!-- The Modal -->
        <div id="myModal" class="modal">

        <!-- Modal content -->
        <div style="text-align: center; font-size: 1.5em;" class="modal-content">
            <span class="close">&times;</span>
            <br>
            <p style="padding-top: 100px;">Ik ben wie ik ben door de combinatie van slechte en goede dingen in mijn leven.</p>
            <img height="350" src="assets/vid/sc.png">
            <p>Je kunt klikken op de video om de mood te verranderen.</p></p></p>
        </div>

        </div>
        <h1 class="title">Self portrait</h1>
            <div onClick="moodSwing()" class="video-wrap">
                <!-- <object class="mood" data="img/happy-sad.svg" type="image/svg+xml"></object> -->
                <svg class="mood" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 207.28 207.28">
                    <g id="Group_2" data-name="Group 2">
                        <g id="Ellipse_2" data-name="Ellipse 2">
                            <circle class="cls-2 sad-mood" cx="133.75" cy="103.35" r="49.5" />
                        </g>
                        <g id="Ellipse_3" data-name="Ellipse 3">
                            <circle class="cls-2 happy-mood" cx="72.75" cy="103.35" r="49.5" />
                        </g>
                        <path id="Path_1" data-name="Path 1" class="cls-3 happy-mood" d="M35.5,115.7c28.51,26.22,55.51,6.18,69.67-1" />
                        <path id="Path_1-2" data-name="Path 1" class="cls-3 sad-mood" d="M105,115c14.16-7.18,38.65-22,64.64.27" />
                    </g>
                    <circle class="cls-4 active-mood" cx="103" cy="90" r="5" />
                    <circle class="cls-4 sad-mood" cx="163" cy="90" r="5" />
                    <circle class="cls-4 happy-mood" cx="43" cy="90" r="5" />
                </svg>

                <div id='player_wrapper'>
                    <video id='happy'>
                        <source src="assets/vid/self_portrait_happy.mp4" type='video/mp4'>
                    </video>
                    <video id='sad'>
                        <source src="assets/vid/self_portrait_sad.mp4" type='video/mp4'>
                    </video>
                </div>

                <!-- <div id="happy"></div>
                <div id="sad"></div> -->
            </div>
            <div id='player_controls'>
                <input type="image" src="assets/vid/play.png" onclick="play_vid()" id="play_button">
                <!-- <input type="image" src="img/play.png" onclick="play_vid()" id="play_button"> -->
                <!-- <input type="image" src="img/pause.png" onclick="pause_vid()" id="pause_button"> -->
                <!-- <input type="image" src="img/stop.png" onclick="stop_vid()" id="stop_button"> -->
                <!-- <img src="img/volume.png" id="vol_img"> -->
                <!-- <input type="range" id="change_vol" onchange="change_vol()" step="0.05" min="0" max="1" value="1"> -->
            </div>
        </body>
        <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
            if (event.target == modal) {
            modal.style.display = "none";
            }
            }

            var happyMood;
            var happy = document.getElementById('happy');
            var sad = document.getElementById('sad');

            var happyInd = document.getElementsByClassName('happy-mood');
            var sadInd = document.getElementsByClassName('sad-mood');
            window.onload = function (){
                console.log('loaded');
                modal.style.display = "block";
                happyMood = true;
                happy.classList.add("moodOn");
                sad.classList.remove("moodOn"); // voor de zekerheid ;)

                manageMultiClass(true, happyInd, "active-mood");
                manageMultiClass(false, sadInd, "active-mood");
                
            }
            function moodSwing() {
                if(happyMood) {
                    happyMood = !happyMood;
                    happy.classList.remove("moodOn");
                    sad.classList.add("moodOn");
                    manageMultiClass(true, sadInd, "active-mood");
                    manageMultiClass(false, happyInd, "active-mood");
                }
                else {
                    happyMood = !happyMood;
                    sad.classList.remove("moodOn");
                    happy.classList.add("moodOn");
                    manageMultiClass(true, happyInd, "active-mood");
                    manageMultiClass(false, sadInd, "active-mood");
                }
            }
            function manageMultiClass(add, elements, classes) { // true, elementen, "klass-naam"
                for (var i = 0; i < elements.length; i++) {
                    if(add) {
                        elements[i].classList.add(classes);
                    }
                    else {
                        elements[i].classList.remove(classes);
                    }
                }
            }

            document.addEventListener("DOMContentLoaded", function() { startplayer(); }, false);
            var playerHappy,playerSad;

            function startplayer() 
            {
            playerHappy = document.getElementById('happy');
            playerSad = document.getElementById('sad');
            playerHappy.controls = false;
            playerSad.controls = false;
            }
            function play_vid()
            {
            playerHappy.play();
            playerSad.play();
            }
            function pause_vid()
            {
            playerHappy.pause();
            playerSad.pause();
            }
            function stop_vid() 
            {
            playerHappy.pause();
            playerSad.currentTime = 0;
            playerHappy.pause();
            playerSad.currentTime = 0;
            }
            function change_vol()
            {
            playerHappy.volume=document.getElementById("change_vol").value;
            playerSad.volume=document.getElementById("change_vol").value;
            }

            
        </script>
    </body>
</html>
