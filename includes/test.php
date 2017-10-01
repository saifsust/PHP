<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'db_config.php';
new DbConfig();

$last_id = mysqli_query(DbConfig::$connection, "SELECT MAX(post_id) FROM posts;");
$last_id = mysqli_fetch_row($last_id);
$var = $last_id[0];
$id = $var . ",";
for ($i = $var - 1; $i > $var - 2; $i--) {
    $id .= $i . ",";
}
$id .= $i;
echo $id;

$QUERY = "SELECT * FROM posts WHERE post_id IN($id);";
$result = mysqli_query(DbConfig::$connection, $QUERY);




while ($row = mysqli_fetch_assoc($result)) {

    $post_title = $row['post_title'];
    $post_author = $row['post_author'];
    $post_date = $row['post_date'];
    $post_img = $row['post_img'];
    $post_content = $row['post_content'];
    echo $post_author."<br>";
}

function viewTitle() {
    echo $GLOBALS['post_title'];
}

function viewAuthor() {
    echo $GLOBALS['post_author'];
}

function viewDate() {
    echo $GLOBALS['post_date'];
}

function viewContent() {
    echo $GLOBALS['post_content'];
}

//viewAuthor();


