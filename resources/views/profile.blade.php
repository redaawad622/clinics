<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/profile.css')}}" rel="stylesheet">
    <link href="{{asset('css/master.css')}}" rel="stylesheet">
    <link href="{{asset('css/englishmedia-profil.css')}}" rel="stylesheet">



        <!-- [if lt IE9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.js"></script>
         <!--[end if]-->
</head>
<body>
@extends('master')
@section('content')
<section class="profile">
    <div class="header">

        <div class="image">
            <img src="{{asset('image/'.$doctor->url)}}">
            <form id="editPic" style="display:none;" action="/editPic" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input id="pic_input" type="file" name="url" class="form-control">
                <input id="ed_sub" type="submit" class="btn btn-primary">
            </form>

            <button class="btn btn-primary inp" id="pic_ch">Update</button>
            <button class="btn btn-primary inp" id="pic_btn">Upload</button>

        </div>

        <h2>Dr/{{ucwords($user->name)}}</h2>
        <h5>{{$doctor->jop_title}}</h5>

    </div>
    <div class="container">
        <div class="row">
            <div class="rate">
               <h6> Doctor Rate</h6>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
            <button style="position: relative;
    bottom: 214px;
    margin-left: 20px;
    " type="button" id="edit_mode" class="btn btn-primary"><i class="fa fa-edit"></i> Edit Mode</button>
            <button style="position: relative;
    bottom: 214px;
    margin-left: 20px;
    " type="button" id="edit_mode_cancel" class="btn btn-primary">Cancel Edit Mode</button>
        </div>
    </div>
            <div class="container">
        <div class="row">
            <div class="col-sm-4">

                <ul class="nav">
                    <li class="active clinic-tap">Clinic Information</li>
                    <li class="edu-tap">All About Doctor</li>
                    @if(!Auth::check() && Auth::hasRole('doctor'))
                    <li class="booking-tap">Booking an Appointment</li>
                        @endif
                </ul>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    @foreach($certs as $cert)
                    <div class="col-md-4 col-sm-6 p_hide">

                            <div class="img-thumbnail">
                                <i  class="fa fa-expand exp-icon1" style="position: absolute;z-index: 999;"></i>

                                <img src="{{asset('image/'.$cert->cr_url)}}" class="img-responsive exp-img1">
                                <div  class="p">
                                    <p> {{$cert->cr_body}}</p>
                                </div>
                            </div>


                    </div>
                        @endforeach
                    <form class="inp" action="/addCert" method="post">
                        {{csrf_field()}}
                        <h2>Fill Certification input</h2>
                        <div class="form-group">
                            <label class="label">choose picture</label>
                            <input class="form-control" type="file" name="cr_url">
                        </div>
                        <div class="form-group">
                            <label class="label">Content</label>
                            <input class="form-control" type="text" name="cr_body">
                        </div>
                        <input type="hidden" name="id" value="{{$doctor->id}}">
                        <input type="submit" class="btn btn-primary">

                    </form>


                </div>


            </div>

        </div>


    </div>
    <div class="container">
        <div class="clinic-info" id="clinic-info">
            <form action="/editProfile" method="post">
                {{csrf_field()}}

            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <h2>Clinic Information</h2>
                    <p class="he" style="width: 100%;"><i class="fa fa-location-arrow"></i> Clinic Address </p>
                    <div class="address">

                        <p class="p_hide">- {{ ucwords($doctor->address)}}  </p><input  type="text" class="form-control inp" name="address" value="{{old('address',$doctor->address)}}" required>
                        <p class="p_hide">- {{ ucwords($doctor->city)}}/{{ucwords($doctor->gov)}}  </p><input  type="text" class="form-control inp" name="city" value="{{old('city',$doctor->city)}}" required><br><input  type="text" class="form-control inp" name="gov" value="{{old('gov',$doctor->gov)}}" required>
                    </div>
                    <p class="he" style="width: 100%;"> <i class="fa fa-calendar-times-o"></i> Working time </p>
                    <div class="address">

                        <p> From: <span class="p_hide" style="color: #066aab; ">{{date('h:i a', strtotime($doctor->time_start))}}</span>  </p><input  type="time" class="form-control inp" name="time_start" value="{{old('time_start',$doctor->time_start)}}" required>
                        <p> To: <span class="p_hide" style="color: #066aab; ">{{date('h:i a', strtotime($doctor->time_end))}}</span>  </p><input  type="time" class="form-control inp" name="time_end" value="{{old('time_end',$doctor->time_end)}}" required>
                        <p class="vacation">Vacation Days<br><span class="p_hide" style="font-size: 22px; color: #066aab;">-- {{ucwords($doctor->vacation)}} --</span></p><input  type="text" class="form-control inp" name="vacation" value="{{old('vacation',$doctor->vacation)}}" required>
                        <input  style="margin-top: 10px;" type="submit" class="btn btn-primary inp" value="Update">

                    </div>

                </div>
                <div class="col-md-7 col-sm-6" style="text-align: right;">
                    <img  class="add-img" style="height: 600px;" src="{{asset('image/ra.png')}}">
                </div>
            </div>

            </form>
           
        </div>
        <div class="clinic-info" id="edu">
            <h2>Brief Information About Doctor </h2>
            <p class="he">Job Career</p>
            <form action="/editCareer" method="post" style="margin-left: 100px;">
                {{csrf_field()}}
                <div class="form-group" >
                    <textarea name="job_career" class="form-control inp"  rows="4">{{old('job_career',$doctor->job_career)}}</textarea>

                </div>
                <input type="submit" class="btn btn-primary inp" value="Update">

            </form>

            <div class="Jop p_hide">


                <p class="">
                   {{$doctor->job_career}}
                </p>

            </div>
            <p class="he">Education</p>
            <div class="address">
                @foreach($cvs as $cv)

                <p> From  <span style="color: #066aab">{{$cv->edu_start}}</span> to <span style="color: #066aab">{{$cv->edu_end}}</span>  </p>
                <p style="margin-left: 118px;"> {{$cv->edu_body}}</p>
                    @endforeach

            </div>
            <form action="/addEdu" method="post" class="inp" style="margin-left: 100px;">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="label">from</label>
                    <input class="form-control" name="edu_start" >
                </div>
                <div class="form-group">
                    <label class="label">to</label>
                    <input class="form-control" name="edu_end" >
                </div>
                <div class="form-group">
                    <label class="label">Body</label>
                    <input class="form-control" name="edu_body" >
                </div>
                <input type="hidden" name="id" value="{{$doctor->id}}">
                <input type="submit" class="btn btn-primary">
            </form>
        </div>
        <div class="clinic-info" id="booking">
            <h2>Booking An Appointment</h2>
            <form action="/addBooking">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$doctor->id}}">
                <div class="form-group col-sm-6">
                    <label class="label">First Name</label>
                    <input class="form-control" name="fname" value="{{old('fname')}}">
                </div>
                <div class="form-group col-sm-6">
                    <label class="label">Last Name</label>
                    <input class="form-control" name="lname" value="{{old('lname')}}">
                </div>
                <div class="form-group" style="margin-left: 15px;margin-right: 15px">
                    <label class="label">Age</label>
                    <input class="form-control" name="age" value="{{old('age')}}">
                </div>
                <label class="label" style="margin-left: 15px;">Contact</label>

                    <label class="checkbox-inline"><input class="radio-phone" name="c" type="checkbox" value="option1">phone</label>
                    <label class="checkbox-inline"><input class="radio-email" name="c2" type="checkbox" value="option2">email</label>
                <div class="form-group input-phone" style="display: none;margin-left: 15px;margin-right: 15px">
                    <label class="label">Phone Number</label>
                    <input class="form-control" name="phone" value="{{old('phone')}}" >
                </div>
                <div class="form-group input-email" style="display: none;margin-left: 15px;margin-right: 15px;">
                    <label class="label">Email</label>
                    <input class="form-control" name="email" value="{{old('email')}}" >
                </div>
                <br><br>
                <label class="label" style="margin-left: 15px;">Pay</label>

                    <label class="radio-inline"><input class="pay-cash" name="pay" type="radio" value="option1">cash</label>
                    <label class="radio-inline"><input class="pay-online" name="pay" type="radio" value="option2">online</label>
                <div class="pay" style="display:none; ">
                    <div class="form-group col-sm-4" >
                        <label class="label">Account Number</label>
                        <input class="form-control" name="account" value="{{old('account')}}" >
                    </div>
                     <div class="form-group col-sm-4">
                        <label class="label">Password</label>
                        <input class="form-control" name="pass" value="{{old('pass')}}">
                    </div>
                     <div class="form-group col-sm-4">
                        <label class="label">balance</label>
                        <input class="form-control" name="balance" value="{{old('balance')}}" >
                    </div>

                </div>
                <br>
                <br>

        <input type="submit" value="Book" class="btn btn-primary" style="margin-left: 15px;">


            </form>

        </div>
    </div>
</section>

<section class="main-rate">
    <div class="container">
        <span>Give Your Rats</span>:
        <span class="fa fa-star"></span>

        <span class="fa fa-star"></span>

        <span class="fa fa-star"></span>

        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>

        <hr>
        <h2><span class="fa fa-comments-o"></span> Patient  Comments</h2>
        <div class="all-comments">
            @foreach($rates as $rate)
            <div class="comment">
                <h3> <span style="font-size: 16px; padding-right: 10px;" class="fa fa-user-circle-o"></span> {{$rate->user_name}} <span style="font-size: 13px; color: #666">{{date('h:i a',strtotime($rate->created_at))}}</span></h3>
               <p>{{$rate->body}}</p>

            </div>
                @endforeach

        </div>

        @if(!Auth::check() && Auth::hasRole('doctor'))

<form  action="/addRate" method="post">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$doctor->id}}">
    <div class="form-group">
        <label class="label">Add Comment</label>
        <textarea class="form-control" name="body" rows="3"></textarea>

    </div>
    <input type="submit" class="btn btn-primary">
</form>
            @endif
    </div>
</section>

@stop