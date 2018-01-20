
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/english.css')}}" rel="stylesheet">
    <link href="{{asset('css/master.css')}}" rel="stylesheet">
    <link href="{{asset('css/englishmedia.css')}}" rel="stylesheet">
    <!-- [if lt IE9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.js"></script>
     <!--[end if]-->
</head>
<body>
<script type="text/javascript">
    function countdown() {
        var i = document.getElementById('counter');
        if(!i.innerHTML==1)
        {
            i.innerHTML = parseInt(i.innerHTML)-1;

        }

    }


        setInterval(function(){ countdown(); },1000);
        clearInterval(5000);


</script>
@extends('master')
@section('content')


<p style="color: #0F9E5E;text-align: center " > {{$message_en}}</p>
<p style="color: #0F9E5E;text-align: center " > {{$message_ar}}</p>
@if($type=='patient')

<p style="text-align: center"><?php header('refresh: 5; url=/search');?>You will be redirected to choose your doctor  in <span id="counter">5</span> second(s)or <a href="/search">click here</a></p>
@endif
@if($type=='doctor')

<p style="text-align: center"><?php header('refresh: 5; url=https://mail.google.com/mail');?>You will be redirected to  your gmail  in <span id="counter">5</span> second(s)or <a href="https://mail.google.com/mail">click here</a></p>
@endif
@if($type=='advertiser')

    <p style="text-align: center"><?php header('refresh: 5; url=https://mail.google.com/mail');?>You will be redirected to  your gmail  in <span id="counter">5</span> second(s)or <a href="https://mail.google.com/mail">click here</a></p>
@endif



@stop