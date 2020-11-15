<?php
 $day=$_GET["day"];
 if ($day==15) {
?>
<audio controls preload="metadata" style=" width:300px;" id="player"> <!-- autoplay -->
	<source src="Westerland.mp3" type="audio/mpeg">
	Your browser does not support the audio element.
</audio>
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
