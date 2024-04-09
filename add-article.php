<?php
if (isset($_POST['SUBMIT'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_POST['image'];

    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dataname = 'table';

    $connectin = mysqli_connect($host, $username, $password, $dataname);
    $sqlo = "INSERT INTO articles (title, content, image) values ('$title', '$content', '$image')";
    print_r($sqlo);
    mysqli_query($connectin, $sqlo);

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="formstyle.css">
</head>

<body>
    <div class="mainpage">
        <div class="innerpage">
            <form action="#" method="POST">

                <label for="title">Title: </label>
                <input type="text" name="title" id="title"><br>

                <label for="content">Content</label>
                <input type="text" name="content" id="content"><br>

                <label for="image">Image</label>
                <input type="file" name="image" id="image"><br>

                <button type="submit" name="SUBMIT" class="submit">Submit</button>

        </div>
        </form>
    </div>
</body>

</html>