<form action="" method="post">
    <div class="form_group">
        <label for="cat-title"> Edit Category</label>
        <?php
        if(isset($_GET['edit'])){
            $cat_id = $_GET['edit'];

            $query = "SELECT * FROM category WHERE cat_id = $cat_id ";
            $select_categories_id = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($select_categories_id)) {
                $cat_id = $row['cat_id'];
                $cat_title = $row['cat_title'];
                ?>

                <input class="form-control" name="cat_title" type="text" value="<?php if(isset($cat_title)){echo $cat_title; } ?>">

            <?php } }?>
        <?php  //Update Query
        if (isset($_POST['update_category'])) {
            $the_cat_title = $_POST['cat_title'];

            $query = "UPDATE category SET cat_title = '{$the_cat_title}' WHERE cat_id = {$cat_id} ";
            $update_query = mysqli_query($connection, $query);

            if(!$update_query){
                die("Query Failed: " . mysqli_error($connection));
            }
        }



        ?>




    </div>
    <div class="form_group">
        <input class="btn btn-primary" type="submit" name="update_category" value="Update Category">
    </div>
</form>