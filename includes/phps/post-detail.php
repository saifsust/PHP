<?php


function postDetail()
{
    try{
    if(isset($_GET['post_id']))
      {
         $post_id = $_GET['post_id'];
          $query ="SELECT * FROM posts WHERE post_id ='$post_id';";
        
           $result = mysqli_query(DbConfig::$connection,$query);
        
            $result = mysqli_fetch_assoc($result);
            global $title;
           $title= $result['post_title'];
            $author= $result['post_author'];
            $date = $result['post_date'];
            $image = $result['post_img'];
            $content = $result['post_content'];
           echo " <h1>$title</h1>";
        ?>
            <p class='lead'> by
            <?php
            echo " <a href='#'>$author</a>";
        ?>
            </p>
        <hr>
         <p><span class="glyphicon glyphicon-time"></span><?php echo $date;?></p>

            <hr>
             <img  width=100%  class="img-responsive" src="<?php echo$image; ?>"  alt= "Image" />

            <hr>
            
                <p class="lead">
            
             <?php   echo substr($content,0,500); ?>
            </p>
               <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

            <hr>
            
            
        <?php
        
        
                 
       }}catch(Exception $ex)
             {
                 echo $ex->getMessage();
             }
    
}




function comment()
{
    
    if(isset($_POST["submitComment"]))
    {   
        $content = $_POST["comment"];
        $post_id = $_GET["post_id"];
        $author ="Liton";
        $email ="saiful.cse@student.sust.edu";
        $status = "good status";
        echo "comment";
        echo $post_id;
        $query ="INSERT INTO comments(post_id,author,email,content,Status,Date) VALUES('$post_id','$author','$email','$content','$status',now());";
        
        try{
            mysqli_query(DbConfig::$connection,$query);
            
        }catch(Exception $ex)
        {
            echo $ex->getMessage();
        }
        
        
        
        
    }
    
    
}








?>
