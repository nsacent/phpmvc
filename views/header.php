<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mpaka Records &mdash; @yield('title')</title>
    <meta name="description" content="Mpaka Records, Lets make endless music">
    <meta name="keywords" content="mpaka, mpaka records,ykee benda, tony trust, uganda, music,
    label, africa,boy so tender, records,ykee,benda,nessim">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">

    <link rel="icon" type="image/png" href="{{url('img/favicon.png')}}">

    <!--MAINLY-->
    <link rel="stylesheet" href="{{url('css/styles-merged.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="{{url('css/custom.css')}}">
    <link rel="stylesheet" href="{{url('css/iziToast.min.css')}}">


    <!--FWAP-->
    <link rel="stylesheet" type="text/css" href="{{url('css/jquery.fullwidthAudioPlayer.css')}}">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"/>

    @yield('css')

    <!--[if lt IE 9]>
    <script src="js/vendor/html5shiv.min.js"></script>
    <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="probootstrap-loader"></div>

<!-- START: header -->
include('includes.header')
<!-- END: header -->
@yield('body')

@include('includes.footer')

<div class="gototop js-top">
    <a href="#" class="js-gotop">
        <i class="icon-chevron-thin-up"></i>
    </a>
</div>

<!--MAINLY-->
<script src="{{url('js/scripts.min.js')}}"></script>
<script src="{{url('js/main.min.js')}}"></script>
<script src="{{url('js/iziToast.min.js')}}"></script>


<!--FWAP-->
<script src="{{url('js/jquery-ui.js')}}" type="text/javascript"></script>
<script src="{{url('js/soundmanager2-nodebug-jsmin.js')}}" type="text/javascript"></script>
<script src="{{url('js/jquery.fullwidthAudioPlayer.min.js')}}" type="text/javascript"></script>
<script src="{{url('js/amplify.min.js')}}" type="text/javascript"></script>

<!--External-->
@yield('js')
<!--CUSTOM-->
<script src="{{url('js/custom.js')}}"></script>

<script>
    var token = '{{ Session::token() }}',
        urlSubscribeNewsletter = "{{route('subscribe')}}";


    $(document).ready(function () {
        iziToast.settings({
            timeout: 3000,
            resetOnHover: true,
            icon: 'material-icons',
            transitionIn: 'flipInX',
            position: 'bottomRight', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            transitionOut: 'flipOutX',
            onOpening: function () {
                console.log('callback abriu!');
            },
            onClosing: function () {
                console.log("callback fechou!");
            }
        });

        $('.btn-subscribe').on('click', function (e) {
            e.preventDefault();
            var email = $('#email-subscribe-newsletter'),
                regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;


            if (email.val()) {
                if (regex.test(email.val())) {
                    $.ajax({
                        method: 'POST',
                        url: urlSubscribeNewsletter,
                        data: {
                            email: email.val(),
                            _token: token
                        }

                    }).done(function (result) {
                        var msg = result['msg'];
                        if (result['code'] === 1) {
                            iziToast.success({
                                title: 'Success',
                                message: msg
                            });
                        }else{

                            iziToast.info({
                                title: 'Info',
                                message: msg
                            });

                        }
                    });

                } else {

                    iziToast.error({
                        title: 'Error',
                        message: 'Please type a valid email address!'
                    });
                }
            }

        });

    });


</script>

</body>
</html>