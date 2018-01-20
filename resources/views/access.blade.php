<!DOCTYPE html>
<html>
<head>
    <title>
        False Access
    </title>

</head>
<body>
<script type="text/javascript">
    function countdown() {
        var i = document.getElementById('counter');
        if (parseInt(i.innerHTML)==1) {
            location.href = '/';
        }
        i.innerHTML = parseInt(i.innerHTML)-1;
    }
    setInterval(function(){ countdown(); },1000);
</script>
<h4 style="color: #aa0000; padding-left: 50px;"> Acess denied for this user!!!! </h4>
<h4 style="text-align: right;color: #aa0000;padding-right: 50px">!!!!غير مسموح لهذا الشخص بالدخول لهذه الصفحة</h4>
<p style="text-align: center">You will be redirected to home  in <span id="counter">5</span> second(s)or <a href="/">click here</a></p>

</body>

</html>