<div class="row">
    <div class="col-md-12">
        <a href="posts.php?source=add_post" type="button" class="btn btn-primary">Add Post</a>
    </div>
</div>
<div class="mb-3"></div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Author</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Image</th>
                    <th>Tags</th>
                    <th>Comments</th>
                    <th>Date</th>
                    <th></th>
                    <th></th>

                </tr>
                </thead>
                <tbody>
                <?php
                include_once ("../includes/functions.php");
                $result = get_all_posts("post_author = {$_SESSION['user_id']}");
                while($row = mysqli_fetch_assoc($result)){
                    $post_id=$row['post_id'];
                    $post_cat_id=$row['post_cat_id'];
                    $post_title=$row['post_title'];
                    $post_author=$row['author'];
                    $post_date=$row['post_date'];
                    $post_image=$row['post_image'];
                    $post_tags=$row['post_tags'];

                    $post_comment_count=$row['post_comment_count'];
                    $post_status=$row['post_status'];

                    $category = get_all_categories("cat_id=$post_cat_id");
                    $category_title = $category[0]['cat_title'];

                    echo<<<DATA
<tr>
                              <td>$post_id</td>
                              <td>$post_author</td>
           
                              <td>$post_title</td>
               
                              <td>$category_title</td>
                              <td>$post_status</td>
       
                              <td><img src="../images/$post_image" width="100px" class="img-fluid"></td>
                          
                              <td>$post_tags</td>
                          
                              <td>$post_comment_count</td>
                              <td>$post_date</td>
                              
                              <td><a href="posts.php?source=delete_post&post_id=$post_id" class="btn btn-danger"><span class="fa fa-trash"></span></a></td>
                              <td><a href="posts.php?source=edit_post&post_id=$post_id" class="btn btn-outline-warning"><span class="fa fa-edit"></span></a></td>
                          </tr>
DATA;

                }
                ?>


                </tbody>
            </table>
        </div>
    </div>
</div>