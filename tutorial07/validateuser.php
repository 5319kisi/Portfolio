<?php
     session_start();
     date_default_timezone_set('Asia/Kolkata');

     $username = isset($_POST['username'])?$_POST['username']:"";
     $password = isset($_POST['password'])?$_POST['password']:"";
     $rememberme = isset($_POST['rememberme'])?1:0;

     if($username=="admin@gmail.com" && $password=="123456" ){
      $_SESSION['data']=20;
      setcookie("lastlogin",date('d-m-Y h:i A'),time()+3600*24*365);
       
      if($rememberme==1){
           setcookie("usercookie",$username,time()+3600*24*365);
           setcookie("passwordcookie",$password,time()+3600*24*365);
      }else{
          setcookie("usercookie",$username,time());
          setcookie("passwordcookie",$password,time());
      }
      header("location:index.php");
    }
    else{
        header("location:login.php");
     } 
?>