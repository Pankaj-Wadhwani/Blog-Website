<!DOCTYPE html>
<html lang="en">
<?php
ob_start();
$title="Users";

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
            if (isset($_GET['source']))
            {
                $source = $_GET['source'];

            }else{
                $source="";
            }
            switch ($source){
                case "add_user":
                    include_once ("includes/pages/users/add-user.php");
                    break;
                case "edit_user":
                    include_once ("includes/pages/users/edit-user.php");
                    break;

                case "delete_user":
                    include_once ("includes/pages/users/delete-user.php");
                default:
                    include_once ("includes/pages/users/view-all-users.php");
            }
            ?>



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
