<!DOCTYPE html>
<html>
<head>
    <title>Notulensi Rapat</title>
</head>
<body>
    <h1>{{ $notulen->judul }}</h1>
    <p>{{ $notulen->keterangan }}</p>
    <a href="{{ route('notulen.downloadPdf', $notulen->id) }}">Download PDF</a>
</body>
</html>
