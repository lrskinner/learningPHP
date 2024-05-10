<?php
require 'variables.php'; 
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title><?php echo $ctitle; ?></title>
    <meta name="description" content="<?php echo $cdescription; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div class="wrapper">
        <header>
            <h1><?php echo $title; ?></h1>
        </header>
        <main>
            <div>
                <p><?php echo $body; ?></p>
            </div>
        </main>
    </div>
<footer>
    <p>&copy; <?php echo $author; ?> - <?php echo date('Y'); ?></p>
</footer>