<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <base href="http://localhost/Simple-MVC-training/">
    <link rel="stylesheet" href="public/styles/style.css">
    <link rel="stylesheet" href="public/styles/bootstrap.min.css">
</head>
<body>
<?php include_once 'application/layouts/templates/header.html'; ?>
<br>
<main class="container">
    <div class="row">
        <div class="col-12 col-md-8">
            <?php echo $content; ?>
        </div>
        <div class="col-12 col-md-4">
            <?php include_once 'application/layouts/templates/nav.html'; ?>
        </div>
    </div>
</main>
<?php include_once 'application/layouts/templates/footer.html'; ?>
</body>
</html>