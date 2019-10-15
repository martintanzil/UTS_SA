<form method="post" action="{{route('addKontak')}}">
    @csrf
    <h1>add new kontak</h1>
    <div>
        <label>Nama :</label>
        <input type="text" name = "nama">
    </div>
    <div>
        <label>Telepon :</label>
        <input type="text" name = "telepon">
    </div>
    <div>
        <label>email :</label>
        <input type="text" name = "email">
    </div>
    <div>
        <label>Alamat : </label>
        <input type="text" name = "alamat">
    </div>
    <div>
        <input type="submit" name = "sbmt">
    </div>
    
</form>