<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rankmylist Neon Version</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Londrina+Sketch&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Shadow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/indexstyle.css">
</head>
<body>
    <?php include('includes/header.php'); ?>
    <main class="main flex-container-row">
        <?php include('includes/leftsidemenu.php'); ?>
        <section class="middle-container">
            <?php include('includes/slider.php'); ?>       
            <?php include('includes/trendingcontent.php'); ?>
            <?php include('includes/recommendedcontent.php'); ?>
            <?php include('includes/featuredcontent.php'); ?>
            <?php include('includes/popularcontent.php'); ?>
            <?php include('includes/latestcontent.php'); ?>
        </section>
       <?php include('includes/rightsidecontent.php'); ?>
    </main>
</body>
</html>