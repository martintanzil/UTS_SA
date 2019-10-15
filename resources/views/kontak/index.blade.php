<html lang="en">
<head>
    <title>kontak</title>
</head>
<body>
<body>

    <button onclick ="location.href='{{route('newForm')}}';"> Add </button>

    

    <table border = 1>
    <tr>
        <th>ID</th>
        <th>NAMA</th>
        <th>TELEPON</th>
        <th>EMAIL</th>
        <th>ALAMAT</th>
    </tr>
    @foreach($kontak as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->nama}}</td>
        <td>{{$item->telepon}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->alamat}}</td>
        <td>
            <button onclick = "location.href='{{route('editKontak',['id'=>$item->id])}}';">Edit</button>
            <button onclick = "location.href='{{route('deleteKontak',['id'=>$item->id])}}';">Delete</button>
        </td>
    </tr>
    @endforeach

    <form action="{{route('searchKontak')}}" method="get">
        <input type="text" name="keyword" placeholder="Cari Nama">
        <button type="submit">Search</button>
    </form>
    </table>
</body>
</html>