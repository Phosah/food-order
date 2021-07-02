<?php include('../config/constants.php') ?>

<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM tbl_admin WHERE id=$id";
    $res = mysqli_query($conn, $sql);
    
    if($res==TRUE) {
        $_SESSION['delete'] = "<div class='success'>Admin Deleted successfully</div>";
        header('Location: manage-admin.php');
    } else {
        $_SESSION['delete'] = "<div class='error'>Failed to delete, please try again later</div>";
        header('Location: manage-admin.php');
    }

?>