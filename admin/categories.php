
<?php
 
                     include('php/category-functions.php');
                   

?>

    <!-- header includes-->
    <?php //include('includes/admin-header.php'); ?>


    <?php //include('includes/admin-navigation.php'); ?> //



    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome Admin
                        <small>Author</small>
                    </h1>
                    <!-- add category form -->
                    <div class="col-xs-6">
                        <!-- Add Category -->
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="cat_title">Add Category</label>
                                <input type="text" name="cat_title" class="form-control" />
                            </div>

                            <input type="submit" name="submit" class="btn btn-primary" value="Add Category" />

                        </form>

                        <?php
                   
                     insertCategory();
                
                    ?>
                          


                            <?php
                   
                
                    
                    editCategory();
                    
                    ?>

                    </div>
                    <!-- add category form -->

                    <div class="col-xs-6">

                        <?php
                  
                    
                  
                      tableView();
                       deleteCategory();
                    
                            ?>

                    </div>


                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->


