<!DOCTYPE html>
<html>
<head>
    <title>Notulensi Rapat</title>
</head>
<body>
    <h1>{{ $notulen->judul }}</h1>
    <h6>{{ $notulen->tanggal}}</h6> <br>
    <p>{!! nl2br(e( $notulen->keterangan)) !!}</p>
</body>
</html>
