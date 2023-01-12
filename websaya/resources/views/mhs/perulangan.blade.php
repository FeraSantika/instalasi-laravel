<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perulangan Kontrol WebSaya.com</title>
</head>
<body>
    <h3>Perulangan For</h3>
    @for($i = 0; $i < count($mhs);$i++)
        {{ 'Nama: '. $mhs[$i]}} <br>
    @endfor
    <hr>

    <h3>Perulangan foreach</h3>
    @foreach($mhs as $item) {
      {{ 'Nama: '. $item}} <br>
    @endforeach 
    <hr>

    <h3>Perulangan While</h3>
    @php 
      $x = 0;
    @endphp
    @While($x < count ($mhs))
      {{'Nama:'.$mhs[$x]}} <br>
      @php 
      $x++;
      @endphp
    @endwhile
    <hr>
</body>
</html>