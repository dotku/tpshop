<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo ((isset($web_title ) && ($web_title !== ""))?($web_title ):"ThinkShop v0.0.1"); ?></title>
        
        <link rel="stylesheet" href="/cnnewyork.com_bk/thinkshop/Public/lib/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/cnnewyork.com_bk/thinkshop/Public/lib/bootstrap/dist/css/carousel.css">
        <link rel="stylesheet" href="/cnnewyork.com_bk/thinkshop/Public/lib/bootstrap/dist/css/sticky-footer.css">
        <link rel="stylesheet" href="/cnnewyork.com_bk/thinkshop/Public/css/bootstrap-patch.css">
        <link rel="stylesheet" href="/cnnewyork.com_bk/thinkshop/Public/lib/fullpage.js/jquery.fullPage.css">
        <link rel="stylesheet" href="/cnnewyork.com_bk/thinkshop/Public/lib/bootstrap-modal-carousel/dist/css/bootstrap-modal-carousel.min.css">
        
        
        <script src="/cnnewyork.com_bk/thinkshop/Public/lib/jquery/dist/jquery.min.js"></script>
        <script src="/cnnewyork.com_bk/thinkshop/Public/lib/bootstrap/dist/js/bootstrap.js"></script>
        <script src="/cnnewyork.com_bk/thinkshop/Public/lib/fullpage.js/jquery.fullPage.min.js"></script>
        <script src="/cnnewyork.com_bk/thinkshop/Public/lib/bootstrap-modal-carousel/dist/js/bootstrap-modal-carousel.min.js"></script>
        
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
        #main {
            /*margin-top: 80px;*/
        }
        #main .product-list img{
            opacity:0.4;
            filter:alpha(opacity=40); /* 针对 IE8 以及更早的版本 */
        }
        #main .product-list img:hover{
            opacity:1.0;
            filter:alpha(opacity=100); /* 针对 IE8 以及更早的版本 */
        }
        .modal-open .navbar-fixed-top,
        .modal-open .navbar-fixed-bottom,
        #modal-shipping{
        padding-right: 0px!important;
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
              <a class="navbar-brand" href="#"><?php echo ((isset($web_title ) && ($web_title !== ""))?($web_title ):"ThinkShop"); ?></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                          
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#">首页</a></li>
                <li><a href="#" data-toggle="modal" data-target="#modal-shipping">订单查询</a></li>
                <li><a href="#" data-toggle="modal" data-target="#modal-signup">注册登记</a></li>
                <li><a href="/cnnewyork.com_bk/thinkshop/help">帮助</a></li>
              </ul>
                <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="搜索..." title="请输入您要查找的 产品名称 或 订单号">
              </form>
            </div>
            
          </div>
        </nav>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img class="first-slide" src="/cnnewyork.com_bk/thinkshop/Public/upload/1/CaIcp_500.jpg" alt="First slide">
                  <div class="container">
                    <div class="carousel-caption">
                      <h1>NB纽巴伦新百伦</h1>
                      <p>MRT580GR猪巴革 英国绿36--44</p>
                      <!--p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p-->
                    </div>
                  </div>
                </div>
                <div class="item">
                  <img class="second-slide" src="/cnnewyork.com_bk/thinkshop/Public/upload/17/7MEIZV_500.jpg" alt="Second slide">
                  <div class="container">
                    <div class="carousel-caption">
                      <h1>NIKE Top RUNNING</h1>
                      <p>顶级跑鞋 外景图 (除了薄荷绿和粉黄36-39其余都是36-44)</p>
                      <!--p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p-->
                    </div>
                  </div>
                </div>
                <div class="item">
                  <img class="third-slide" src="/cnnewyork.com_bk/thinkshop/Public/upload/22/5NVU2G_500.jpg" alt="Third slide">
                  <div class="container">
                    <div class="carousel-caption">
                      <h1>adidas 阿迪达斯 </h1>
                      <p>户外 男子 boost 山地越野鞋</p>
                      <!--p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p-->
                    </div>
                  </div>
                </div>
              </div>
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>


        <div id="main" class="container">

            <div class="text-center product-list">
            <?php  for ($i = 0; $i < 100; $i++) { echo '<a href="/cnnewyork.com_bk/thinkshop/product/'.$i.'"><img src="./Public/upload/square('.$i.').jpg"></a>'; } ?>
            </div>
            <div class="modal-container">
    <div class="modal fade" id="modal-shipping" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">
            <p>One fine body&hellip;</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
            <div class="modal-container">
    <div class="modal fade" id="modal-signup" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">
            <p>One fine body&hellip;</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
        </div>
                <footer class="footer">
      <div class="container">
        <p class="text-muted">&copy;2015 cnNewYork.com</p>
      </div>
    </footer>
        <script>
            $("[data-toggle=modal]").bind("click", function(){
                //window.console ? console.log("click") : '';
                //$("#main").css("width", $(window).width());
                //$("#myCarousel").css("width", $(window).width());
            })
            	  Modal.prototype.setScrollbar = function () {
                    var bodyPad = parseInt((this.$body.css('padding-right') || 0), 10)
                    this.originalBodyPad = document.body.style.paddingRight || ''
                    // <!--
                    //if (this.bodyIsOverflowing) this.$body.css('padding-right', bodyPad + this.scrollbarWidth)
                    // -->
                  }

                  Modal.prototype.resetScrollbar = function () {
                    // <!--
                    //this.$body.css('padding-right', this.originalBodyPad)
                    // -->
                  }
        </script>
    </body>
</html>