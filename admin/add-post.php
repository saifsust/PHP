

    <div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome Admin
                    <small>Author</small>
                </h1>
                <form    action="" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="author">Author</label>
                        <input type="text" name="author" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" />
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
                        <input type="text" name="status" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" />
                    </div>
                    <div class="form-group">
                        <label for="tags">Tags</label>
                        <input type="text" name="tags" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="post_content">Write your Post </label>
                        <textarea name="content" class="form-control" id="" cols="30" rows="8"></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Post" name="post" />

                </form>



                <?php
                
             
              formActionsForInsertion();
               
                
                ?>



            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
