<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Feltűnt egy furcsa 1000 éves múltra visszatekintő  zöld tea, ami elkezdte meghódítani a világot. Megkóstolod?">
        <meta name="author" content="tamafogt">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimal-ui" />
        

		<link rel="stylesheet" href="/dist/css/app.css">
        
		<meta property="fb:app_id"          content="1234567890" /> 
		<meta property="og:type"            content="article" /> 
		<meta property="og:url"             content="http://teaimadok.hu/" /> 
		<meta property="og:title"           content="TeaImádók" /> 
		<meta property="og:image"           content="http://teaimadok.hu/dist/images/matcha.png" /> 
		<meta property="og:description"    content="Tradídiótól, a világuralom felé." />
        
        <link rel="apple-touch-icon" sizes="57x57" href="/dist/images/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/dist/images/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/dist/images/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/dist/images/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/dist/images/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/dist/images/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/dist/images/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/dist/images/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/dist/images/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/dist/images/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/dist/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/dist/images/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/dist/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="/dist/images/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/dist/images/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        
		    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">	
				
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-WB3N47');</script>
		<!-- End Google Tag Manager -->
		
		<!--smart look -->
		<script type="text/javascript">
				window.smartlook||(function(d) {
				var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
				var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
				c.charset='utf-8';c.src='//rec.smartlook.com/recorder.js';h.appendChild(c);
				})(document);
				smartlook('init', '6a861108b1ad90f413e1776a455ab1bbf0c4878d');
			</script>
			
		<script>
			(function(h,e,a,t,m,p) {
			m=e.createElement(a);m.async=!0;m.src=t;
			p=e.getElementsByTagName(a)[0];p.parentNode.insertBefore(m,p);
			})(window,document,'script','https://u.heatmap.it/log.js');
			</script>	

        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>			
		<base href="/">    
    </head>
    <body ng-app="myapp" >
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WB3N47"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
	
        <div id="mypreloaderbackground" class="">
        <div  class="section_overlay" ng-controller="HeaderController" >
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                            <i class="fa fa-bars fa-2x"></i>
                        </button>
                        <a class="navbar-brand" href="/">
                            
                            <img src="/dist/images/logonew.png" alt="Logo">
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            
                            
                        <li class="navicons hidden-xs" style="display:flex">
                            <a href="" ><i class="fa fa-circle fa-stack-1x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></a>
                            <a href=""><i class="fa fa-circle fa-stack-1x"></i><i class="fa fa-youtube fa-stack-1x fa-inverse"></i></a>
                            <a  href=""><i class="fa fa-circle fa-stack-1x"></i><i class="fa fa-instagram fa-stack-1x fa-inverse"></i></a>
                        </li>                          
                        <li><a href="#"  ui-sref="product({productId: 'matcha'})">Termékhez</a></li>
						  <li><a href="#" style="padding-bottom: 5px;padding-top: 12px;" ui-sref="cart"><i class="fa fa-shopping-cart  fa-2x hidden-xs" aria-hidden="true"></i><span class="visible-xs">Kosár</span><span ng-if="cartCount!==0"  class="hidden-xs">{{cartCount}}</span></a></li>
                           <li class="dropdown men "><a href="" style="padding: 15px;" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user fa-2x"></i><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                        <?php     if (Auth::check()) {   ?>
                                    <li><a  ui-sref="profile">Profil</a></li>
                                    <li><a href="" ng-click="logout()">Kijelentkezés</a></li>
                          <?php  }else{   ?>
                                    <li><a href="" ng-click="login()">Bejelentkezés</a></li>
                                    <li><a href=""  ng-click="register()">Regisztráció</a></li>
                        <?php      }  ?>
                            </ul>
                            </li>  
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container- -->
            </nav>
        </div>  
            
		<ui-view></ui-view>
    <section class="subscribe parallax subscribe-parallax" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
        <div class="section_overlay wow lightSpeedIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">

                        <!-- Start Subscribe Section Title -->
                        <div class="section_title">
                            <h2>Kérdésed van?</h2>
                            <p>Írj bátran, minden kérdésre örömmel válaszolunk.</p>
                        </div>
                        <!-- End Subscribe Section Title -->
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <!-- SUBSCRIPTION SUCCESSFUL OR ERROR MESSAGES -->
                        <div class="subscription-success"></div>
                        <div class="subscription-error"></div>


                        <form class="subscribe_form" novalidate>
                            <div class="form-group">
                                <input type="text" class="required form-control"  name="name" id="name"  placeholder="Név" required/>
                            </div>
                            <div class="form-group">
                                <!-- EMAIL INPUT BOX -->
                                <input type="email" value="" name="EMAIL" class="required email form-control"  placeholder="Írd be az Email címed" required>
                            </div>
                            <div class="input-field ">
                                <textarea name="message" class="form-control" rows="10" cols="10" id="message"   placeholder="Üzenet" required></textarea>
                            </div>
                                <!-- SUBSCRIBE BUTTON -->
                            <button id="submit"  class="btn">Elküld</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- =========================
     FOOTER 
============================== -->

    <section class="copyright">
        <h2></h2>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="copy_right_text">
                    <!-- COPYRIGHT TEXT -->
                        <p>Copyright TeaImadok.hu 2016.</p> 
                        <p>Minden jog fent tartva.</p>  
                        <a href="/aszf">ÁSZF</a>
                    <!--<a href="">Adatvédelem</a> -->
                        <a href="https://webgate.ec.europa.eu/odr/main/index.cfm?event=main.home.chooseLanguage">Online vitarendezés</a>
                    </div>

                </div>
                <div class="col-md-6">
                    <h1>Kövess minket</h1>
                    <ul class="list-inline lead">
                        <li><a href=""><span class="fa-stack"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></a></li>
                        <li><a href=""><span class="fa-stack"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-youtube fa-stack-1x fa-inverse"></i></span></a></li>
                        <li><a href=""><span class="fa-stack"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-instagram fa-stack-1x fa-inverse"></i></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
        </div>
        <div id="preloader" class="preloader-wrapper big active mypreloader mypreloaderNone">
              <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                  <div class="circle" style="border-width: 10px;"></div>
                </div><div class="gap-patch">
                  <div class="circle" style="border-width: 10px;"></div>
                </div><div class="circle-clipper right">
                  <div class="circle" style="border-width: 10px;"></div>
                </div>
              </div>
        </div>    
        
      <div id="cookiePolicy" class="container-fluid text-center">
        <div class="row">
        <span class="col-lg-8 col-sm-12 col-xs-12"><b>Ahogy majdnem minden honlappal rendelkező cég, mi is használunk sütiket a weboldalunkon.</b></br><a style="color:white" href="https://support.google.com/chrome/answer/95647?co=GENIE.Platform%3DDesktop&hl=hu">Itt olvashatsz róla bővebben.</a></span>
        <div  class="col-lg-4 col-sm-12 col-xs-12">
        <a id="cookiePolicyButton" class="btn btn-default">Elfogadom</a>
        </div>
    </div>  
        <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-75676609-3', 'auto');
		  ga('send', 'pageview');

		</script>
        
            		<script src="/dist/lib.min.js"></script>
        <script src="/dist/lib/angularlib.min.js"></script> 
                <script src="dist/app.min.js"></script>    


    
    </body>
</html>
