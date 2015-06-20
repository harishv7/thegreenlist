<!DOCTYPE html>
<html>
    <?php
include 'includes/header.php';
    ?>

    <body>
        <?php
include 'includes/customnavbar2.php';
        ?>
        <br>
<div class="container">
<br>
        <div class="row">
            <h1 class="text-center">Donation Gallery</h1>
            <div class="col-md-3">
                <p class="lead">The Greenlist</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Electronics</a>
                    <a href="#" class="list-group-item">Furniture</a>
                    <a href="#" class="list-group-item">Other Items</a>
                </div>
            </div>
            <br>
            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="http://www.w3.org/Consortium/Offices/Presentations/Mobile_Overview/Photos/SVG_Mobile.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="https://zonait.tv/file/2015/04/Nokia-Phones.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://www.abba.com.py/imagens/produto/304b41b7aba0fd904dfd37809957bb1b4d01191f1e237.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://2i.c-b.co/is/image/CB2/PiazzaVlvtSofaStormF11g" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
<hr>
                <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="https://okl.scene7.com/is/image/OKL/vmf_vendor_TIO_2825989_1407882422200_651064?$" alt="">
                            <div class="caption">
                                <h4 class="pull-right"></h4>
                                <h4><a href="#">Used Sofa</a>
                                </h4>
                                <p>Used sofa, still in good condition. Anyone who needs it can come and pick it up.</p>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://s29.postimg.org/ihdxsacpj/acrilico_transparente_consola_sony_psp_slim_2000.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right"></h4>
                                <h4><a href="#">PSP (2nd Gen)</a>
                                </h4>
                                <p>PSP, second gen. In working condition, small scratches at the back. </p><br>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://dedicomp.com/images/Laptop-Second.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right"></h4>
                                <h4><a href="#">Asus Laptop</a>
                                </h4>
                                <p>Previous generation laptop but still in working condition. If you have a good use for it, please come and pick it up.</p>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://1.bp.blogspot.com/_AXDImilZgZc/RqNS_bfCTPI/AAAAAAAAA0M/M1b0iuss5o8/s320/HP+Covers.bmp" alt="">
                            <div class="caption">
                                
                                <h4><a href="#">Harry Potter Book Set</a>
                                </h4>
                                <p>All books in good readable condition. Some pages are slightly torn.</p>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://4.bp.blogspot.com/-AQtI9aqTA9o/UJsWv-_hMoI/AAAAAAAAP7s/zmD8e9T1Ta0/s320/53+inch+wide+claro+walnut+table.jpg" alt="">
                            <div class="caption">
                                
                                <h4><a href="#">Coffee Table Set</a>
                                </h4>
                                <p>Solid wood coffee table set. Free for pick up. Call before coming to pick up.</p>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Want to claim an item?</a>
                        </h4>
                        <p>If you like any of the items, just click to accept the item. Pick up time will be sent via SMS and email. Remember to pay it forward and allow others to reuse your items too.</p>
                        <a class="btn btn-primary" href="/TheGreenlist/addNew.php">Donate your items</a>
                    </div>

                </div>

            </div>

        </div>

    </div>

    </body>
    <?php
include 'includes/footer.php';
    ?>

</html>