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
                <small>Secondary Text</small>
            </h1>


            <?php include('includes/phps/post-view.php'); ?>

            <?php
            if (isset($_POST['submit'])) {

                $search = $_POST['search'];




                $QUERY = "SELECT * FROM posts WHERE post_tags LIKE '%$search%';";
                try {

                    $searchResult = mysqli_query(DbConfig::$connection, $QUERY);
                     $result = mysqli_num_rows($searchResult);
                } catch (Exception $ex) {
                    echo $ex->getMessage();
                }

               
                if ($result == 0) {

                    echo "<h1>Result is not found !<h2>";
                } else {

                    while ($row = mysqli_fetch_assoc($searchResult)) {

                        $post_title = $row['post_title'];
                        $post_author = $row['post_author'];
                        $post_date = $row['post_date'];
                        $post_img = $row['post_img'];
                        $post_content = $row['post_content'];
                        ?>
                        <!-- First Blog Post -->

                        <h2>
                            <a href="#">
                                <?php echo $post_title; ?>
                            </a>
                        </h2>
                        <p class="lead">
                            by
                            <a href="index.php">
                                <?php echo $post_author; ?>
                            </a>
                        </p>
                        <p><span class="glyphicon glyphicon-time"></span>
                            <?php echo $post_date; ?>
                        </p>
                        <hr>
                        <img width='85%' src="<?php echo $post_img; ?>" alt="">
                        <hr>
                        <p>
                            <?php echo $post_content; ?>
                        </p>

                        <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                        <hr>
                        <?php
                    }
                }
            }
            ?>

        </div>

        <!-- Blog Sidebar Widgets Column -->
        <?php include('includes/side-bar.php'); ?>

    </div>
    <!-- /.row -->

    <hr>
    <!-- footer -->
    <?php
    include('includes/footer.php');
    ?>
