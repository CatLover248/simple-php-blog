<html>
    <head>
        <title>Blog</title>
        <link rel="stylesheet" type="text/css" href="global.css">
    </head>
    <body>
        <div class="main-center">
            <?php
                // https://www.youtube.com/watch?v=2Bxh5FNGznQ
                $titleQuery = $_GET["title"];
                $connect = mysqli_connect(
                    "db",
                    "php_docker",
                    "password",
                    "php_docker"
                );

                $table_name = "php_docker_table";

                $query = "SELECT * FROM $table_name";

                $response = mysqli_query($connect, $query);
                
                while($i = mysqli_fetch_assoc($response)){
                    if($i['title'] == $titleQuery){
                        echo "<h1>" . $i['title'] . "</h1>";
                        echo "<br>";
                        echo "<p>" . $i['body'] . "</p>";
                        echo "<br>";
                        echo "<p> date: " . $i['date_created'] . "</p>";
                    }
                }


            ?>
        </div>
    </body>
</html>