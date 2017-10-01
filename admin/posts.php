
<!-- header includes-->
<?php include('includes/admin-header.php');  ?>
<?php include('includes/admin-navigation.php');?>
<?php include('php/PostViewer.php'); 
 include('php/edit-post.php');

?>


    
<?php include('php/addPost.php'); ?>

<?php 

   if(isset($_GET['source']))
   {
       
       $source=$_GET['source'];
       echo $source;
       
       if(empty($_GET['source']) || $source==null)
       {
           $source='';
       }
       
       switch($source)
       {
           case 'add-post':
               include('add-post.php');
               break;
               
                 case 'delete':
                 postDeleteFromTable();  
               break;
                 case 'edit':
                  editPost();

               break;
               
                case 'comments':
                  include("comments-viewer.php");
               break;
                case 'categories':
                  include("categories.php");

               break;
        
               default : 
               include('all-posts-viewer.php');
             
       }
       
       
   }



?>





<?php include('includes/admin-footer.php')?>
