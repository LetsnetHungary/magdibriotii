<main>


    <div class = "hatter">
        <!-- <img src="../../assets/images/hatter.jpg" alt="slider1"> -->
    </div>

    <!-- banner -->
    <div class="w3_banner">
        <div class="slider_container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

    <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
            <img class="slider_picture" src="../../assets/images/slider1.jpg" alt="Los Angeles">
            </div>

            <div class="item">
            <img class="slider_picture" src="../../assets/images/slider2.jpg" alt="Chicago">
            </div>

            <div class="item">
            <img class="slider_picture" src="../../assets/images/slider3.jpg" alt="New York">
            </div>
        </div>

    <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
            </div>



        </div>
    </div>



    <!-- Rólunk -->
    <div class="about_agileinfo" id="about">
    <div class="container">
        <h3 class="title black">Rólunk</h3>
        <div class="about_main">
            <div class="col-md-6 col-sm-6 col-xs-12 about_agileits"></div>
            <div class="col-md-6 col-sm-6 col-xs-12 about_text_w3l">
                <h4>MAGDIBRIOTII</h4>
                <p class="black">
                    Üzletünk 1982 óta üzemel Budapest egyik legforgalmasabb csomópontjánál. Évente emberek ezreinek készítjük el álmai kollekcióját. <br> <br> Válogasson online már több mint száz termékünk közül! <br> Legyen szó alkalmi, szezonális, menyasszonyi csokorról mi elkészítjük önnek. <br> <br> Amennyiben egyedi igénye van kérjük írjon nekünk a weboldalon / emailben, egy napon belül felvesszük önnel a kapcsolatot!
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    </div>

    <!-- Galéria -->
    <div class="gallery_wthree" id="gallery">
    <div class="container">
        <h3 class="title">galéria</h3> <!-- Galéria felirat -->
        <div class="gallery_grid agileits_w3layouts"> <!-- Képek konténer -->
            <div class="col-md-6  col-sm-6 col-xs-12 grid_w3"> <!-- Baloldali tömb -->
                <div class="grid-1"> <!-- Bal-felső kép -->
                    <a class="cm-overlay" >
                        <img src="../../assets/images/csokor2.JPG" alt=" " class="img-responsive" />
                    </a>
                </div>
                <div class="sub_grid gallery_w3l"> <!-- Bal-alsó képek -->
                    <div class="col-md-6 col-sm-6 col-xs-12 grid-1 grid-c grid_w3l"> <!-- Bal-alsó-bal képek -->
                            <a class="cm-overlay" href="https://p.w3layouts.com/demos_new/template_demo/20-04-2017/candid-demo_Free/746449518/web/images/14.jpg">
                                <img src="../../assets/images/csokor7.jpg" alt=" " class="img-responsive" />
                            </a>
                        </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 grid-1 grid-b grid_w3l"> <!-- Bal-alsó-jobb képek -->
                            <a class="cm-overlay" href="https://p.w3layouts.com/demos_new/template_demo/20-04-2017/candid-demo_Free/746449518/web/images/13.jpg">
                                <img src="../../assets/images/csokor5.jpg" alt=" " class="img-responsive" />
                            </a>
                        </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 grid_w3"> <!-- Jobboldali tömb -->
            <div class="sub_grid"> <!-- Jobb felső képek -->
                <div class="col-md-6 col-sm-6 col-xs-12 grid-1 grid-c grid_w3l">
                        <a class="cm-overlay" href="https://p.w3layouts.com/demos_new/template_demo/20-04-2017/candid-demo_Free/746449518/web/images/15.jpg">
                            <img src="../../assets/images/csokor6.jpg" alt=" " class="img-responsive" />
                        </a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 grid-1 grid-d grid_w3l">
                        <a class="cm-overlay" href="https://p.w3layouts.com/demos_new/template_demo/20-04-2017/candid-demo_Free/746449518/web/images/16.jpg">
                            <img src="../../assets/images/csokor1.jpg" alt=" " class="img-responsive" />
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="grid-1 grid-2"> <!-- Jobb alsó kép -->
                    <a class="cm-overlay" href="https://p.w3layouts.com/demos_new/template_demo/20-04-2017/candid-demo_Free/746449518/web/images/7.jpg">
                        <img src="../../assets/images/csokor3.JPG" alt=" " class="img-responsive" />
                    </a>
                </div>
            <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    </div>

    


    <!-- Gallery-plugin -->
    <script src="js/jquery.mobile.custom.min.js"></script>
    <script src="js/jquery.cm-overlay.js"></script>
            <script>
                $(document).ready(function(){
                    $('.cm-overlay').cmOverlay();
                });
            </script>
    <!-- //Gallery-plugin -->
    <!-- start-smooth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){
                    event.preventDefault();

            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
            };
            */
            $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

</main>