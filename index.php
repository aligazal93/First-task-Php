<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>تسجيل البيانات</title>
</head>
<body>


<form action="insert.php" method="POST">
    <label style="display:block">Username</label>
    <input type="text" name="username"  >

    <label style="display:block">Email Address</label>
    <input type="email" name="email"  >

    <label style="display:block">Phone Number</label>
    <input type="tel" name="mobile"  >

    <label style="display:block">Link Of Facebook</label>
    <input type="text" name="link"  >


    <input type="submit" name="add" value="add New">
</form>



</body>
</html>