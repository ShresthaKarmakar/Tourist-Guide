<?php
    $host="localhost";
    $username="root";
    $password="";
    $databasename="sample1";

    $connect=mysql_connect($host,$username,$password);
    $db=mysql_select_db($databasename);
	
    $select_rating=mysql_query("select php,asp,jsp from rating");
    $total=mysql_num_rows($select_rating);
  
    while($row=mysql_fetch_array($select_rating))
    {
	  $phpar[]=$php;
	  $aspar[]=$asp;
	  $jspar[]=$jsp;
	  
    }
    $total_php_rating=(array_sum($phpar)/$total);
    $total_asp_rating=(array_sum($aspar)/$total);
    $total_jsp_rating=(array_sum($jspar)/$total);
  
?>