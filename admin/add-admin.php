<?php include("partials/menu.php"); ?>
    <div class="main-content">
        <div class="wrapper">
            <h1>Add Admin</h1>
            <br><br>

            <?php
                if(isset($_SESSION['add'])) {
                    echo $_SESSION['add'];
                    unset ($_SESSION['add']);
                }
            ?>

            <form action="" method="POST">
                <table class="tbl-30">
                    <tr>
                        <td>Full Name: </td>
                        <td><input type="text" name="full_name" placeholder="Enter your full name"></td>
                    </tr>
                    <tr>
                        <td>Username: </td>
                        <td><input type="text" name="username" placeholder="Enter your username"></td>
                    </tr>
                    <tr>
                        <td>Password: </td>
                        <td><input type="password" name="password" placeholder="Enter your password"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
<?php include("partials/footer.php"); ?>

<?php
    if(isset($_POST["submit"])) {
        $fullname = $_POST["full_name"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        // $password = md5($_POST["password"]);

        $sql = "INSERT INTO tbl_admin SET 
            full_name='$fullname',
            username='$username',
            password='$password'
            ";
            var_dump($sql);
        echo "connected";

        $res = mysqli_query($conn, $sql);
        if($res==TRUE) {
             $_SESSION['add'] = "Admin added Successfully";
             header("location: manage-admin.php");
            } else {            
                $_SESSION['add'] = "Failed to Add Admin";
                header("location: add-admin.php");
        }
    }
?>