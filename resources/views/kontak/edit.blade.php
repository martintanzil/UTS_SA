<h1>Edit To do </h1>

<form action="{{route('updateKontak',['id'=>$kontak->id])}}" method = "post">
@csrf
 <input type = "hidden" name ="id" id ="id" value ="{{$kontak->id}}">
    Nama :  <input type = "text" name ="nama" id ="nama" value ="{{$kontak->nama}}">
    Telepon :  <input type = "text" name ="telepon" id ="telepon" value ="{{$kontak->telepon}}">
    Email :  <input type = "text" name ="email" id ="email" value ="{{$kontak->email}}">
    Alamat :  <input type = "text" name ="alamat" id ="alamat" value ="{{$kontak->alamat}}">
    

    <input type="submit" value="Confirm">

</form>