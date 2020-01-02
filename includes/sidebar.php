
<div class="col-md-4">

    <?php
    if (!isLoggedIn()) {
        ?>
    <div class="card my-4">
        <h5 class="card-header">Login</h5>
        <div class="card-body">
            <form action="includes/processLogin.php" method="post" role="form">


                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Input...">
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" class="form-control" name="password" id="password" placeholder="Input...">
                </div>


                <button type="submit" name="login" class="btn btn-primary">Submit</button>
            </form>
            <a href="admin/forgot-password.php?forgot=<?php echo uniqid(true);?>">Forgot Password</a>
        </div>
        <?php
        }
        ?>


        <!-- Search Widget -->
        <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
                <form action="index.php" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Search for...">
                        <span class="input-group-btn">
                  <button class="btn btn-secondary" type="submit" name="search_submit" value="search">Go!</button>
                </span>
                    </div>
                </form>
            </div>
        </div>

    <!-- Categories Widget -->
    <div class="card my-4">
        <h5 class="card-header">Categories</h5>
        <div class="card-body">
            <div class="row">

                <div class="col-lg-6">

                    <ul class="list-unstyled mb-0">

<?php
include_once ("functions.php");
$allCategories = get_all_categories();
for ($i=0;$i<ceil(count($allCategories)/2);$i++){
    $cat_id = $allCategories[$i]['cat_id'];
echo<<<LINK
                        <li>
                            <a href="index.php?cat_id=$cat_id">{$allCategories[$i]['cat_title']}</a>
                        </li>
LINK;
}?>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
<?php
$allCategories = get_all_categories();
for ($i=ceil(count($allCategories)/2);$i<count($allCategories);$i++){
    $cat_id = $allCategories[$i]['cat_id'];
echo<<<LINK
 <li>
                            <a href="index.php?cat_id=$cat_id">{$allCategories[$i]['cat_title']}</a>
                        </li>
LINK;
                        }?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Side Widget -->
    <div class="card my-4">
        <h5 class="card-header">Side Widget</h5>
        <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
        </div>
    </div>

</div>
</div>