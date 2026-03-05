<html>

<body>
    {{-- <p>Profil Pengguna</p>
    <p>ID User: {{ $id }}</p>
    <p>Nama User: {{ $name }}</p> --}}

    <tr>
        <td>
            <p>ID</p>
            <p>Level</p>
            <p>Username</p>
            <p>Name</p>
        </td>
    </tr>
    @foreach ($users as $userr)
        <tr>
            <td>
                <p>{{ $userr->id }}</p>
                <p>{{ $userr->level_id }}</p>
                <p>{{ $userr->username }}</p>
                <p>{{ $userr->name }}</p>
            </td>
        </tr>
    @endforeach
</body>
//ubah

</html>
