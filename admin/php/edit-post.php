<?php //include('addPost.php'); ?>






<?php 



 function editPost()
 {
   
     if(isset($_GET['edit']))
     {
      
         $post_id=$_GET['edit'];
        try{
            
            $query="SELECT * FROM posts WHERE post_id='$post_id'";
            $result =mysqli_query(DbConfig::$connection,$query);
            $row=mysqli_fetch_assoc($result);
            
            
        }catch(Exception $ex)
        {
            echo $ex->getMessage();
        }
         
         


?>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome Admin
                    <small>Author</small>
                </h1>
                <form action="" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="author">Author</label>
                        <input type="text" name="author" class="form-control" value="<?php echo $row['post_author'];  ?>" />
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" value="<?php echo $row['post_title'];  ?>" />
                    </div>

                    <div class="form-group">
                        <label for="category ">Category</label>
                        <select name="cat_select">
                        <?php
                       selectCategory();
                            ?>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" name="status" class="form-control" value="<?php echo $row['post_status'] ; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" value="<?php echo $row['post_img'];  ?>" />
                    </div>
                    <div class="form-group">
                        <label for="tags">Tags</label>
                        <input type="text" name="tags" class="form-control" value="<?php echo $row['post_tags'];  ?>" />
                    </div>
                    <div class="form-group">
                        <label for="post_content">Write your Post </label>
                        <textarea name="content" class="form-control" id="" cols="30" rows="8"><?php echo $row['post_content']; ?></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Post" name="edit" />

                </form>

            </div>
            <?php
                
                if(isset($_POST['edit']))
        {
                    
                     $author = $_POST['author'];
        $title = $_POST['title'];
        $category = $_POST['cat_select'];
        $status = $_POST['status'];
        $image = $_FILES['image']['name'];
        $image_temp = $_FILES['image']['tmp_name'];
        $tags = $_POST['tags'];
        $content = $_POST['content'];
        $comment = 0;
        
           
         
         try{
             
             $query="UPDATE posts SET post_author='$author', post_title='$title',post_category_id='$category'
             ,post_status='$status',post_img='images/post_images/$image',post_tags='$tags', post_date=now(),post_content='$content'             
             WHERE post_id='$post_id'";
             mysqli_query(DbConfig::$connection,$query);
             header('Location: posts.php?source');
             
         }catch(Exception $ex){ echo $ex->getMessage();}
         
       
         
        }
     
                ?>


        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
<?php } }



?>
