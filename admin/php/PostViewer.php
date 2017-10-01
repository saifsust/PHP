<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
        
  //  require '../includes/db_config.php';
//new DbConfig();

function postTableViewer() {

    $query = "SELECT post_id,cat_title,post_title,post_author,post_date,post_img,post_tags,post_comment_count,post_status FROM posts INNER JOIN categories
ON post_category_id=cat_id ORDER BY post_id;";
    try {

        $result = mysqli_query(DbConfig::$connection, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['post_id'];
            $category = $row['cat_title'];
            $title = $row['post_title'];
            $author = $row['post_author'];
            $date = $row['post_date'];
            $img = $row['post_img'];
            $tags = $row['post_tags'];
            $comments = $row['post_comment_count'];
            $ststus = $row['post_status'];

            echo '<tr>';

            echo "<td>$id</td>";
            echo "<td>$author</td>";
            echo "<td>$title</td>";
            echo "<td>$category</td>";
            echo "<td>$ststus</td>";
            echo "<td><img width='80' src ='../$img' alt='image'></td>";
            echo "<td>$tags</td>";
            echo "<td>$comments</td>";
            echo "<td>$date</td>";
              echo "<td><a href='posts.php?source=edit&edit=$id'>edit
            </a></td>";
             echo "<td><a href='posts.php?source=delete&delete=$id'>delete
            </a></td>";
            echo '</tr>';
        }
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
}

//postTableViewer();


function postRefactory()
{
    //if(isset($_GET['']))
    
}


//delete post from Table

  function postDeleteFromTable()
  
  {
      if(isset($_GET['delete']))
      {
          
          echo $_GET['delete'];
          
          $id=$_GET['delete'];
          
          $post="DELETE FROM posts WHERE post_id='$id'";
            $comment="DELETE FROM comments WHERE post_id='$id'";
          try{  
              mysqli_query(DbCOnfig::$connection,$comment);
              mysqli_query(DbConfig::$connection,$post);   
               
            
          }catch(Exception $ex)
          {
              echo $ex->getMessage();
          }
           header("Location: posts.php?source");
          
         
          
      }  
       
  }


    
?>
