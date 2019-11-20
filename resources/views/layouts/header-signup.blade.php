<!doctype html>
<html lang="{{ app()->getLocale() }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>{{ config('app.name', 'Mogul Body') }}</title>
      <!-- Fonts -->
      <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
      <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/all.css') }}">
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}">
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/popper.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
   </head>
   <div class="main-wrapper quiz-page">
      <div class="navigation-sec-wrappper">
         <header class="main-header">
            <div class="container">
               <nav class="navbar navbar-expand-md">
                  <a class="navbar-brand" href="/"><img src="/images/red-logo.png"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('physicianSignup') }}">PHYSICIANS</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">CONTACTS US</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="/login">Login</a>
                        </li>
                        <li class="nav-item bg-reD">
                           <a class="nav-link" href="/register">Join</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
      </div>
      @yield('content')
      <div class="main-footer">
         <div class="container">
            <div class="main-footer-inner">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                     <div class="footer-logo">
                        <img src="/images/fotter-logo.png">
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-4 col-sm-12">
                     <div class="footer-copyright">
                        <p>© 2019 MOGULBODY LLC Privacy Policy Terms and Conditions Contact Us</p>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                     <div class="footer-social-icons">
                        <span><i class="fab fa-instagram"></i></span>
                        <span><i class="fab fa-facebook-f"></i></span>
                        <span><i class="fab fa-twitter"></i></span>
                        <span><i class="fab fa-linkedin-in"></i></span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </footer>
   </div>
   <!-- The Modal -->
   <div class="modal fade" id="mogul-body-popup">
      <div class="modal-dialog modal-dialog-centered modal-lg">
         <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
               Modal body..
            </div>
         </div>
      </div>
   </div>
  <script>
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        //>=, not <=
        if (scroll >= 100) {
            //clearHeader, not clearheader - caps H
            $("header.main-header").addClass("header-acive");
        } else {
            $("header.main-header").removeClass("header-acive");
        }
    }); //missing );
$('.quiz-arrows a.carousel-control-prev').click(function() {
    $(".carousel-control-next").show();
    $(this).addClass('arrow-active');
    $('.quiz-arrows a.carousel-control-next').removeClass('arrow-active');
    setTimeout(function() {
        if ($(".carousel-item.active").attr("data-id") == "1") {
            $(".carousel-control-prev").hide();
        }
        if ($(".carousel-item.active").attr("data-id") == "8") {
            $(".carousel-control-next").hide();
        }

    }, 1000);
});
$('.quiz-arrows a.carousel-control-next').click(function() {

    $(".carousel-control-prev").show();
    $(this).addClass('arrow-active');
    $('.quiz-arrows a.carousel-control-prev').removeClass('arrow-active');

    setTimeout(function() {

        if ($(".carousel-item.active").attr("data-id") == "1") {
            $(".carousel-control-prev").hide();
        }
        if ($(".carousel-item.active").attr("data-id") == "8") {
            $(".carousel-control-next").hide();
        }

    }, 1000);
});
$('#quiZ').carousel({
    interval: false
});


$(document).ready(function() {

    $(".carousel-control-prev").hide();
    $(".select-radio>input").change(function() {
        var $this = $(this);
        var td = $this.parent().parent().parent();
        td.siblings().filter(function() {
            return !!$(this).find('input[name="' + $this.attr('name') + '"]:radio').length;
        }).removeClass('selection-activated');
        if (this.checked) {
            td.addClass('selection-activated');
        }
    });
    $('.quiz-content-indicators ul.carousel-indicators li').click(function() {
        $(this).addClass('active-show');
        $(this).prevAll().addClass('active-show');
        $(this).nextAll().removeClass('active-show');
    });
    $('.quiz-arrows>a.carousel-control-prev').click(function() {
        $('.quiz-content-indicators ul.carousel-indicators li.active-show.active').removeClass('active-show');
        $('.quiz-content-indicators ul.carousel-indicators li.active-show.active').nextAll().removeClass('active-show');
    });
    $('.quiz-arrows>a.carousel-control-next').click(function() {
        $('.quiz-content-indicators ul.carousel-indicators li.active').addClass('active-show');
        $('.quiz-content-indicators ul.carousel-indicators li.active').prevAll().addClass('active-show');
    });
});

</script>
   </body>
</html>