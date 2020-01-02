<?php

if (isset($_GET['id'])){
//    die("ho");

    include_once ("../includes/functions.php");

    $cat_id = $_GET['id'];

    $category  = get_all_categories("cat_id=$cat_id");
    if ($category>0){
        $cat_title = $category[0]['cat_title'];
        echo $cat_title;
        ?>
        <form action="includes/edit_data.php" method="post" role="form">
            <legend>edit category</legend>
            <input type="hidden" name="cat_id" value="<?php echo $cat_id;?>">
            <div class="form-group">
                <label for="cat_title">category title</label>
                <input type="text" class="form-control" name="cat_title" id="cat_title" value="<?php echo $cat_title;?>">
            </div>

            <button name="edit_category" type="submit" class="btn btn-warning">edit category</button>
        </form>
        <?php
    }
}
?>