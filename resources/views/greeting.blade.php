@php
$arrayMobil = ['SUV', 'Hatcbag', 'Sedan', 'MVP'];
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @forelse($arrayMobil as $mobil)
    <h1>{{ $mobil }}</h1>
    @empty
    <h1>Tidak ada data</h1>
    @endforelse
</body>

</html>