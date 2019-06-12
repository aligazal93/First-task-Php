
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
    <input type="text" name="email"  >

    <label style="display:block">Phone Number</label>
    <input type="text" name="Phonenumber"  >

    <label style="display:block">Profile Link *FaceBook* </label>
    <input type="text" name="Linkfacebook"  >

    <input type="submit" style="display:block; margin-top:5px; " value="save">
</form>



</body>
</html>