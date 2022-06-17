<?php
    $server = "localhost";                    //server name
    $user = "root";                           //user name
    $password = "";                           //password is empty for sql
    $db = "dbmovies";                              //type database name

    $conn = mysqli_connect($server,$user,$password,$db);    //connecting to database

    if(!$conn)                                //incase connection fails
    {
        echo "connection failed";       //exits the program
    }
    $sql = "INSERT INTO movie (name , actor , actress , director , year ) VALUES ('ULIDAVARU KANDANTHE' , 'rakshit' , 'Rashmika' , 'Rakshith shetty' , 2022),('rocky' , 'yash' , 'nidhi' , 'neel' , 2022),('HELLO JUNIOR' , 'ravikumar' , 'sonakshi' , 'prashanth' , 2016),('real hero' , 'kamal' , 'pooja' , 'nelson' , 2002),('gold' , 'emran' , 'mouni' , 'virappa' , 2001);       //query

             $insert = mysqli_query($conn,$sql);                     //executing query
             echo '<script type="text/javascript">';
                echo 'alert("movies added successfully");';
                echo 'window.location.href="Display.php";';
                echo "</script>";
?>
