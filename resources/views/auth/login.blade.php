@php
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
<!-- Bootstrap Core CSS -->
<link href="{{asset('backend/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css')}}" rel="stylesheet">
<!-- animation CSS -->
<link href="{{asset('backend/css/animate.css')}}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{asset('backend/css/style.css')}}" rel="stylesheet">
<!-- color CSS -->
<link href="{{asset('backend/css/colors/megna.css')}}" id="theme"  rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
  .login-sidebar .white-box{
    background-image: linear-gradient(to bottom, rgba(255,0,0,0), <?php echo $system->theme ?>);
  }
  .login-box{
    background: <?php echo $system->theme ?>;
  }

</style>
</head>
<body>
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="login-register">
  <div class="login-box login-sidebar">
    <div class="white-box">
    <form method="POST" action="{{ route('login') }}">
            @csrf
        <a href="javascript:void(0)" class="text-center db">
          <img src="{{(!empty($system->logo))? url('upload/system_image/'.$system->logo):url('upload/no_image.jpg')}}" height="150px" alt="Home" />
          <br>
          <h4><strong>{{$system->name}}</strong></h4>
        </a>  
        
        <div class="form-group m-t-40">
          <div class="col-xs-12">
            <input class="form-control" type="email" name="email" id="email" required="" placeholder="Email">
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-12">
            <input class="form-control" type="password" name="password" id="password" required="" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="checkbox checkbox-primary pull-left p-t-0">
              <input id="checkbox-signup" type="checkbox">
              <label for="checkbox-signup" style="color:black;"> Remember me </label>
            </div>
          </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
            <!-- <div class="social"><a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip"  title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a> <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip"  title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a> </div> -->
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="offset-sm-4 col-sm-4">
        <a href="{{route('school.website')}}" class="btn btn-rounded btn-danger deleteRow">School Website</a>
      </div>
    </div>
  </div>
</section> 


<!-- jQuery -->
<script src="{{asset('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('backend/bootstrap/dist/js/tether.min.js')}}"></script>
<script src="{{asset('backend/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js')}}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>

<!--slimscroll JavaScript -->
<script src="{{asset('backend/js/jquery.slimscroll.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('backend/js/waves.js')}}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{asset('backend/js/custom.min.js')}}"></script>
<!--Style Switcher -->
<script src="{{asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
</body>
</html>
@endforeach