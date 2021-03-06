<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo ((isset($web_title ) && ($web_title !== ""))?($web_title ):"ThinkShop v0.0.1"); ?></title>
        
        <link rel="stylesheet" href="/thinkshop/Public/lib/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/thinkshop/Public/lib/bootstrap/dist/css/carousel.css">
        <link rel="stylesheet" href="/thinkshop/Public/lib/bootstrap/dist/css/sticky-footer.css">
        <link rel="stylesheet" href="/thinkshop/Public/lib/fullpage.js/jquery.fullPage.css">
        <link rel="stylesheet" href="/thinkshop/Public/css/common.css">
        
        <script src="/thinkshop/Public/lib/jquery/dist/jquery.min.js"></script>
        <script src="/thinkshop/Public/lib/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="/thinkshop/Public/lib/fullpage.js/jquery.fullPage.min.js"></script>
        
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
        #main {
            margin-top: 80px;
        }
        #main .product-list img{
            opacity:0.4;
            filter:alpha(opacity=40); /* 针对 IE8 以及更早的版本 */
        }
        #main .product-list img:hover{
            opacity:1.0;
            filter:alpha(opacity=100); /* 针对 IE8 以及更早的版本 */
        }
        </style>
    </head>
    <body>
    
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="__ADMIN_ROOT__">TS管理后台</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>
    <div id="main" class="container">
        <div id="fullpage">
            <div class="section">
            /thinkshop/index.php
            </div>
            <div class="section">
            </div>
        </div>
       </div>
                <footer class="footer">
      <div class="container">
        <p class="text-muted">&copy;2015 cnNewYork.com</p>
      </div>
    </footer>
        <script>
        </script>
    </body>
</html>