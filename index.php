<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mountains+of+Christmas:wght@700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="./dist/css/style.css">
    <title>PHP AJAX DISCHI</title>
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
                <li v-for="cdinfo in cd" class="cd">     
                    <div class="cd-info">
                        <h3 class="title-and-year">
                            {{ cdinfo.title }}
                        </h3>
                        <h4 class="title-and-year">
                            {{ cdinfo.author }}
                        </h4>
                        <div class="cd-image">
                            <img v-bind:src="cdinfo.poster" alt="poster">
                        </div>
                        <h3 class="title-and-year">
                            {{ cdinfo.year }}
                        </h3>
                        <h4 class="title-and-year">
                            {{ cdinfo.genre }}
                        </h4>
                    </div>
                </li>        
            </ul> 
        </main>

    </div>


    <script src="./dist/js/script.js"></script>
</body>

</html>
