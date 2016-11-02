<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Angular trainging">
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
				


        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>			
    <script src="/dist/lib.min.js"></script>
    </head>
</head>
<body>
    
    <div id="mypreloaderbackground" class="">
        <div  class="section_overlay"  >
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
                          <li><a href="/login" >Bejelentkezés</a></li>
                          <li><a href="/register" >Regisztráció</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container- -->
            </nav>
        </div>  
    </div>

    
        @yield('content')
    
    
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
    
      <div id="cookiePolicy" class="container-fluid text-center">
        <div class="row">
        <span class="col-lg-8 col-sm-12 col-xs-12"><b>Ahogy majdnem minden honlappal rendelkező cég, mi is használunk sütiket a weboldalunkon.</b></br><a style="color:white" href="https://support.google.com/chrome/answer/95647?co=GENIE.Platform%3DDesktop&hl=hu">Itt olvashatsz róla bővebben.</a></span>
        <div  class="col-lg-4 col-sm-12 col-xs-12">
        <a id="cookiePolicyButton" class="btn btn-default">Elfogadom</a>
        </div>
        </div> 
    </div>
</body>
</html>
