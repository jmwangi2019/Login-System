<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap-4.2.1-dist/css/bootstrap.css">
    <script src="bootstrap-4.2.1-dist/js/jquery-3.3.1.js"></script>
    <script src="bootstrap-4.2.1-dist/js/popper.js"></script>
    <script src="bootstrap-4.2.1-dist/js/bootstrap.js"></script>
</head>
<body>
<h2 class="text-center">Login</h2>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form method="post" action="" class="form-group">
                <table class="table table-striped table-responsive-sm">
                    <tr>
                        <td class="text-right">
                            <label for="">Username : </label>
                        </td>
                        <td>
                            <input type="text" name="username" class="form-control" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">Password : </label>
                        </td>
                        <td>
                            <input type="password" name="password" class="form-control" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">User Group : </label>
                        </td>
                        <td>
                            <select name="usergroup" id="usergroup" class="form-control" required="required">
                                <option value="Systems Administrator">Systems Administrator</option>
                                <option value="Accounts">Accounts</option>
                                <option value="Front Office">Front Office</option>
                                <option value="Library">Library</option>
                                <option value="Human Resource">Human Resource</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" colspan="2">
                            <input type="submit" value="Login" class="btn btn-success">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="new_user.php" class="btn btn-primary">Register</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>

<?php
session_start();

if(isset($_POST['submit'])){
    include 'db_connect.php';


    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']);

    $qrysysadmin=mysqli_query($db,"SELECT * FROM users WHERE username='$username' AND password='$password' AND user_group='Systems Administrator'");
    $qryaccounts=mysqli_query($db,"SELECT * FROM users WHERE username='$username' AND password='$password' AND user_group='Accounts'");
    $qryfrontoffice=mysqli_query($db,"SELECT * FROM users WHERE username='$username' AND password='$password' AND user_group='Front Office'");
    $qrylibrary=mysqli_query($db,"SELECT * FROM users WHERE username='$username' AND password='$password' AND user_group='Library'");
    $qryhr=mysqli_query($db,"SELECT * FROM users WHERE username='$username' AND password='$password' AND user_group='Human Resource'");

    if(mysqli_num_rows($qrysysadmin)==1){
        header("LOCATION:sysadmin_dashboard.php");
    }

    else if(mysqli_num_rows($qryaccounts)==1){
        header("LOCATION:accounts_dashboard.php");
    }

    else if(mysqli_num_rows($qryfrontoffice)==1){
        header("LOCATION:front_office_dashboard.php");
    }

    else if(mysqli_num_rows($qrylibrary)==1){
        header("LOCATION:library_dashboard.php");
    }

    else if(mysqli_num_rows($qryhr)==1){
        header("LOCATION:hr_dashboard.php");
    }

    else {
        echo "Error! No user found.";
    }
}
?>