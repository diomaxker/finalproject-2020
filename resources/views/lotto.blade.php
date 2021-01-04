<html>
<head>
<style>
  body {
      font-family:標楷體;
  }
</style>
</head>
<body>
<h2>今日你的幸運數字如下：</h2>
<hr>
<h3>特別號：{{ $lucky_number }}</h3>
<ul>
@foreach ($numbers as $number)
<li>{{ $number }}</li>
@endforeach
</ul>
</hr>
</body>
</html>