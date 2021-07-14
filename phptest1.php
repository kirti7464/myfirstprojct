<?php
$server="localhost";
$username="root";
$password="";
$dbname="customer";
error_reporting(0);
$con =new mysqli($server,$username,$password,$dbname);
$query = "SELECT * FROM TEST";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);

if($total!=0)
{
?>
 <!DOCTYPE html>
<html>
 <head>
   <title>BASIC BANKING-cust</title>
 </head>
 <body>
   <h1><a href="sparks.html">BACK TO HOME</h1></a>
   <p><a href="http://localhost/projct/phptest1.php">VIEW ALL CUSTOMERS</p></a>
   <div>
     <table style="width 100%">
 <table>
   <tr>
       <th>name</th>
       <th>email</th>
       <th>balance</th>
   </tr>
  </div>
 </body>
 <style>
   h1{ 
    text-align:left;
    background-color:pink;
    border:2px solid powderblue;
    }
   p{
     font-align:centre;
     font-family:verdana;
     background-color:blue;
     font-size:60px;
     margin:60px 350px;
     padding:30px;
     }
    table,th,tr{
     border:2px solid black;
    
     }
    
     div{
     margin:60px;
     padding:40px 400px;font-size:30px;
     }
     body{
    background-image:url('bankii.jpg');
    background-repeat:no-repeat;
    background-size:100%;
    }
 </style>
</html>
<?php
while($result = mysqli_fetch_assoc($data))
{
echo "<tr>
       <td>".$result['name']."</td>
       <td>".$result['email']."</td>
       <td>".$result['balance']."</td>
   </tr>";
}}
else
{
echo "number of record is".$total;
}


?>
 </table>