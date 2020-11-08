<?php
if(isset($_POST['submit_rating']))
{
  $host="localhost";
  $username="root";
  $password="";
  $databasename="sample1";

  $db=mycqli_connect("localhost","root","","sample1") or die("unable to connect");
  
  $php_rating=$_POST['phprating'];
  $asp_rating=$_POST['asprating'];
  $jsp_rating=$_POST['jsprating'];
  $insert=mysql_query("insert into rating values('','$php_rating','$asp_rating','jsp_rating')");
}
?>