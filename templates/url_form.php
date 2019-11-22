<?php
require(__DIR__ . "/../language.php");
?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,600,700&amp;display=swap" rel="stylesheet">
<style type="text/css">

    html body {
        margin-top: 50px !important;
    }

    #top_form {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;

        margin: 0;

        z-index: 2100000000;
        -moz-user-select: none;
        -khtml-user-select: none;
        -webkit-user-select: none;
        -o-user-select: none;

        border-bottom: 1px solid #151515;

        background: #dadada;

        height: 45px;
        line-height: 45px;
    }

    #top_form input[name=url] {
        /*width: 550px;*/
        height: 38px;
        padding: 5px;
        font: 8px "Helvetica Neue", Helvetica, Arial, sans-serif;
        border: 0px none;
        background: none repeat scroll 0% 0% #FFF;
    }
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
</style>

<script>
    var url_text_selected = false;

    function smart_select(ele) {

        ele.onblur = function () {
            url_text_selected = false;
        };

        ele.onclick = function () {
            if (url_text_selected == false) {
                this.focus();
                this.select();
                url_text_selected = true;
            }
        };
    }
</script>

<div id="top_form" class="container-fluid row">
  <div class="col-md-8 col-12 offset-md-2" style="margin:3px auto;">
       <form method="post" action="index.php" target="_top" style="margin:0; padding:0;">
           <div class="input-group mb-3">
               <div class="input-group-prepend">
                   <input type="button" value="<?php echo $lang["home"]; ?>" onclick="window.location.href='index.php'" class="btn btn-outline-secondary ghost">
               </div>
               <input type="text" name="url" value="<?php echo $url; ?>" autocomplete="off" class="form-control">
               <input type="hidden" name="form" value="1">
               <div class="input-group-prepend">
                   <input type="submit" value="<?php echo $lang["go"]; ?>" class="btn btn-outline-secondary ghost">
               </div>
           </div>
       </form>
  </div>
</div>

<script type=" text/javascript">
    smart_select(document.getElementsByName("url")[0]);
</script>
