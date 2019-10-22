<html>
<head>
    <title>Success</title>
    <link rel="stylesheet" href="bootstrap-4.2.1-dist/css/bootstrap.css">
    <script src="bootstrap-4.2.1-dist/js/jquery-3.3.1.js"></script>
    <script src="bootstrap-4.2.1-dist/js/popper.js"></script>
    <script src="bootstrap-4.2.1-dist/js/bootstrap.js"></script>
</head>
<body>
<h2 class="text-center">Success</h2>
<div class="container">
    <?php

    $conn=mysqli_connect("localhost","root","","dbclasses");
    if (!$conn)
    {
        die("Connection Failed : " . mysqli_connect_error());
    }
    else
    {
        $sql="insert into users(first_name,last_name,username,password,usergroup)
values('$_POST[fname]','$_POST[lname]','$_POST[user_name]','$_POST[passwd]','$_POST[user_group]')";

        if($conn->query($sql) == true)
        {
            print "<p>New User Added Successfully</p>";
            print "<a href='new_user.php' class='btn btn-primary'>Add New User</a>";
            print "<a href='' class='btn btn-info'>Login</a>";
        }
        else
        {
            print "New user not added";
        }
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>