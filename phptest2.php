<?php
$server="localhost";
$username="root";
$password="";
$db="customer";
$con = mysqli_connect($server,$username,$password,$db);
error_reporting(0);

?>
<html>
 <head>
  <title></title>
 </head>
 <body>
  <h1><a href="sparks.html">HOME</h1></a>
   <p><a href ="phptest2.php">TRANSFER MONEY</p></a>
   <div><form action="" method ="GET">
      <br>email from  :<input type="text" name ="email" value="" required/><br><br>
      <br>email to   :<input type="text" name ="email2" value="" required/><br><br>
      <br>Amount:<input type="text" name ="amount" value="" required/><br><br>
      <br><input type="submit" name ="update" />
    </form>
</div>
<?php
$nm=$_GET['email'];
$em=$_GET['email2'];
$amt=$_GET['amount'];

$query = "SELECT balance FROM TEST WHERE EMAIL='$em'";
$data = mysqli_query($con,$query);
$res = mysqli_fetch_assoc($data);

$total = $res['balance']+$amt;

$query1 = "UPDATE TEST SET balance ='$total' WHERE EMAIL='$em'";
$data1 = mysqli_query($con,$query1);



$query3 = "SELECT balance FROM TEST WHERE EMAIL='$nm'";
$data2 = mysqli_query($con,$query3);
$res1 = mysqli_fetch_assoc($data2);

$subtotal = $res1['balance']-$amt;

$query4 = "UPDATE TEST SET balance ='$subtotal' WHERE EMAIL='$nm'";
$data3 = mysqli_query($con,$query4);
if($amt>0)
{
if ($res1['balance']<$amt)
{
?>  <b1>FAILED</b1><br>  <?php
}
else
{
?>  <b2>SUCCESSFUL</b2>  <?php
}
}



?>
</body>
 <style>
    p{
     font-align:centre;
     font-family:verdana;
     background-color:blue;
     font-size:60px;
     margin:60px 450px 60px 450px;
     padding:30px;
     }
   div{ 
      text-align:centre;
      border:2px solid green;
      border-margin:190px;
      padding:20px 20px;
      margin:60px 500px 70px 500px;
      box-shadow:1px 2px;
     }
   h1{ 
      background-color:pink;
    border:2px solid powderblue;
    font-color:blue;
     }
     b1,b2{
     background-color:pink;
     border:2px solid powderblue;
     padding:20px 20px;
      margin:0px 600px 190px 500px;
     font-size:60px;
}
    body{
    background-image:url('bankii.jpg');
    background-repeat:no-repeat;
    background-size:100%;
    }
 </style>