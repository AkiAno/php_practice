<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>My eshop</title>

    <link rel="stylesheet" href="css/main.css" />

</head>
<body>

    <div id="page">

        <!-- header -->
        <?php
            include 'header.php';
            include 'topmenu.php';
        ?>
        <!-- topmenu -->

        <div id="content">

            <!-- homepage/layout -->
            <?php
            include 'homepage/layout.php';
            ?>

        </div>

              <?php
                 include 'footer.php';
            
              ?>
        <!-- footer -->

    </div>

</body>
</html>