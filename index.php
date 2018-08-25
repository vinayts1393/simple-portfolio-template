<?php ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="src/css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    

</head>
<body>
        <?php require('./src/view/navigation-pane.php'); ?>
    
        <div class="container">
            <div class="row about-content">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 container-color" >
                    <div class="jumbotron container">
                        <h1 class="display-4">ABOUT</h1>
                        <div class="row justify-content-center margins">
                            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-xs-12 about-img">
                                <img class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-xs-12" src="./src/assets/img.png" >
                            </div>

                            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-xs-12 data1">
                                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                                <hr class="my-4">
                                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>

                                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                                <hr class="my-4">
                                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                                <hr class="my-4">
                                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>

                                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                                <hr class="my-4">
                                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>                        
                            </div>                    
                        </div>
                    </div>
                </div>
            </div>

                    
            <?php require('./src/view/project-content.php'); ?>
            
            <?php require('./src/view/blog-content.php'); ?>
            
            <?php require('./src/view/contact-content.php'); ?>
       
        </div>
    
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <!-- external  // -->
    <script src="./src/js/jquery-css-dom.js"></script>
    
</body>
</html>