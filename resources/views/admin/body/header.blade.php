@php
$id = Auth::user()->id;
$user = App\Models\User::find($id);
$systemData = App\Models\System::all();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    @foreach($systemData as $system)
    <link rel="icon" type="image/png" sizes="16x16" href="{{(!empty($system->logo))? url('upload/system_image/'.$system->logo):url('upload/no_image.jpg')}}">
    <title>{{$system->title}}</title>
    <link href="{{asset('plugins/bower_components/jqueryui/jquery-ui.min.css')}}" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('backend/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/bower_components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/bower_components/lobipanel/dist/css/lobipanel.min.css')}}" rel="stylesheet">

    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <!-- Menu CSS -->
    <link href="{{asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/bower_components/calendar/dist/fullcalendar.css')}}" rel="stylesheet" />

    <!--alerts CSS -->
    <link href="{{asset('plugins/bower_components/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css">
    <link href="../plugins/bower_components/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{asset('backend/css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
     <!--alerts CSS -->
     <link href="{{asset('plugins/bower_components/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css">

    <!-- color CSS -->
    <!-- <link href="{{asset('backend/css/colors/megna.css')}}" id="theme" rel="stylesheet"> -->


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
    body .panel{
        background-image: linear-gradient(to bottom, rgba(255,0,0,0), <?php echo $system->body_color ?>);
        border-radius: 15px;
    }
    .panel .panel-heading{
        border-radius: 10px 10px 5px 5px;
    }
    .white-box{
        border-radius: 15px;
    }
    .sidebar{
        width: auto;
        background-image: linear-gradient(to bottom, rgba(255,0,0,0), <?php echo $system->theme ?>);
    }
    .sidebar ul li a{
        color:white;
    }
    nav .navbar-header{
        background: <?php echo $system->theme ?>;
    }
    nav .navbar-header .top-left-part{
        background: <?php echo $system->theme ?>;
    }
    .container .row .panel-heading{
        background: <?php echo $system->theme ?>;
    }
    body .page-title{
        color:black;
    }
    .white-box:hover{
        border-radius: 50px 5px;
        background-image: linear-gradient(to bottom right, antiquewhite,rgba(144, 222, 224, 0.705));
    }
</style>
@endforeach

<script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-19175540-9', 'auto');
        ga('send', 'pageview');
    </script>
</head>

<body class="fix-sidebar body">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
