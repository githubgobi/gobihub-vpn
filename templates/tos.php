<?php
require(__DIR__ . "/../language.php");
require(__DIR__ . "/../config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $config['website-name']; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,600,700&amp;display=swap" rel="stylesheet">
    
    <style type="text/css">
        .navbar {   
            padding: 0 1rem;
        }
        .nav-height{
            height: 100px;
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
            background-color: #75a3ff;
            color: white;
            border-color: #75a3ff;
        }
        .form-control:focus {
            box-shadow: none !important;
        }   
        .search-width{
            width: 33%;
        }
        .add-images{
            width: 200px;
        }
        @media only screen and (max-width: 768px) {
            .search-width {
                width: 100%;
            }
            .nav-height{
                height: 100%;
            }
            ul.navbar-nav.mr-auto.search-width{
                margin-top: 20px;
            }
            .add-images{
                width: 100%;
            }
        }
    </style>  
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow nav-height">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Theme - Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav mr-auto search-width">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                      <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary ghost" type="button"><i class="fa fa-snapchat-ghost"></i> Search</button>
                      </div>
                    </div>
                </ul>
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#"><img class="add-images" src="http://www.calstatela.edu/sites/default/files/images/slides/title.jpg"></a></li>
                    <li class="nav-item"><a class="nav-link nav-login" href="#"><img class="add-images" src="http://www.calstatela.edu/sites/default/files/images/slides/title.jpg"></a></li>
                    <li class="nav-item"><a class="nav-link nav-login" href="#"><img class="add-images" src="http://www.calstatela.edu/sites/default/files/images/slides/title.jpg"></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid m-t-30">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron jumbotron-fluid">
                  <div class="container">
                    <h1 class="display-4">Fluid jumbotron</h1>
                    <p><?php echo $lang["tos"]; ?></p>
                    <a href="<?php echo $config['website-url']; ?>" class="btn btn-primary btn-lg"><?php echo $lang["back"]; ?></a>
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
