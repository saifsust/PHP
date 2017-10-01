
    

    <div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <h1 class="page-header">
                Welcome Admin
                <small>Author</small>
            </h1>
            <div class="col-lg-12">

                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Count No.</th>
                            <th>Author</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Tags</th>
                            <th>Comments</th>
                            <th>Date</th>                           
                            <th>Edit</th>
                              <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php postTableViewer();
                            postDeleteFromTable();
                          
                        
                        ?>

                    </tbody>


                </table>



            </div>
        </div>
        <!-- /.row -->

    </div>

    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
