<?php

    mysqli_connect('localhost' , 'root','') or die('not connected');
    mysqli_select_db("student" , "");

    if (isset($_post['submit'])) {

        $username     = $_POST['username'];
        $email        = $_POST['email'];
        $Phonenumber  = $_POST['Phonenumber'];
        $Linkfacebook = $_POST['Linkfacebook'];

        $query = "insert into data (username , email , phonenumber , Linkfacebook) 
        values ('$username','$email', '$Phonenumber','$Linkfacebook')";
        if (mysqli_query($query)) {
            echo "date save successfully";
        }
    }

