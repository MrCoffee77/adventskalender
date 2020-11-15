<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-color: #C0E1FF !important;
            background-image: url('./snow1.png'), url('./snow2.png'), url('./snow3.png');
            animation: schnee 25s linear infinite;
        }
        
        @keyframes schnee {
            0% {
                background-position: 0px 0px, 0px 0px, 0px 0px
            }
            100% {
                background-position: 500px 1000px, 400px 400px, 300px 300px
            }
        }
        
        div.classname {
            width: 75vw;
            background-color: red;
            animation-name: example;
            animation-duration: 4s;
            position: fixed;
            padding-top: 42vw;
            /* 16:9 Aspect Ratio */
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            align-content: center;
            display: flex;
        }
        
        div.content {
            visibility: hidden;
            width: 75vw;
            background-color: red;
            animation-name: example;
            animation-duration: 4s;
            position: fixed;
            padding-top: 42vw;
            /* 16:9 Aspect Ratio */
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        @media screen and (orientation: portrait) { 
            div.day {
            float: left;
            width: 200px;
            height: 200px;
            background-color: red;
            align-items: center;
            justify-content: center;
            display: flex;
            border: 2px solid black;
            border-radius: 25px;
            margin: 10px;
        }

         }

@media screen and (orientation: landscape) {         div.day {
            float: left;
            width: 200px;
            height: 200px;
            background-color: red;
            align-items: center;
            justify-content: center;
            display: flex;
            border: 2px solid black;
            border-radius: 25px;
            margin: 10px;
        }
 }        
        
        @keyframes example {
            0% {
                background-color: red;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 8vw;
                padding-top: 4vw;
            }
            100% {
                background-color: red;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 75vw;
                padding-top: 42vw;
            }
        }
    </style>
    <script>
        function closeVideoView() {
            var videoView = document.getElementById('videoView');
            videoView.style.visibility = 'hidden';
            videoView.style.display= 'none';
            videoView.classList.remove('classname');
            videoView.removeEventListener('animationend', makeContentVisible);
            document.getElementById('content').style.visibility = 'hidden';
            //document.getElementById('videoView').innerHTML='';
        }

        function openVideoView(message) {
            var videoView = document.getElementById('videoView');

            videoView.style.visibility = 'visible';
            videoView.style.display= 'flex';
            videoView.classList.add('classname');
            videoView.addEventListener('animationend', makeContentVisible);
        }

        function makeContentVisible() {
            //document.getElementById('videoView').innerHTML = '<img src="SantaPig.svg" id="pig" height="50%" width="50%"><h1>Wer ist denn hier so neugierig?</h1><a href="javascript:closeVideoView();">Close</a>';
          //  document.getElementById('pig').style.top=0;
            document.getElementById('content').style.visibility = 'visible';
        }
    </script>

</head>

<body>

    <p><b>Note:</b> This example does not work in Internet Explorer 9 and earlier versions.
    </p>

    <div id="videoView" style="display:none">
    <div id="content">
    <img src="SantaPig.svg" id="pig" height="50%" width="50%" style="position:fixed;top: 50%;left: 50%;transform: translate(-50%, -50%);">
    <h1 style="position:fixed;bottom: 10%;left: 50%;transform: translate(-50%, -50%);">Wer ist denn hier so neugierig?</h1>
    <a href="javascript:closeVideoView();"><h1 style="position:fixed;top: 0%;right: 0%;transform: translate(-50%, -50%);">X</h1></a>
    </div>
    </div>
    <?php
        for ($i=1;$i<25;$i++) {

    ?>
    <div class="day">

        <a href="javascript:openVideoView('<?=$i?>');">
            <div>
                <?php
                    if ($i>9) {
                ?>
                <img src="GoldTypography<?=intdiv($i,10)?>.svg" height="90px">
                <?php
                    }
                ?>
                <img src="GoldTypography<?=$i%10?>.svg" height="90px">
            </div>
        </a>

    </div>
    <?php
        }
    ?>
    


</body>

</html>