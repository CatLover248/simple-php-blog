<html>
    <head>
        <title>Blog</title>
        <link rel="stylesheet" type="text/css" href="global.css">
    </head>
    <body>
        <div class="main-center">
            <h1>blog</h1>
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
                while($i = mysqli_fetch_assoc($response)){
                    echo "<a href=" . "blogs.php?title=". str_replace(" ", "+", $i["title"]) . ">". $i['title'] . "</a>";
                    echo "<br>";
                    echo "<br>";
                }
            ?>
        </div>
    </body>
</html>