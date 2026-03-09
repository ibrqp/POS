{{-- Halaman USER --}}
<html>

<head>
    <title>Data User</title>
</head>

<body>
    <table border="1" cellpadding="2" cellpacing=""0>
        <tr>
            <td>ID</td>
            <td>Username</td>
            <td>Nama</td>
            <td>Id Level Pengguna</td>
        </tr>
        @foreach ($data as $userr)
            <tr>
                <td>{{ $userr->level_id }}</td>
                <td>{{ $userr->username }}</td>
                <td>{{ $userr->name }}</td>
                <td>{{ $userr->level_id }}</td>
            </tr>
        @endforeach
    </table>

</body>
//ubah

</html>
