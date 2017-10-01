

<?php include('php/Comments.php');?>


<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1>Comments</h1>
                
                
                <table class="table table-bordered table-hover">
                    <thead>
                       <tr>
                        <th>Id</th>
                        <th>Author</th>
                        <th>Email</th>
                        <th>Content</th>
                        <th>Status</th>
                        <th>In Respose To</th>
                        <th>Date</th>
                        <th>Approve</th>
                        <th>Unapprove</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                     <?php 
                        
                        commentView();
                        
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


