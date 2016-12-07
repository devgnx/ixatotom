<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Highlander Bros.">

    <title>2 IRMÃOS SNOOKER BAR</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="css/main.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Marck+Script|Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#home"  onclick = $("#menu-close").click(); > 2 IRMÃOS</a>
            </li>
            <li>
                <a href="#home" onclick = $("#menu-close").click(); >Home</a>
            </li>
            <li>
                <a href="#sobre" onclick = $("#menu-close").click(); >Sobre</a>
            </li>
            <li>
                <a href="#servicos" onclick = $("#menu-close").click(); >Serviços</a>
            </li>
            <li>
                <a href="#contato" onclick = $("#menu-close").click(); >Contato</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="home" class="header">
        <div class="text-vertical-center">
            <h2 class="header-subtitle">SNOOKER BAR</h2>
            <h1 class="header-title">2 Irmãos</h1>
            <h2 class="header-subtitle">Bar e petiscaria</h2>
            <!-- <h3> &amp; Templates</h3> -->
            <br>
            <a href="#servicos" class="btn btn-dark btn-lg">Serviços</a>
        </div>
    </header>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="servicos" class="services bg-blue">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Serviços</h2>
                    <hr class="small">
                    <div class="row">
                        @foreach($services as $key => $service)
                          <div class="col-md-4 col-sm-6">
                            <div class="service-item">
                              <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa {{ $service->icon or null }} fa-stack-1x"></i>
                              </span>
                              <h4>
                                <strong>{{ $service->name or null }}</strong>
                              </h4>
                              <p>{{ $service->description or null }}</p>
                            </div>
                          </div>
                        @endforeach
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- About -->
    <section id="sobre" class="about bg-brown">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>{{ $about->title or null }}</h2>
                    <p class="lead">{{ $about->description or null }}</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Map -->
    <section id="mapa" class="map bg-blue">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.9618549088686!2d-51.91311068534087!3d-23.425745062482495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDI1JzMyLjciUyA1McKwNTQnMzkuMyJX!5e0!3m2!1spt-BR!2sbr!4v1467844789854" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

    <!-- Callout -->
    <aside class="callout">
        <div class="text-vertical-center">
        </div>
    </aside>

    <!-- Footer -->
    <footer id="contato" class="bg-brown contact-form">
        <div class="container">
            <form class="front" action="{{ route('contact:send') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Rogério Dantas">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email"type="email" class="form-control" id="email" placeholder="petergriffin1945@exemlo.com.br">
                </div>
                <div class="form-group">
                    <label for="message">Mensagem</label>
                    <textarea name="message" id="message" class="form-control" placeholder="Envie sua mensagem"></textarea>
                </div>
                <div class="container">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-default pull-right">Enviar</button>
                    </div>
                </div>
            </form>
            <div class="row" class="back" style="margin-top: -50px;">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Mototáxi Maringá</strong>
                    </h4>
                    <p>{{ $contact->address or null }}<br>{{ $contact->city or null }}, {{ $contact->site or null }} {{ $contact->postal_code or null }}</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> {{ $contact->telephone or null }}</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:{{ $contact->email or null }}">{{ $contact->email or null }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });

    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if( $(this).scrollTop() > 250 ) {
            if( !fixed ) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show( "slow", function() {
                    $('#to-top').css({position:'fixed', display:'block'});
                });
            }
        } else {
            if( fixed ) {
                fixed = false;
                $('#to-top').hide( "slow", function() {
                    $('#to-top').css({display:'none'});
                });
            }
        }
    });
    </script>

</body>

</html>
