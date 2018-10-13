
<!DOCTYPE html>
<html lang="de">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/output.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/bg-home.css">
    <meta charset="UTF-8">
    <title>Schwimmen - <?php echo $pageTitle; ?></title>
</head>
<body>
<div class="header">
    <nav>
        <ul class="main-menu">
            <li class="main-left"><a <?php if ($activePage == "Home"){echo "class=\"active\"";}?> href="index.php">Home</a></li>
            <li class="main-right"><a <?php if ($activePage == "Blog"){echo "class=\"active\"";}?> href="blog.php">Blog</a></li>
            <li class="main-right"><a <?php if ($activePage == "Erholung"){echo "class=\"active\"";}?> href="erholung.php">Erholung</a></li>
            <li class="main-right"><a <?php if ($activePage == "Technik"){echo "class=\"active\"";}?> href="technik.php">Technik</a></li>
            <li class="main-right"><a <?php if ($activePage == "Allgemeines"){echo "class=\"active\"";}?> href="allgemein.php">Allgemeines</a></li>
        </ul>
    </nav>
</div>