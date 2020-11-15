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
        .content {
            max-width: 98vw;
            margin: auto;
        }

        .header img {

            margin: auto;
            justify-content: center;
            height: 10vh;
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
            border: 2px solid black;
            border-radius: 25px;

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
            width: 22vw;
            height: 13vh;
            /*height: 200px;*/
            background-color: red;
            align-items: center;
            justify-content: center;
            display: flex;
            border: 2px solid black;
            border-radius: 25px;
            margin: 10px;
            }

            img.number {
                height:6vh;
            }            

        }

        @media screen and (orientation: landscape) {         
            div.day {
                float: left;
                width: 13vw;
                height: 18vh;
                background-color: red;
                align-items: center;
                justify-content: center;
                display: flex;
                border: 2px solid black;
                border-radius: 25px;
                margin: 10px;
            }

            img.number {
                height:12vh;
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
            var videoplayer=document.getElementById('player');
            if (videoplayer!=null) {
                videoplayer.pause();
            }
            //document.getElementById('videoView').innerHTML='';
        }

        function openVideoView(message) {
            var videoView = document.getElementById('videoView');

            videoView.style.visibility = 'visible';
            videoView.style.display= 'flex';
            videoView.classList.add('classname');
            const Http = new XMLHttpRequest();
            const url='./content.php?day='+message;
            Http.open("GET", url);
            Http.send();

            Http.onreadystatechange = (e) => {
                console.log("statechanged"+e)
                //if (e.status == 200 ) {

                    document.getElementById('content').innerHTML=Http.responseText;
                    console.log(Http.responseText)
                //}
            }
            videoView.addEventListener('animationend', makeContentVisible);
        }

        function makeContentVisible() {
            //document.getElementById('videoView').innerHTML = '<img src="SantaPig.svg" id="pig" height="50%" width="50%"><h1>Wer ist denn hier so neugierig?</h1><a href="javascript:closeVideoView();">Close</a>';
          //  document.getElementById('pig').style.top=0;
            document.getElementById('content').style.visibility = 'visible';
            var videoplayer=document.getElementById('player');
            if (videoplayer!=null) {
                videoplayer.play();
            }
        }
    </script>

</head>

<body>
        <div class="center" >
        <div class="header" align="center"><img src="RethenRockt_1024.jpg"></div>

    <div id="videoView" style="display:none">
    <div id="content" style="visibility: hidden;">

    </div>
    </div>
    <div>
    <?php
    $days=range(1,24);
    shuffle($days);
        foreach ($days as $i) {

    ?>
    <div class="day">

        <a href="javascript:openVideoView('<?=$i?>');">
            <div>
                <?php
                    if ($i>9) {
                ?>
                <img class="number" src="GoldTypography<?=intdiv($i,10)?>.svg">
                <?php
                    }
                ?>
                <img class="number" src="GoldTypography<?=$i%10?>.svg">
            </div>
        </a>

    </div>
    <?php
        }
    ?>
    
    </div>
        </div>
</body>

</html>