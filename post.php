<?php include("includes/header.php");?>
<?php include("includes/navigation.php"); 

 include("includes/phps/post-detail.php");


?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Post Content Column -->
        <div class="col-lg-8">

            <!-- Blog Post -->

            <!-- Title -->
            
            <?php  postDetail(); ?>
            
           

            <!-- Author -->
            

        

            <!-- Date/Time -->
           

            <!-- Preview Image -->
           

            <!-- Post Content -->
        

            <!-- Blog Comments -->
          

            <!-- Comments Form -->
          <?php include("includes/comment.php");
            
            comment();
            
            ?>
          
          
          
          
        </div>

        <!-- Blog Sidebar Widgets Column -->
        <?php include("includes/side-bar.php");?>

    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->
<?php include("includes/footer.php");  ?>