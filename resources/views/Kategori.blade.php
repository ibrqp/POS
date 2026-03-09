<<<<<<< HEAD
{{-- Halaman Kategori --}}
=======
//testing
>>>>>>> c84b46beb9c0ff44ce26926d8e902ca55c0e4c95
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kategori Barang</title>
</head>

<body>
    <table border="1" cellpadding="2" cellpacing=""0>
        <tr>
            <td>ID</td>
            <td>Kode Kategori</td>
            <td>Nama kategori</td>
        </tr>
        @foreach ($data as $userr)
            <tr>
                <td>{{ $userr->kategori_id }}</td>
                <td>{{ $userr->kategori_kode }}</td>
                <td>{{ $userr->kategori_nama }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
