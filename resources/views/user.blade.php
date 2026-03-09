<<<<<<< HEAD
{{-- Halaman USER --}}
=======
//testing
>>>>>>> c84b46beb9c0ff44ce26926d8e902ca55c0e4c95
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
