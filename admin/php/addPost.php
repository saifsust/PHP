<?php

function selectCategory() {

    $query = "select * from categories;";
    try {
        $result = mysqli_query(DbConfig::$connection, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['cat_id'];
            echo "<option value=$id>";
            echo $row['cat_title'];
            echo "</option>";
        }
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
}

// form actions

function formActionsForInsertion() {
    if (isset($_POST['post'])) {
        //echo " " . $_POST['cat_select'];


        $author = $_POST['author'];
        $title = $_POST['title'];
        $category = $_POST['cat_select'];
        $status = $_POST['status'];
        $image = $_FILES['image']['name'];
        $image_temp = $_FILES['image']['tmp_name'];
        $tags = $_POST['tags'];
        $content = $_POST['content'];
        $comment = 0;
        $date = date('d-m-y');
        try{
        move_uploaded_file($image_temp,"../images/post_images/$image");
        
            
            
        $maxQuery = "SELECT MAX(post_id) FROM posts;";
            
        $result= mysqli_query(DbConfig::$connection,$maxQuery);
            $result= mysqli_fetch_row($result);
            $maxId=$result[0];
            ++$maxId;
           // echo $maxId."<br>";
            
            
            
        $query="INSERT INTO posts(post_id,post_category_id,post_title,post_author,post_date,post_img,post_content,post_tags,post_comment_count,post_status) values('$maxId','$category','$title','$author',now(),'images/post_images/$image','$content','$tags','$comment','$status'); ";
            
            mysqli_query(DbConfig::$connection,$query);
        
        
        
        }catch(Exception $ex){
            echo $ex->getMessage();
        }
        
        

      //  echo $date;





        header('Location: posts.php?source');
    }
}

?>
