<?php

$a=$_POST['email'];
$b=$_POST['pw'];

if($a=="" || $b=="")
{
echo "fill details";
}

mysql_connect("localhost","root","");
mysql_select_db("railway");
$query="SELECT * FROM registration WHERE email_id=='$a' AND password=='$b'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if($count!=0)
{
echo"you have logged in";

}
else
{
echo "user not found";
}


?>