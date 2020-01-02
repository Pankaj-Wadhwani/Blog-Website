<?php
    $page_title="Post";
?>
<!DOCTYPE html>
<html lang="en">

<?php
include_once ("includes/header.php");
?>

  <body>

    <!-- Navigation -->
    <?php
    include_once ("includes/navigation.php");
    ?>



    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">
            <?php
            if (isset($_GET['post_id'])){

            $post_id = $_GET['post_id'];
            include_once("includes/connection.php");
            $query = "SELECT * FROM posts WHERE post_id=$post_id";
            $result = mysqli_query($connection, $query);
            $row = mysqli_fetch_assoc($result);
            $post_cat_id = $row['post_cat_id'];
            $post_title = $row['post_title'];
            $post_author = $row['post_author'];
            $post_date = $row['post_date'];
            $post_image = $row['post_image'];
            $post_tags = $row['post_tags'];
            $post_content = $row['post_content'];

            $post_comment_count = $row['post_comment_count'];
            $post_status = $row['post_status'];

            $category = get_all_categories("cat_id=$post_cat_id");
            $category_title = $category[0]['cat_title'];


            ?>
            <!-- Title -->
            <h1 class="mt-4"><?php echo $post_title ?></h1>
            <p class="lead">
                by <a href="#"><?php
                    echo $post_author;
                    ?></a>
            </p>

            <hr>

            <!-- Date/Time -->
            <p>Posted on <?php echo $post_date; ?> at 12:00 PM</p>

            <hr>

            <!-- Preview Image -->
            <img class="img-fluid rounded" src="images/<?php echo $post_image ?>" alt="">

            <hr>

            <!-- Post Content -->
            <p><?php
                echo $post_content;
                ?></p>
            <hr>
            <!--            php for form-->
            <?php
            if (isset($_POST['post_comment'])) {
                $comment_author = $_POST['comment_author'];
                $comment_content = $_POST['comment_content'];
                $comment_email = $_POST['comment_email'];
                $comment_date = date("Y-m-d");
                include_once("includes/connection.php");

                $insert_query = "INSERT INTO comments(comment_post_id,comment_author,comment_email,comment_content,comment_date) VALUES ($post_id,'$comment_author','$comment_email','$comment_content','$comment_date')";
                mysqli_query($connection, $insert_query);
                if (mysqli_errno($connection)) {
                    die(mysqli_error($connection));
                }else{
                    session_start();
                    $condition = "user_id={$_SESSION['user_id']}";
                    $result=get_all_users($condition);
                    $user=mysqli_fetch_assoc($result);
                    $to=$user['email'];
                    $name=$comment_author;
                    include_once ("test_mail.php");
                }
            }
            ?>

            <!-- Comments Form -->
            <div class="card my-4">
                <h5 class="card-header">Leave a Comment:</h5>
                <div class="card-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="">Author</label>
                            <input type="text" class="form-control" name="comment_author" id="comment_author">

                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="comment_email" id="comment_email">

                        </div>

                        <div class="form-group">
                            <label for="">Content</label>
                            <textarea class="form-control" rows="3" name="comment_content"
                                      id="comment_content"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="post_comment" id="post_comment">Post
                        </button>
                    </form>
                </div>
            </div>


            <?php
            $condition = "comment_post_id = $post_id and  comment_status = 'approved'";
            $comments_resultset = get_all_comments($condition);
            while ($comment = mysqli_fetch_assoc($comments_resultset)){
            $comment_author = $comment['comment_author'];
            $comment_date = $comment['comment_date'];
            $comment_content = $comment['comment_content'];


            ?>
            <!-- Single Comment -->
            <div class="media mb-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                    <h5 class="mt-0"><?php echo $comment_author?></h5>
                    <?php echo $comment_content?>
            </div>


        </div>
          <?php
          }
          ?>

          <!-- Sidebar Widgets Column -->


          <?php
          }

          ?>
        </div>
              <?php
              include_once("includes/sidebar.php");
              ?>


      </div>
      <!-- /.row -->


    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php
    include_once ("includes/footer.php");
    ?>

    <!-- Bootstrap core JavaScript -->
    <?php
    include_once ("includes/core_js.php");
    ?>
  </body>

</html>
