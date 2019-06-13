<?php

$con = mysqli_connect("localhost","root","","student");
  //mysqli_select_db($con , "student");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


    $username     = $_POST['username'];
    $email        = $_POST['email'];
    $mobile       = $_POST['mobile'];
    $link         = $_POST['link'];


    $query = "INSERT INTO names (user_name , email_address , mobile , link) 
    VALUES ('".$username."','".$email."','".$mobile."','".$link."')";
    $result = mysqli_query($con,$query);
    echo " <h3> Save Successfully </h3> <br>";
    if ($result){
        $user_details = "SELECT * FROM names";
        $result = mysqli_query($con,$user_details);
        while($table_data = mysqli_fetch_array($result)){
            echo "ID is : ".$table_data['user_id']."<br>";
            echo "Name is : ".$table_data['user_name']."<br>";
            echo "Mobile is : ".$table_data['mobile']."<br>";
            echo "Facebook Link is : ".$table_data['link']."<br>";
        }
        
}

?>