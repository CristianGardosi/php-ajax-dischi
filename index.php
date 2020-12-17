<!-- Importazione database dischi e relative informazioni -->
<?php
    include __DIR__ . '/partials-php/database.php';
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mountains+of+Christmas:wght@700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="./dist/css/style.css">
    <title>PHP CD</title>
</head>

<body>
    <!-- VueJs app container -->
    <div id="app">

        <!-- HEADER -->
        <header class="header">
            <div class="logo">
                <img src="./img/logo.png" alt="">
            </div>
            <div class="title">
                <h1>Christmas cool spoty edition!</h1>
            </div>
            <div class="logo">
                <img src="./img/logo.png" alt="">
            </div>
        </header>

        <!-- MAIN -->
        <main class="main">
        <ul class="cd-list">
                <?php foreach ($database as $cd) {  ?>
                    
                        <li class="cd">
                        
                            <div class="cd-info">
                                <h3 class="title-and-year">
                                    <?php echo $cd['title'] ?>
                                </h3>
                                <h4 class="title-and-year">
                                    <?php echo $cd['author'] ?>
                                </h4>
                                    <div class="cd-image">
                                        <img src="<?php echo $cd['poster'] ?>" alt="">
                                    </div>
                                <h3 class="title-and-year">
                                    <?php echo $cd['year'] ?>
                                </h3>
                                <h4 class="title-and-year">
                                    <?php echo $cd['genre'] ?>
                                </h4>
                            </div>
                        </li>
                   
                <?php } ?>      
            </ul> 
        </main>


    </div>


    <script src="./dist/js/script.js"></script>
</body>

</html>
