<div class="col-md-4">

    <!-- Blog Search Well -->
    <div class="well">
        <h4>Blog Search</h4>
        <form action="search.php" method="post">
            <div class="input-group">

                <input type="text" class="form-control" name="search">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit" name="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>

            </div>
        </form>
        <!-- /.input-group -->


    </div>

    <!-- Blog Categories Well -->


    <div class="well">
        <h4>Blog Categories</h4>

        <?php
        $QUERY = 'SELECT * FROM categories;';
        try {
            $result = mysqli_query(DbConfig::$connection, $QUERY);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        ?>

        <div class="row">
            <div class="col-lg-6">
                <ul class="list-unstyled">

                    <?php
                    $count = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $cat_title = $row['cat_title'];
                        if ($count <=3) {

                            echo "<li><a href='#'>$cat_title</a>
                    </li>";
                        } else {
                            ?>

                        </ul>
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <?php
                            echo "<li><a href='#'>$cat_title</a>
                    </li>";
                        }
                        $count++;
                    }
                    ?>

                </ul>
            </div>
            <!--/.col-lg-6 -->
        </div>
        <!--/.row -->
    </div>

    <!--Side Widget Well -->
    <div class = "well">
        <h4>Side Widget Well</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
    </div>

</div>
