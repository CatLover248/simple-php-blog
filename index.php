
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

    echo "<strong>$table_name</strong>";
    echo "<hr>";
    
    while($i = mysqli_fetch_assoc($response)){
        echo "<p>" . $i['title'] . "</p>";
        echo "<p>" . $i['body'] . "</p>";
        echo "<p>" . $i['date_created'] . "</p>";
        echo "<hr>";
    }


?>