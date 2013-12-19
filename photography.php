<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
    <?php include('includes/head.php'); ?>
</head>
<body class="<?php include('includes/bodyclass.php'); ?>">
    <?php include('includes/header.php'); ?>

    <div id="viewport">
        <div id="page">
            <h2>Photography</h2>

            <div class="imagebox_wrapper">
                <?php
                    include 'includes/getDeviations.php';
                    $_SESSION['loaded-photography'] = (isset($_SESSION['loaded-photography'])) ? $_SESSION['loaded-photography'] : 16;
                    $html = getDeviations('http://backend.deviantart.com/rss.xml?q=gallery:fu51on/27123391', $_SESSION['loaded-photography']);
                    echo $html;
                ?>
            </div>
            
            <div class="button" id="load_more" data-page="photography">load more <noscript>(requires Javascript)</noscript></div>

            <?php include('includes/imageviewer.php'); ?>
        </div>

        <?php include('includes/menu.php'); ?>
    </div>

    <?php include('includes/scripts.php'); ?>
</body>
</html>