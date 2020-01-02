<!DOCTYPE html>
<html lang="en">
<?php
ob_start();
$title="Comments";

    include_once ("includes/header.php");
?>

  <body id="page-top" class="sidebar-toggled">

  <?php
  include_once ("includes/navigation.php");
  ?>

    <div id="wrapper">

      <!-- Sidebar -->
        <?php
            include_once ("includes/sidebar.php");
        ?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
            <?php
            include_once ("includes/breadcrumb.php");
            ?>
            <?php
            include_once ("../includes/connection.php");
            if (isset($_GET['source']))
            {
                $source = $_GET['source'];

            }else{
                $source="";
            }
            switch ($source){
                case "approve":
                    if (isset($_GET['comment_id'])) {

                        $comment_id = $_GET['comment_id'];
                        $query = "UPDATE comments SET comment_status='approved' where comment_id = $comment_id";
//                        die($query);
                        mysqli_query($connection,$query);
//                        die(mysqli_error($connection));
                    }
                    include_once ("includes/pages/comments/view-all-comments.php");
                    break;
                case "unapprove":
//                    die("unapprove");
                    if (isset($_GET['comment_id'])) {
                        $comment_id = $_GET['comment_id'];
                        $query = "UPDATE comments SET comment_status='unapproved' where comment_id = $comment_id";
//                        die($query);
                        mysqli_query($connection,$query);
//                        die(mysqli_error($connection));
                    }
                    include_once ("includes/pages/comments/view-all-comments.php");
                    break;

                case "delete_comment":
                    if (isset($_GET['comment_id'])) {
                        $comment_id = $_GET['comment_id'];
                        $query = "DELETE FROM comments where comment_id = $comment_id";
//                        die($query);
                        mysqli_query($connection,$query);
//                        die(mysqli_error($connection));
                    }
                    include_once ("includes/pages/comments/view-all-comments.php");
                    break;
                default:
                    include_once ("includes/pages/comments/view-all-comments.php");
            }
            ?>



        </div>




        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
          <?php
          include_once ("includes/footer.php");
          ?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->

  <?php
    include_once ("includes/scripts.php");
  ?>

  </body>

</html>
