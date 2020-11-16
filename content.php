<?php
 $day=$_GET["day"];
 $date=strtotime("11/$day/2020");
 if ($date<strtotime("now")) {
?>
<video controls preload="metadata" style=" width:70vw;position:fixed;top: 50%;left: 50%;transform: translate(-50%, -50%);" id="player"> <!-- autoplay -->
	<source src="Feuerwehr3.mp4" type="video/mp4">
	Your browser does not support the audio element.
</video>
<?php
 }
 else {
 ?>
 
<img src="SantaPig.svg" id="pig" height="50%" width="50%" style="position:fixed;top: 50%;left: 50%;transform: translate(-50%, -50%);">
    <h1 style="position:fixed;bottom: 10%;left: 50%;transform: translate(-50%, -50%);">Wer ist denn hier so neugierig?</h1>

    <?php
 }
?>
    <a href="javascript:closeVideoView();"><h1 style="position:fixed;top: 0%;right: 0%;transform: translate(-50%, -50%);">X</h1></a>
