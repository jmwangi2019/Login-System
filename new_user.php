<html>
<head>
    <title>New User</title>
    <link rel="stylesheet" href="bootstrap-4.2.1-dist/css/bootstrap.css">
    <script src="bootstrap-4.2.1-dist/js/jquery-3.3.1.js"></script>
    <script src="bootstrap-4.2.1-dist/js/popper.js"></script>
    <script src="bootstrap-4.2.1-dist/js/bootstrap.js"></script>
</head>
<body>
<h2 class="text-center">New User</h2>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="add_user.php" method="post" class="form-group">
                <table class="table table-striped table-responsive-sm">
                    <tr>
                        <td class="text-right">
                            <label for="">First Name : </label>
                        </td>
                        <td>
                            <input type="text" name="fname" class="form-control" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">Last Name : </label>
                        </td>
                        <td>
                            <input type="text" name="lname" class="form-control" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">Username : </label>
                        </td>
                        <td>
                            <input type="text" name="user_name" class="form-control" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">Password : </label>
                        </td>
                        <td>
                            <input type="password" name="passwd" class="form-control" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">User Group : </label>
                        </td>
                        <td>
                            <select name="user_group" id="user_group" class="form-control" required="required">
                                <option value="Systems Administrator">Systems Administrator</option>
                                <option value="Accounts">Accounts</option>
                                <option value="Front Office">Front Office</option>
                                <option value="Library">Library</option>
                                <option value="Human Resource">Human Resource</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center">
                            <button type="submit" class="btn btn-success">Save</button>
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