<?php
   //echo "<pre>";
   //print_r($_GET);
   //echo "</pre>";

   $principle = $_GET['principle'];
   $roi = $_GET['roi'];
   $noy = $_GET['noy'];

   $amount =($principle*$roi*$noy)/100;
   echo "Interest Amount is:".$amount;
?>