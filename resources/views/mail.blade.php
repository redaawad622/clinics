<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

</head>
<body>
<h2 style="text-align: center;">welcome {{$name}} to our web site</h2>
<p>please click the link to active your account  </p>
{{ URL::to('/verify/'.$id) }}
</body>
</html>