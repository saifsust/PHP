<?php

function navView() {
    $QUERY = "SELECT * FROM categories;";
    $result = mysqli_query(DbConfig::$connection, $QUERY);
    while ($row = mysqli_fetch_assoc($result)) {
        $title = $row['cat_title'];
        echo "<li><a href='#'>{$title}</a></li>";
    }
}
