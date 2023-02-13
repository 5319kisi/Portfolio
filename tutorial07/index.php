<?php
     session_start();
     if(!isset($_SESSION['data']))
     {
         header("location:login.php");
     }
     echo isset($_COOKIE['lastlogin'])?$_COOKIE['lastlogin']:"";
     //setCookie("data,20,time()+10");
     
?>


<html>
    <head>
        <title>Registerd Data</title>
       
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
         <script>
       $("document").ready(function(){
                $("a.delete").click(function(){
                    $(this).parents("tr").fadeOut();
;
                });
            });
        </script>
       
        <style>
               
                body{
                    height: 100%;
                    display: flexbox;
                    justify-content: center;
                    align-items: center;
                    padding: 10px;
                    background-color:#f5f503;
                    }
                .modal-content {
                                    margin: 5% auto 15% auto;
                                    width:80%;
                                    border:8px solid rgb(0, 0, 0);
                                }
                .font{
                        font-weight:bold;
                     }
                .bg{
                   
                    background: linear-gradient(135deg, #1e20aa, #f3427d);
                    color:#1d1a1a;
                    }
           
               
                .sr{
                    background-color:#000707;
                    text-align: center;
                    color: rgb(20, 203, 216);
                    }
                   
                .tr{
               
                    text-align: center;
                    }
                table tr#ROW1  {background-color:rgb(23, 167, 167);
                    background: linear-gradient(135deg, #06c6e7, #557fda);
                                }
 
                .backtosite{
                    color: whitesmoke;
                    font-size: large;
                }                
               
        </style>
    </head>
    <div>
    <body>
        <table class="modal-content bg table table-condensed table-striped ">
            <tr  id="ROW1">
                <td colspan="8"><h3 style="font-weight: bold;">Registerd Data</h3></td>
                <td style="padding: 20px; text-align: center;"><a href="logout.php" class="btn btn-success w-25 ">Logout </a>
                <td style="padding: 20px; text-align: center;"><input type="submit" class="btn btn-success w-25" value="Add Record"></td>
            </tr>
            <tr class="font sr">
                <td>Sr. no</td>
                <td>Name</td>
                <td>Username</td>
                <td>Password</td>
                <td>Age</td>
                <td>Birth date</td>
                <td>City</td>
                <td>Country</td>
                <td>State</td>
                <td>Manage</td>
            </tr>
            <tr id="ROW1" class="tr">
                <td>1</td>
                <td>Rajesh</td>
                <td>mehta@gmail.com</td>
                <td>774234</td>
                <td>22</td>
                <td>20/05/1995</td>
                <td>punjab</td>
                <td>India</td>
                <td>yamuna</td>
                <td><a href="#"><button type="button" class="btn btn-warning">Edit</button> </a>
                <a href="#" class="delete"><button type="button" class="btn btn-danger">Delete</button></a></td>
            </tr>
            <tr class="tr">
                <td>2</td>
                <td>Jayesh</td>
                <td>jmer@gmail.com</td>
                <td>87659324</td>
                <td>22</td>
                <td>20/05/1995</td>
                <td>punjab</td>
                <td>India</td>
                <td>yamuna</td>
                <td><a href="#"><button type="button" class="btn btn-warning">Edit</button> </a>
                <a href="#" class="delete"><button type="button" class="btn btn-danger">Delete</button></a></td>
            </tr>
            <tr class="tr" id="ROW1">
                <td>3</td>
                <td>Kunjan</td>
                <td>khira@rku.ac.in</td>
                <td>879874543</td>
                <td>22</td>
                <td>20/05/1995</td>
                <td>punjab</td>
                <td>India</td>
                <td>yamuna</td>
                <td><a href="#"><button type="button" class="btn btn-warning">Edit</button> </a>
                <a href="#" class="delete"><button type="button" class="btn btn-danger">Delete</button></a></td>
            </tr>

            <tr class="tr">
                <td>4</td>
                <td>devil</td>
                <td>dv@rku.ac.in</td>
                <td>678545</td>
                <td>22</td>
                <td>20/05/1995</td>
                <td>punjab</td>
                <td>India</td>
                <td>yamuna</td>
                <td><a href="#"><button type="button" class="btn btn-warning">Edit</button> </a>
                <a href="#" class="delete"><button type="button" class="btn btn-danger">Delete</button></a></td>
            </tr>
            <tr class="tr" id="ROW1">
                <td>5</td>
                <td>Rakesh</td>
                <td>kesh@rku.ac.in</td>
                <td>278695342</td>
                <td>22</td>
                <td>20/05/1995</td>
                <td>punjab</td>
                <td>India</td>
                <td>yamuna</td>
                <td><a href="#"><button type="button" class="btn btn-warning">Edit</button> </a>
                <a href="#" class="delete"><button type="button" class="btn btn-danger">Delete</button></a></td>
            </tr>
           
        </table>
       
          <!--- <p class="backtosite"> <a href="../index.html#portfolio" class="backtosite" >Back to Website !!!</a></p> -->
   
        </div>
    </body>
</html>

