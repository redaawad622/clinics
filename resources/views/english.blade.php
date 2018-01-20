<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/hover-min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/english.css" rel="stylesheet">
    <link href="css/master.css" rel="stylesheet">
    <link href="css/englishmedia.css" rel="stylesheet">
    <!-- [if lt IE9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.js"></script>
     <!--[end if]-->
</head>
<body>
 <div class="hidden-lg hidden-md langu">
     <a class="img" href="english.blade.php"></a>
     <a class="img" href="index_So.html"></a>
</div>

 @extends('master')
 @section('content')
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>

  @foreach($carousals as $key=>$carousal)
    <li data-target="#carousel-example-generic" data-slide-to="{{$key+1}}"></li>
    @endforeach
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="img-responsive" src="image/imagen_medicos.png" alt="...">
      <div class="carousel-caption">
      
      </div>
    </div>
      @foreach($carousals as $key=>$carousal)

      <div class="item">
          @if(Auth::check()&&Auth::user()->hasRole('admin'))
          <div style="width: 100%;text-align: center;">
              <a style="z-index: 9999; position: absolute ;color: white;" href="/removeCarousal/{{$carousal->id}}"><i style="border: 1px solid black;" class="fa fa-close"></i> </a>

          </div>
          @endif
      <img class="img-responsive"  src="image/{{$carousal->url}}" alt="...">
      <div class="carousel-caption">
          
      </div>
    </div>
          @endforeach


  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left link_pri" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control " href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right link_aft" id="link_aft" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<section class="depertment text-center">
    <h2 class="text-center">The Important Departments</h2>
<div class="container first">
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6 dept-div">
            <a href="#"><img src="image/en-denth.png"></a>
        </div>
         <div class="col-md-3 col-sm-6 col-xs-6 dept-div">
             <a href="#"><img src="image/en-Nutrition-150x150.png"></a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 dept-div">
            <a href="#"><img src="image/en-orthopedic-en-1-150x150.png"></a>
            
        </div>
         <div class="col-md-3 col-sm-6 col-xs-6 dept-div">
             <a href="#"><img src="image/en-Derma-150x150.png"></a>
        </div>
    
    </div>

    
</div>
    <div class="container second">
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6 dept-div">
            <a href="#"><img src="image/en-Plastic-Surgery-150x150.png"></a>
        </div>
         <div class="col-md-3 col-sm-6 col-xs-6 dept-div">
             <a href="#"><img src="image/en-Physiotherapy-en-1-150x150.png"></a>
        </div>
         <div class="col-md-3 col-sm-6 col-xs-6 dept-div">
             <a href="#"><img src="image/en-E.N.T-150x150.png"></a>
        </div>
         <div class="col-md-3 col-sm-6 col-xs-6 dept-div">
             <a href="#"><img src="image/en-Medical-Fitness-150x150.png"></a>
        </div>
    
    </div>
        
    
    
</div>
</section>
 <section class="adverts1 text-center">
     <h2 class="text-center">Important Doctor This Week</h2>
     <div class="container">
         <div class="row"></div>
         <div class="col-md-3 col-sm-6 col-xs-12">
             <div class="adver-box">
                 <img src="image/case-managers-page.png">
                 <p class="inter-p">Treatment clinic and surgical oncology: We are working to provide evidence-based medical treatment and are proud specialization</p>
                 <a href="#" class="btn btn-primary">See More</a>

             </div>



         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
             <div class="adver-box">

                 <img src="image/dr4.jpg">
                 <p class="inter-p">Al-Batiniyah Medical Reference Clinic is working on the treatment of all internal diseases and is performed by a group of speciali</p>
                 <a href="#" class="btn btn-danger">ٍSee more</a>
             </div>

         </div>

         <div class="col-md-3 col-sm-6 col-xs-12">
             <div class="adver-box">

                 <img src="image/dr3.jpg">
                 <p class="inter-p">Family Medicine Clinics: Family doctor is a doctor holds an educated and trained in the specialty of Family Medicine for four y</p>
                 <a href="#" class="btn btn-primary">ٍSee More</a>
             </div>

         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
             <div class="adver-box">

                 <img src="image/casemanagement-1.jpg">
                 <p class="inter-p">The dental clinic at the Medical Reference Clinics offers its dental care, beauty and health services and provides all the care an</p>
                 <a href="#" class="btn btn-danger">ٍSee More</a>
             </div>


         </div>

     </div>


 </section>

<!--offer-->
<section class="offer" id="offers">
    <div class="into">
        <div class="container">
            <h2>Our Offers</h2>

            <div class="week">
                <h3><i class="fa fa-recycle"></i> Our Offers This Week</h3>
                <br>
                <p><i class="fa fa-check-square-o"></i> the Offers this week the Offers this week the Offers this week the Offers this week the Offers this week  </p>
                <p><i class="fa fa-check-square-o"></i> the Offers this week the Offers this week the Offers this week the Offers this week the Offers this week  </p>
                <p><i class="fa fa-check-square-o"></i> the Offers this week the Offers this week the Offers this week the Offers this week the Offers this week  </p>
            </div>

        </div>


    </div>
</section>
<!--end offer-->



<!--our ad-->
 
<div class="owwll text-center" id="Advertisement">
 <h2 class="text-center">Our Advertisements</h2>       
    <div class="container">
        <div class="owl-carousel owl-theme">
          <div class="items">
              <img src="image/da1.jpg">
              <p>the protect have 50% discont And if you order two protect in this days</p>
            
            </div>
          <div class="items"><img src="image/da1.jpg">
              <p>the protect have 50% discont And if you order two protect in this days</p> </div>
          <div class="items"><img src="image/da1.jpg">
              <p>the protect have 50% discont And if you order two protect in this days</p> </div>
          <div class="items"><img src="image/da1.jpg">
              <p>the protect have 50% discont And if you order two protect in this days</p> </div>
          <div class="items"><img src="image/da1.jpg">
              <p>the protect have 50% discont And if you order two protect in this days</p> </div>
            @foreach($advertisements as $key=>$advertisement)

            <div class="items"><img src="image/{{$advertisement->url}}">
              <p>{{$advertisement->body}}</p> </div>
                @endforeach

    </div>
</div>
</div>

<!--end our Ad-->
    


<!--start statistic-->
<section class="statistic text-center">
    <div class="data">
        <div class="container">
            <h2>Main Statistics</h2>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="stats">
                        <i class="fa fa-smile-o fa-lg fa-4x"></i>
                        <p>2,500</p>
                        <span>patients who we care</span>

                    </div>

                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="stats">
                        <i class="fa fa-rocket fa-lg fa-4x"></i>
                        <p>2,500</p>
                        <span>our services</span>
                    </div>

                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="stats">
                        <i class="fa fa-user-md fa-lg fa-4x"></i>
                        <p>2,500</p>
                        <span>our doctors</span>
                    </div>

                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="stats">
                        <i class="fa fa-map-marker fa-lg fa-4x"></i>
                        <p>2,500</p>
                        <span>Daily booking</span>
                    </div>


                </div>

            </div>

        </div>
    </div>


</section>

<!--end statistic-->

@if(!Auth::check())

    <!--start register -->
<section   class="register">
    <div class="btn-nav">
        <button id="btn1" class="active">Patient</button>
        <button id="btn2" class="">Doctors</button>
        <button id="btn3" class="">Advertiser</button>
    </div>

    <div id="registered" class="container">
        <!--patient-->
        <form class="form-horizontal" id="patient" action="/register" method="post">
            {{csrf_field()}}
            <input type="hidden" value="patient" name="type">
            <div class="form-group <?php if ($errors->has('name')) {echo 'has-error';} ?>">

                <div class="col-sm-12">
                    <input type="text" class="form-control" name="name"  placeholder="Your Name" value="{{ old('name') }}">
                    <div class="invalid-feedback">
                        @foreach ($errors->get('name') as $message)
                            {{$message}}
                        @endforeach
                    </div>
                </div>


            </div>
            <div class="form-group <?php if ($errors->has('email')) {echo 'has-error';} ?>">

                <div class="col-sm-12">
                    <input type="email" class="form-control" name="email"  placeholder="Email" value="{{ old('email') }}">
                    <div class="invalid-feedback">
                        @foreach ($errors->get('email') as $message)
                            {{$message}}
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="form-group <?php if ($errors->has('password')) {echo 'has-error';} ?>">

                <div class="col-sm-12">
                    <input type="password" class="form-control" name="password"  placeholder="Password">
                    <div class="invalid-feedback">
                        @foreach ($errors->get('password') as $message)
                            {{$message}}
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="form-group <?php if ($errors->has('password_confirmation')) {echo 'has-error';} ?>">

                <div class="col-sm-12">
                    <input type="password" class="form-control" name="password_confirmation"  placeholder="Confirm Password">
                    <div class="invalid-feedback">
                        @foreach ($errors->get('password_confirmation') as $message)
                            {{$message}}
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="form-group <?php if ($errors->has('phone_num')) {echo 'has-error';} ?>">

                <div class="col-sm-12">
                    <input type="text" class="form-control" name="phone_num"  placeholder="Your Phone Number" value="{{ old('phone_num') }}" >
                    <div class="invalid-feedback">
                        @foreach ($errors->get('phone_num') as $message)
                            {{$message}}
                        @endforeach
                    </div>
                </div>
            </div>



            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-default">Sign in</button>
                </div>
            </div>
        </form>

        <!--doctor-->
        <form class="form-horizontal" id="doctor" action="/register" method="post">
            {{csrf_field()}}
            <input type="hidden" value="doctor" name="type">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group <?php if ($errors->has('name')) {echo 'has-error';} ?>">

                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="name"  placeholder="Your Name" value="{{ old('name') }}">
                            <div class="invalid-feedback">
                                @foreach ($errors->get('name') as $message)
                                    {{$message}}
                                @endforeach
                            </div>                        </div>
                    </div>
                    <div class="form-group <?php if ($errors->has('email')) {echo 'has-error';} ?>">

                        <div class="col-sm-12">
                            <input type="email" class="form-control" name="email"  placeholder="Email" value="{{ old('email') }}">
                            <div class="invalid-feedback">
                                @foreach ($errors->get('email') as $message)
                                    {{$message}}
                                @endforeach
                            </div>                        </div>
                    </div>
                    <div class="form-group <?php if ($errors->has('password')) {echo 'has-error';} ?>">

                        <div class="col-sm-12">
                            <input type="password" class="form-control" name="password"  placeholder="Password">
                            <div class="invalid-feedback">
                                @foreach ($errors->get('password') as $message)
                                    {{$message}}
                                @endforeach
                            </div>                        </div>
                    </div>
                    <div class="form-group <?php if ($errors->has('password_confirmation')) {echo 'has-error';} ?>">

                        <div class="col-sm-12 ">
                            <input type="password" class="form-control" name="password_confirmation"  placeholder="Confirm Password">
                            <div class="invalid-feedback">
                                @foreach ($errors->get('password_confirmation') as $message)
                                    {{$message}}
                                @endforeach
                            </div>                        </div>
                    </div>

                </div>
                <div class="col-sm-6">
                    <div class="form-group <?php if ($errors->has('phone_num')) {echo 'has-error';} ?>">

                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="phone_num"  placeholder="Your Phone Number" value="{{ old('phone_num') }}" >
                            <div class="invalid-feedback">
                                @foreach ($errors->get('phone_num') as $message)
                                    {{$message}}
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="form-group <?php if ($errors->has('department_id')) {echo 'has-error';} ?>">
                        <div class="col-sm-12">



                        <select name="department_id" class="form-control">
                            @foreach($depts as $dept)
                                <option  value="{{$dept->id}}">{{$dept->dept_name}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>

                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-default">Sign in</button>
                    </div>
                </div>
            </div>


        </form>

        <!--advertiser-->



        <form class="form-horizontal" id="advertiser" action="/register" method="post">
            {{csrf_field()}}
            <input type="hidden" value="advertiser" name="type">
            <div class="form-group <?php if ($errors->has('name')) {echo 'has-error';} ?>">

                <div class="col-sm-12">
                    <input type="text" class="form-control" name="name"  placeholder="Your Name" value="{{ old('name') }}">
                    <div class="invalid-feedback">
                        @foreach ($errors->get('name') as $message)
                            {{$message}}
                        @endforeach
                    </div>
                </div>


            </div>
            <div class="form-group <?php if ($errors->has('email')) {echo 'has-error';} ?>">

                <div class="col-sm-12">
                    <input type="email" class="form-control" name="email"  placeholder="Email" value="{{ old('email') }}">
                    <div class="invalid-feedback">
                        @foreach ($errors->get('email') as $message)
                            {{$message}}
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="form-group <?php if ($errors->has('password')) {echo 'has-error';} ?>">

                <div class="col-sm-12">
                    <input type="password" class="form-control" name="password"  placeholder="Password">
                    <div class="invalid-feedback">
                        @foreach ($errors->get('password') as $message)
                            {{$message}}
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="form-group <?php if ($errors->has('password_confirmation')) {echo 'has-error';} ?>">

                <div class="col-sm-12">
                    <input type="password" class="form-control" name="password_confirmation"  placeholder="Confirm Password">
                    <div class="invalid-feedback">
                        @foreach ($errors->get('password_confirmation') as $message)
                            {{$message}}
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="form-group <?php if ($errors->has('phone_num')) {echo 'has-error';} ?>">

                <div class="col-sm-12">
                    <input type="text" class="form-control" name="phone_num" id="inputEmail3" placeholder="Your Phone Number" value="{{ old('phone_num') }}" >
                    <div class="invalid-feedback">
                        @foreach ($errors->get('phone_num') as $message)
                            {{$message}}
                        @endforeach
                    </div>
                </div>
            </div>



            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-default">Sign in</button>
                </div>
            </div>
        </form>

    </div>
</section>
    @endif
    <!--end register-->




@stop
