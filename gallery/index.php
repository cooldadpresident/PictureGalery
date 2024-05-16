<?php
/*
Author Lukas Praks
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <title>
                Gallery
        </title>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <script src="js/jquery-1.7.2.min.js"></script>
        <script src="js/jquery-ui-1.8.18.custom.min.js"></script>
        <script src="js/jquery.smooth-scroll.min.js"></script>
        <script src="js/lightbox.js"></script>
</head>

<body>
        <h1>
                Gallery in php
        </h1>
        <?php
        require_once ('classes/gallery.php');
        $gallery = new Gallery('pictures', 5);
        $gallery->read();
        $gallery->printGallery();

        ?>

</body>

</html>