<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="https://noobscience.vercel.app/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./static/main.css" >
    <title>Cool Stuff</title>
</head>
<body>Hello 
    <?php
        echo $_POST['name'];
    ?>
    <p>
        <?php
        if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Chrome')){
            echo "You are using Chrome!!";
        } elseif (str_contains($_SERVER['HTTP_USER_AGENT'], 'Firefox')){
            echo "You are using Firefox!!";
        } else{
            echo "Using a browser of anytype is cool, but still :)";
        }
        ?>
    </p>
    <?php $cool = ["hello" => 1, "fuck" => 2] ?>
    <p>
        <?php
        echo $cool["hello"] + 3
        ?>
    </p>
    <p>
        <?php
         foreach ($cool as $i => $value) {
             echo $value;
             echo "\t";
         }
        ?>
    </p>
    <form action="action.php" style="padding-bottom: 0.5rem;" method="post">
        <label for="age">Enter Age: </label><input type="number" name="age" id="age">
        <button type="submit">Submit</button>
    </form>
    <a href="https://youtube.com">YouTube</a>
</body>
</html>

<!-- https://www.php.net/manual/en/language.types.array.php -->