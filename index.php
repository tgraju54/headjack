<?php

include 'header.php';
include 'firf.php';
?>








<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
</head>
<body>
<div class="holdc">
<div class="container">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="1.jpg" alt="Chania" width="460" height="345">
       
      </div>

      <div class="item">
        <img src="2.png" alt="Chania" width="460" height="345">
       
      </div>
    
      <div class="item">
        <img src="3.jpg" alt="Flower" width="460" height="345">
        
      </div>

      <div class="item">
        <img src="4.jpg" alt="Flower" width="460" height="345">
        
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
</body>
</html>
<center>
<br><BR><br><br><BR><br>
<div class="holdb">
<ul class="nav nav-pills" id="ppils">
  <li class="active"><a href="#">Featured  Deals</a></li>
  <li><a href="allpro.php">All Products </a></li>
  <li><a href="fea.php">Best Deals</a></li>
  <li><a href="http://www.rtgstudios.in/forum/headjack">Blog</a></li>
</ul><br><BR></center><center>
</div><br><BR>
<style>

@import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);
.col-item
{
    border: 1px solid #E1E1E1;
    border-radius: 5px;
    background: #FFF;
}
.col-item .photo img
{
    margin: 0 auto;
    width: 100%;
}

.col-item .info
{
    padding: 10px;
    border-radius: 0 0 5px 5px;
    margin-top: 1px;
}

.col-item:hover .info {
    background-color: #F5F5DC;
}
.col-item .price
{
    /*width: 50%;*/
    float: left;
    margin-top: 5px;
}

.col-item .price h5
{
    line-height: 20px;
    margin: 0;
}

.price-text-color
{
    color: #219FD1;
}

.col-item .info .rating
{
    color: #777;
}

.col-item .rating
{
    /*width: 50%;*/
    float: left;
    font-size: 17px;
    text-align: right;
    line-height: 52px;
    margin-bottom: 10px;
    height: 52px;
}

.col-item .separator
{
    border-top: 1px solid #E1E1E1;
}

.clear-left
{
    clear: left;
}

.col-item .separator p
{
    line-height: 20px;
    margin-bottom: 0;
    margin-top: 10px;
    text-align: center;
}

.col-item .separator p i
{
    margin-right: 5px;
}
.col-item .btn-add
{
    width: 50%;
    float: left;
}

.col-item .btn-add
{
    border-right: 1px solid #E1E1E1;
}

.col-item .btn-details
{
    width: 50%;
    float: left;
    padding-left: 10px;
}
.controls
{
    margin-top: 20px;
}
[data-slide="prev"]
{
    margin-right: 10px;
}
</style>
<br><BR>



<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-9">
                
            </div>
            <div class="col-md-3">
                <!-- Controls -->
                <div class="controls pull-right hidden-xs">
                    <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example"
                            data-slide="next"></a>
                </div>
            </div>
        </div>
        <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src=<?php echo getPic($arr[0]);?>   height="200" width="250"  alt=<?php echo getName($arr[0]);?> />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-8">
                                            <h5>
                                                <?php echo getName($arr[0]);?></h5>
                                            <h5 class="price-text-color">
                                                Rs <?php echo getNprice($arr[0]);?> </h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="login/acart.php?pid=<?php echo $arr[0];?>" class="hidden-sm">Buy Now</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="login/pcatlog.php?pid=<?php echo $arr[0];?>" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                     <img src=<?php echo getPic($arr[1]);?>  height="200" width="250" alt=<?php echo getName($arr[1]);?> />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-8">
                                            <h5>
                                                <?php echo getName($arr[1]);?></h5>
                                            <h5 class="price-text-color">
                                                Rs <?php echo getNprice($arr[1]);?> </h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                       <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="login/acart.php?pid=<?php echo $arr[1];?>" class="hidden-sm">Buy Now</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="login/pcatlog.php?pid=<?php echo $arr[1];?>" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                   <img src=<?php echo getPic($arr[2]);?>  height="200" width="250" alt=<?php echo getName($arr[2]);?> />
								   
                                </div>
                                <div class="info">
                                    <div class="row">
                                         <div class="price col-md-8">
                                            <h5>
                                                <?php echo getName($arr[2]);?></h5>
                                            <h5 class="price-text-color">
                                                Rs <?php echo getNprice($arr[2]);?> </h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="login/acart.php?pid=<?php echo $arr[2];?>" class="hidden-sm">Buy Now</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="login/pcatlog.php?pid=<?php echo $arr[2];?>" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src=<?php echo getPic($arr[3]);?>  height="200" width="250" alt=<?php echo getName($arr[3]);?> />
                                </div>
                                <div class="info">
                                    <div class="row">
                                         <div class="price col-md-8">
                                            <h5>
                                                <?php echo getName($arr[3]);?></h5>
                                            <h5 class="price-text-color">
                                                Rs <?php echo getNprice($arr[3]);?> </h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="login/acart.php?pid=<?php echo $arr[3];?>" class="hidden-sm">Buy Now</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="login/pcatlog.php?pid=<?php echo $arr[3];?>" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                   <img src=<?php echo getPic($arr[4]);?>  height="200" width="250" alt=<?php echo getName($arr[4]);?> />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-8">
                                            <h5>
                                                <?php echo getName($arr[4]);?></h5>
                                            <h5 class="price-text-color">
                                                Rs <?php echo getNprice($arr[4]);?> </h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="login/acart.php?pid=<?php echo $arr[4];?>" class="hidden-sm">Buy Now</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="login/pcatlog.php?pid=<?php echo $arr[4];?>" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                   <img src=<?php echo getPic($arr[5]);?>  height="200" width="250" alt=<?php echo getName($arr[5]);?> />
                                </div>
                                <div class="info">
                                    <div class="row">
                                         <div class="price col-md-8">
                                            <h5>
                                                <?php echo getName($arr[5]);?></h5>
                                            <h5 class="price-text-color">
                                                Rs <?php echo getNprice($arr[5]);?> </h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="login/acart.php?pid=<?php echo $arr[5];?>" class="hidden-sm">Buy Now</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="login/pcatlog.php?pid=<?php echo $arr[5];?>" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                   <img src=<?php echo getPic($arr[6]);?>  height="200" width="250" alt=<?php echo getName($arr[6]);?> />
                                </div>
                                <div class="info">
                                    <div class="row">
                                         <div class="price col-md-8">
                                            <h5>
                                                <?php echo getName($arr[6]);?></h5>
                                            <h5 class="price-text-color">
                                                Rs <?php echo getNprice($arr[6]);?> </h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                       <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="login/acart.php?pid=<?php echo $arr[6];?>" class="hidden-sm">Buy Now</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="login/pcatlog.php?pid=<?php echo $arr[6];?>" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                   <img src=<?php echo getPic($arr[7]);?>  height="200" width="250" alt=<?php echo getName($arr[7]);?> />
                                </div>
                                <div class="info">
                                    <div class="row">
                                         <div class="price col-md-8">
                                            <h5>
                                                <?php echo getName($arr[7]);?></h5>
                                            <h5 class="price-text-color">
                                                Rs <?php echo getNprice($arr[7]);?> </h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="login/acart.php?pid=<?php echo $arr[7];?>" class="hidden-sm">Buy Now</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="login/pcatlog.php?pid=<?php echo $arr[7];?>" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="row">
            <div class="col-md-9">
                <h3>
                  Our Product Series</h3>
            </div>
            <div class="col-md-3">
                <!-- Controls -->
                <div class="controls pull-right hidden-xs">
                    <a class="left fa fa-chevron-left btn btn-primary" href="#carousel-example-generic"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-primary" href="#carousel-example-generic"
                            data-slide="next"></a>
                </div>
            </div>
        </div>
        <div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src=<?php echo getPic($arrs[0]);?>  height="200" width="250" alt=<?php echo getName($arrs[0]);?> />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-8">
                                             <h5>
                                                <?php echo getName($arrs[0]);?></h5>
                                            <h5 class="price-text-color">
                                                Rs <?php echo getNprice($arrs[0]);?> </h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="login/acart.php?pid=<?php echo $arrs[0];?>" class="hidden-sm">Buy Now</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="login/pcatlog.php?pid=<?php echo $arrs[0];?>" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                   <img src=<?php echo getPic($arrs[1]);?>  height="200" width="100" alt=<?php echo getName($arrs[1]);?> />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-8">
                                            <h5>
                                                <?php echo getName($arrs[1]);?></h5>
                                            <h5 class="price-text-color">
                                                Rs <?php echo getNprice($arrs[1]);?> </h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="login/acart.php?pid=<?php echo $arrs[1];?>" class="hidden-sm">Buy Now</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="login/pcatlog.php?pid=<?php echo $arrs[1];?>" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
             <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                   <img src=<?php echo getPic($arrs[2]);?>  height="200" width="250" alt=<?php echo getName($arrs[2]);?> />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-8">
                                            <h5>
                                                <?php echo getName($arrs[2]);?></h5>
                                            <h5 class="price-text-color">
                                                Rs <?php echo getNprice($arrs[2]);?> </h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="login/acart.php?pid=<?php echo $arrs[2];?>" class="hidden-sm">Buy Now</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="login/pcatlog.php?pid=<?php echo $arrs[2];?>" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                       <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                   <img src=<?php echo getPic($arrs[3]);?>  height="200" width="250" alt=<?php echo getName($arrs[3]);?> />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-8">
                                            <h5>
                                                <?php echo getName($arrs[3]);?></h5>
                                            <h5 class="price-text-color">
                                                Rs <?php echo getNprice($arrs[3]);?> </h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="login/acart.php?pid=<?php echo $arrs[3];?>" class="hidden-sm">Buy Now</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="login/pcatlog.php?pid=<?php echo $arrs[3];?>" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                   <img src=<?php echo getPic($arrs[4]);?>  height="200" width="250" alt=<?php echo getName($arrs[4]);?> />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-8">
                                            <h5>
                                                <?php echo getName($arrs[4]);?></h5>
                                            <h5 class="price-text-color">
                                                Rs <?php echo getNprice($arrs[4]);?> </h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="login/acart.php?pid=<?php echo $arrs[4];?>" class="hidden-sm">Buy Now</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="login/pcatlog.php?pid=<?php echo $arrs[4];?>" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                       <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                   <img src=<?php echo getPic($arrs[5]);?>  height="200" width="250" alt=<?php echo getName($arrs[5]);?> />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-8">
                                            <h5>
                                                <?php echo getName($arrs[5]);?></h5>
                                            <h5 class="price-text-color">
                                                Rs <?php echo getNprice($arrs[5]);?> </h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="login/acart.php?pid=<?php echo $arrs[5];?>" class="hidden-sm">Buy Now</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="login/pcatlog.php?pid=<?php echo $arrs[5];?>" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><BR>






<?php

include 'footer.php';
?>
























