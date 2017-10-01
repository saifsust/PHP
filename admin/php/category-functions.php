<?php

function insertCategory() {

    if (isset($_POST['submit'])) {


        $cat_title = $_POST['cat_title'];

        if ($cat_title === null || empty($cat_title)) {
            echo "<h1> Category can't empty !</h1><br>";
        } else {
            try {


                $query = "SELECT MAX(cat_id) FROM categories;";
                $result = mysqli_query(DbConfig::$connection, $query);

                $result = mysqli_fetch_row($result);
                $cat_id = $result[0];
                $cat_id++;
//                                echo $cat_id;
                $QUERY = "insert into categories(cat_id,cat_title)";
                $QUERY .= "value('{$cat_id}','$cat_title');";
                mysqli_query(DbConfig::$connection, $QUERY);
                  header("Location: posts.php?source=categories");
            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
        }
    }
}

//tableView
function tableView() {

    $QUERY = "SELECT * FROM categories;";
    try {
        $result = mysqli_query(DbConfig::$connection, $QUERY);
        ?>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Category Title</th>
                     <th>Edit</th>
                      <th>Delete</th>
                </tr>
            </thead>

            <tbody>


                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $Id = $row['cat_id'];
                    $cat_title = $row['cat_title'];


                    echo " <tr>";
                    echo "<td>$Id</td>";
                    echo "<td>$cat_title</td>";
                    echo "<td><a href='posts.php?source=categories&edit={$Id}'</a>Edit</td>";
                     echo "<td><a href='posts.php?source=categories&delete={$Id}'</a>delete</td>";
                    echo "</tr>";
                }
            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
            ?>
        </tbody>

    </table>
    <?php
}

//delete category

function deleteCategory() {


    if (isset($_GET['delete'])) {
        $cat_id = $_GET['delete'];
        $query = "DELETE FROM categories WHERE cat_id='$cat_id';";

        try {

            mysqli_query(DbConfig::$connection, $query);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
          header("Location: posts.php?source=categories");
    }
}

//edit category
function editCategory() {

    if (isset($_GET['edit'])) {
        $cat_id = $_GET['edit'];

        try {

            $query = "SELECT cat_title FROM categories WHERE cat_id='$cat_id';";

            $result = mysqli_query(Dbconfig::$connection, $query);

            $result = mysqli_fetch_row($result);
            $cat_title = $result[0];
         
            
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        ?>
        <form action="" method="post">


            <div class="form-group">
                <label for="cat_title">Edit Category</label>
                <input type="text" name="cat_title" class="form-control" value="<?php
                if (isset($cat_title)) {
                    echo $cat_title;
                }
                ?>" />
            </div>
            <input type="submit" name="edit_submit" class="btn btn-primary" value="Edit Category" />


            <?php
            if (isset($_POST['edit_submit'])) {

                $catTitle = $_POST['cat_title'];


                if ($catTitle == null || empty($catTitle)) {


                    echo "<h1>Category Can't Empty !</h1>";
                } else {
                    //echo $_GET['edit'];
                    $query = "UPDATE categories SET cat_title='$catTitle' WHERE cat_id= '$cat_id';";

                    try {
                        mysqli_query(DbConfig::$connection, $query);
                    } catch (Exception $ex) {
                        echo $ex->getMessage();
                    }
                    ?>

                    <!-- Edit Category -->
                </form>

                <?php
            }
                header("Location: posts.php?source=categories");
        }
        
    }
}
?>
