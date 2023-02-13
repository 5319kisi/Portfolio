<?php
      echo"<pre>";
      print_r($_GET);
      echo"</pre>";
      $mno=isset($_GET['monthno'])?$_GET['monthno']:0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="cointainer">
        <form action="" method="get">
            <div class="form-group">
                <label for="monthname">Month Name</label>
                <select name="monthname"  class="form-control" id="">
                    <option value=""<?=($mno==1)? "selected" :" "?>>January</option>
                    <option value=""<?=($mno==2)? "selected" :" "?>>February</option>
                    <option value=""<?=($mno==3)? "selected" :" "?>>March</option>
                    <option value=""<?=($mno==4)? "selected" :" "?>>April</option>
                    <option value=""<?=($mno==5)? "selected" :" "?>>May</option>
                    <option value=""<?=($mno==6)? "selected" :" "?>>June</option>
                    <option value=""<?=($mno==7)? "selected" :" "?>>July</option>
                    <option value=""<?=($mno==8)? "selected" :" "?>>August</option>
                    <option value=""<?=($mno==9)? "selected" :" "?>>september</option>
                    <option value=""<?=($mno==10)? "selected" :" "?>>octomber</option>
                    <option value=""<?=($mno==11)? "selected" :" "?>>november</option>
                    <option value=""<?=($mno==12)? "selected" :" "?>>december</option>
                </select>
            </div>
        </form>
    </div>
</body>
</html>
