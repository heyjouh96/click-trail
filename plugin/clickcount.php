<?php

$con = mysql_connect("localhost","root","");
mysql_select_db('click-trail',$con);

$id = $_POST['id'];

$query = mysql_query("SELECT * FROM clickcount WHERE ds = '$id'");
$count = mysql_num_rows($query);

if($count > 0){
    mysql_query("UPDATE clickcount SET count = count+1 WHERE ds = '$id'");
}
else{
    mysql_query("INSERT INTO clickcount VALUES ('','$id','1')");    
}




?>