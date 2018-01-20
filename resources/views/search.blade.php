<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>questions</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/depart.css" rel="stylesheet">    
    <link href="css/master.css" rel="stylesheet">

    <!-- [if lt IE9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.js"></script>
     <!--[end if]-->
</head>
<body>
@extends('master')
@section('content')
        


<!--start body-->
    <section class="se text-center">
        <div class="container">
            <h2 class="h1">Search Doctor</h2>
            <div class="row">
                <form action="/search" method="post">
                    {{csrf_field()}}
            
                <div class="o col-lg-3">
                    <label class="governorate">Select governorate</label> 
                    <input list="governorate" class="governorate form-control input-md" name="gov" placeholder="Governorate">
                    <datalist id="governorate">
                        <option value="اسوان" title="اسوان" id="aswan">اسوان</option>
                        <option value="اسيوط" title="اسيوط">اسيوط</option>
                        <option value="الاسكندريه" title="الاسكندريه">الاسكندريه</option>
                        <option value="الاسماعيلية" title="الاسماعيلية">الاسماعيلية</option>
                        <option value="الاقصـر" title="الاقصـر">الاقصـر</option>
                        <option value="البحر الاحمر" title="البحر الاحمر">البحر الاحمر</option>
                        <option value="البحيرة" title="البحيرة">البحيرة</option>
                        <option value="الجيزه" title="الجيزه">الجيزه</option>
                        <option value="الدقهلية" title="الدقهلية" >الدقهلية</option>
                        <option value="السويس" title="السويس" >السويس</option>
                        <option value="الشرقيه" title="الشرقيه" >الشرقيه</option>
                        <option value="الغربيه" title="الغربيه" >الغربيه</option>
                        <option value="الفيوم" title="الفيوم" >الفيوم</option>
                        <option value="القاهره" title="القاهره" >القاهره</option>
                        <option value="القليوبيه" title="القليوبيه" >القليوبيه</option>
                        <option value="المنوفيه" title="المنوفيه" >المنوفيه</option>
                        <option value="المنيا" title="المنيا" >المنيا</option>
                        <option value="الوادى الجديد" title="الوادى الجديد" >الوادى الجديد</option>
                        <option value="بنى سويف" title="بنى سويف" >بنى سويف</option>
                        <option value="بورسعيد" title="بورسعيد" >بورسعيد</option>
                        <option value="جنوب سيناء" title="جنوب سيناء" >جنوب سيناء</option>
                        <option value="دمياط" title="دمياط" >دمياط</option>
                        <option value="سوهاج" title="سوهاج" >سوهاج</option>
                        <option value="سيناء" title="سيناء" >سيناء</option>
                        <option value="شمال سيناء" title="شمال سيناء" >شمال سيناء</option>
                        <option value="قنــا" title="قنــا" >قنــا</option>
                        <option value="كفرالشيخ" title="كفرالشيخ" >كفرالشيخ</option>
                        <option value="مرسى مطروح" title="مرسى مطروح" >مرسى مطروح</option>



                    </datalist>
                </div>
                

                <div class="o col-lg-3">
                    <label class="governorate">Select City</label>
                    <input type="text" name="city"  class="governorate form-control input-md" placeholder="city" id="input-city">

                </div>
                <div class="o col-lg-3">
                    <label class="governorate">Select Area</label>
                    <input type="text" name="area" class="governorate form-control input-md" placeholder="area" id="input-area" readonly>

                </div>
                    <div class="o col-lg-3">
                        <label class="governorate">Select Department</label>
                        <select class="form-control " name="id" style="background: #6b6969; color: white;">
                            @foreach($depts as $dept)
                                <option value="{{$dept->id}}">{{$dept->dept_name}}</option>
                                @endforeach

                        </select>

                    </div>
                
                <button class="btn btn-primary">Submit</button>
                </form>
                <hr style="width:200px;background:#066aab;height:1px;margin-top:130px;">

                 <h2 class="h1" style="margin-top:60px;margin-bottom:30px;">Available Doctor</h2>
                @isset($doctors)
                @foreach($doctors as $doctor)
                <div class="oa col-lg-4">
                    <a href="#"><div class="as">
                        <img src="image/{{$doctor->url}}">
                        <h3>Dr:{{$doctor->name}}</h3>
                        <h4>City: {{$doctor->city}}</h4>
                    </div>
                    </a>
                </div>
                @endforeach
                    @endif
                

                
                
            </div>
        </div>
    </section>
  
<!--end body-->
    @stop