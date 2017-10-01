<?php

include('includes/header.php');

?>



    <!--navigation -->
    <?php include('includes/navigation.php'); ?>


    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    <big>SAIFUL ISLAM</big>
                    <small>SUST</small>
                </h1>


                <?php include('includes/phps/post-view.php'); ?>

                <?php 
                
                $result = mysqli_query(DbConfig::$connection, $GLOBALS['QUERY']);



    if(!empty($result) || $result!=null){
while ($row = mysqli_fetch_assoc($result)) {

    $post_id=$row['post_id'];
    $post_title = $row['post_title'];
    $post_author = $row['post_author'];
    $post_date = $row['post_date'];
    $post_img = $row['post_img'];
    $post_content = substr($row['post_content'],0,300);
?>
                <!-- First Blog Post -->
                

                <h2>
                    <a href="post.php?post_id=<?php echo $post_id; ?>">
                        <?php echo $post_title;?>
                    </a>
                </h2>
                <p class="lead">
                    by
                    <a href="index.php">
                        <?php echo $post_author;?>
                    </a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span>
                    <?php echo $post_date;?>
                </p>
                <hr>
                <img width='100%' src="<?php echo $post_img; ?>" alt="">
                <hr>
                <p>
                    <?php echo $post_content;  ?>
                </p>

                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
               <?php


}}else{
        
        
        echo "<h1>Here Is No Contents!</h1>";
    }
                
                ?>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php  include('includes/side-bar.php'); ?>

        </div>
        <!-- /.row -->

        <hr>
        <!-- footer -->
        <?php
    include('includes/footer.php');
     
    ?>
