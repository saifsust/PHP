<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

#require 'db_config.php';
#new DbConfig();

$last_id = mysqli_query(DbConfig::$connection, "SELECT MAX(post_id) FROM posts;");
$last_id = mysqli_fetch_row($last_id);
$var = $last_id[0];
$id = $var . ",";
for ($i = $var - 1; $i > $var - 6 && $i>0; $i--) {
    $id .= $i . ",";
}
$id .= $i;
//echo $id;

$QUERY = "SELECT * FROM posts WHERE post_id IN($id) ORDER BY FIELD(post_id,$id);";


//viewAuthor();


?>