<?php

    $conn = mysqli_connect("localhost", "u887740196_rajaZ", "TaxiRaja@2022", "u887740196_CaptainTaxi");

    if(!$conn)
    {
        echo "<h3 class='container bg-dark text-center p-3 text-warning rounded-lg mt-5'>Not able to connect to database</h3>";
    }


    $sql = "SELECT * FROM Blog";
    $query = mysqli_query($conn, $sql);



    if(isset($_REQUEST["new_post"])){
        $title = $_REQUEST["title"];
        $content = $_REQUEST["content"];

        $sql = "INSERT INTO Blog(title, content) VALUE('$title','$content')";
        mysqli_query($conn, $sql);
        

        header("Location: createBlog.php?info=added");
        exit();
    }
    
?>