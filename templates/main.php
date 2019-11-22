<?php
require(__DIR__ . "/../language.php");
require(__DIR__ . "/../config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $config['website-name']; ?></title>
    <meta charset="utf-8">
    <meta name="description" content="<?php echo $config["website-description"]; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,600,700&amp;display=swap" rel="stylesheet">
    <style type="text/css">
        .navbar {
           padding: 0 1rem;
        }
        .nav-login{
               background-color: #4da97b;
               color: white !important;
               padding-left: 15px !important;
               padding-right: 15px !important;
        }
        .navbar-light .navbar-nav .nav-link {
           color: rgb(77, 169, 123);
        }
        .m-t-30{
           margin-top: 30px;
        }
        .btn-https {
           padding: 0rem .75rem !important;
           font-size: 0.7rem !important;
           color: white;
           background-color: #4da97b;
           border-color: #4da97b;
           border-radius: 3px;
        }
        .ghost{
           background-color: #4285f4;
           color: white;
           border-color: #4285f4;
        }
        .form-control:focus {
           box-shadow: none !important;
        }
        .image-logo{
           width: 309px;
           height: 181px;
           display: block;
           margin-left: auto;
           margin-right: auto;
        }
        .border-text{
           border-top-left-radius: 15px;
           border-bottom-left-radius: 15px;
        }
        .border-button{
           border-top-right-radius: 15px !important;
           border-bottom-right-radius: 15px !important;
        }
        @media only screen and (max-width: 768px) {
            .jumbotron.jumbotron-fluid {
                display: none !important;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><?php echo $config['website-name']; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">XXXXXX</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">XXXXXX</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">XXXXXX</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">XXXXXX</a></li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#">XXXXXX</a></li>
                    <li class="nav-item"><a class="nav-link nav-login" href="#">XXXXXX</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid m-t-30">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron jumbotron-fluid">
                  <div class="container">
                    <h1 class="display-4">AD TITLE</h1>
                    <p class="lead">This is a AD PLACE.</p>
                  </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="jumbotron jumbotron-fluid">
                  <div class="container">
                    <h1 class="display-4">AD TITLE</h1>
                    <p class="lead">This is a AD PLACE.</p>
                  </div>
                </div>
            </div>
            <div class="col-md-6">
                <?php if (isset($error_msg)) { ?>
                    <div class="alert alert-danger" role="alert">
                        <p><?php echo $error_msg; ?></p>
                    </div>
                <?php } ?>
                <img class="img-fluid img-responsive image-logo" src="https://dcassetcdn.com/design_img/502188/142424/142424_3544965_502188_image.png">
                <form class="form-group" action="index.php" method="post">
                    <div class="input-group mb-3">
                      <!--<div class="input-group-prepend">
                        <button class="btn btn-outline-secondary btn-https" type="button"> <i class="fa fa-lock"></i><br> <small>HTTPS</small></button>
                      </div> -->
                      <input type="text" class="form-control border-text" aria-label="" aria-describedby="basic-addon1" name="url" id="url" autocomplete="on" placeholder="" value=""
                           autofocus required>
                      <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary ghost border-button" type="submit"><i class="fa fa-search"></i> <?php echo $lang["go"]; ?> </button>
                      </div>
                    </div>
                </form>

            </div>
            <div class="col-md-3">
                <div class="jumbotron jumbotron-fluid">
                  <div class="container">
                    <h1 class="display-4">AD TITLE</h1>
                    <p class="lead">This is a AD PLACE.</p>
                  </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="jumbotron jumbotron-fluid">
                  <div class="container">
                    <h1 class="display-4">AD TITLE</h1>
                    <p class="lead">This is a AD PLACE.</p>
                  </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="jumbotron jumbotron-fluid">
                  <div class="container">
                    <h1 class="display-4">AD TITLE</h1>
                    <p class="lead">This is a AD PLACE.</p>
                  </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="jumbotron jumbotron-fluid">
                  <div class="container">
                    <h1 class="display-4">AD TITLE</h1>
                    <p class="lead">This is a AD PLACE.</p>
                  </div>
                </div>
            </div> 

            <div class="col-md-3">
                <div class="jumbotron jumbotron-fluid">
                  <div class="container">
                    <h1 class="display-4">AD TITLE</h1>
                    <p class="lead">This is a AD PLACE.</p>
                  </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="jumbotron jumbotron-fluid">
                  <div class="container">
                    <h1 class="display-4">AD TITLE</h1>
                    <p class="lead">This is a AD PLACE.</p>
                  </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="jumbotron jumbotron-fluid">
                  <div class="container">
                    <h1 class="display-4">AD TITLE</h1>
                    <p class="lead">This is a AD PLACE.</p>
                  </div>
                </div>
            </div>  
            <div class="col-md-3">
                <div class="jumbotron jumbotron-fluid">
                  <div class="container">
                    <h1 class="display-4">AD TITLE</h1>
                    <p class="lead">This is a AD PLACE.</p>
                  </div>
                </div>
            </div>

        </div>
    </div>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
