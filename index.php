
<?php
    // https://www.youtube.com/watch?v=2Bxh5FNGznQ
    
    $connect = mysqli_connect(
        "db",
        "php_docker",
        "password",
        "php_docker"
    );

    $table_name = "php_docker_table";

    $query = "SELECT * FROM $table_name";

    $response = mysqli_query($connect, $query);

    echo "<h1><strong>$table_name</strong></h1>";
    echo "<hr>";
    
    while($i = mysqli_fetch_assoc($response)){
        echo "<a href=" . "blogs.php?title=". $i['title'] . ">". $i['title'] . "</a>";
        echo "<hr>";
    }



?>