<?php

 function commentView(){
   try{
       $query="SELECT * FROM comments ORDER BY comment_id;";
       $result=mysqli_query(DbCOnfig::$connection,$query);
       
       
       while($row=mysqli_fetch_assoc($result))
       {
           
           $id= $row['comment_id'];
           $author = $row['author'];
           $email = $row['email'];
           $content = $row['content'];
            $status =$row['Status'];
           $date = $row['Date'];
           
           
           echo "<tr>";
           
           echo "<td>$id</td>";
            echo "<td>$author</td>";
              echo "<td>$email</td>";
              echo "<td>$content</td>";
              echo "<td>$status</td>";
             echo "<td><a href='#'>response</a></td>";
              echo "<td>$date</td>";
                echo "<td><a href='#'>approve</a></td>";
             echo "<td><a href='#'>unapprove</a></td>";
            echo "<td><a href='#'>edit</a></td>";
             echo "<td><a href='#'>delete</a></td>";
        
           echo "</tr>";
       }
       
   }catch(Exception $ex)
   {
       echo $ex->getMessage();
   }

 }
?>
