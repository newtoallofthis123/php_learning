<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="https://noobscience.vercel.app/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./static/main.css">
    <title>Form Was submitted!</title>
</head>
<body>
    <?php $age = (int)$_POST['age'] ?>
    <p>
        <?php if ($age >= 21 && $age < 70): ?>
            You can drink
            <span>Naughty :)</span>
        <?php elseif ($age >= 70): ?>
            You probably shouldn't drink
            <span>You old man</span>
        <?php else: ?>
            You cannot drink
            <span>You puny human</span>
        <?php endif; ?>
    </p>
</body>
</html>