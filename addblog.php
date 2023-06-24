<html>
    <head>
        <title>Blog</title>
        <link rel="stylesheet" type="text/css" href="global.css">
    </head>
    <body>
        <div class="main-center">
            <div class="inputs">
                <form action="addblog.php" method="get">
                    Title: <input type="text" name="title">
                    <br>
                    Body: <input type="text" name="body">
                    <br>
                    <input type="submit" value="visit">
                    <br>
                </form>
            </div>
            <?php
                // https://www.youtube.com/watch?v=2Bxh5FNGznQ
                $title = $_GET["title"];
                $body = $_GET["body"];

                $connect = mysqli_connect(
                    "db",
                    "php_docker",
                    "password",
                    "php_docker"
                );

                $query = "INSERT INTO `php_docker_table` (`id`, `title`, `body`, `date_created`) VALUES (NULL, '" . $title . "', '" . $body . "', '". date("Y-m-d")."');";
                

                $response = mysqli_query($connect, $query);
                
                echo $response;
            ?>
        </div>
    </body>
</html>