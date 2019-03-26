<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <title>Page Title</title>
</head>
<body>
<h1><center>CERITANYA INI TOKO</center></h1>
<div style="width:1000px; margin-left:180px; margin-top:50px;">
<form method="POST" action="{{route('barang.store')}}">
@csrf
  <div class="form-group">
    <label class="control-label col-sm-2" for="text">Nama Barang:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama_barang" placeholder="Masukkin Nama Barangnya GAN...">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="stck">Stock:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="stock" placeholder="Masukin Stocknya GAN...">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="harga">Harga:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="harga" placeholder="Masukin Harga GAN...">
    </div>
  </div>
  <div class="form-group">
  <label class="control-label col-sm-2" for="deskripsi">Deskripsi:</label>
  <textarea class="form-control" rows="5" name="deskripsi" placeholder="Masukkin Deskripsi GAN.."></textarea>
</div> 
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">GAS!</button>
    </div>
  </div>
</form> 
</div>
    <div style="width:1000px; margin-left:180px; margin-top:50px;">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th >No</th>
                <th >Nama_Barang</th>
                <th >Stock</th>
                <th >Harga</th>
                <th >Deskripsi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($barang as $b)
            <tr>
            <th>{{$b->id_barang}}</th>
            <td>{{$b->nama_barang}}</td>
            <td>{{$b->stock}}</td>
            <td>{{$b->harga}}</td>
            <td>{{$b->deskripsi}}</td>
            <td>
            <form action="{{route('barang.destroy', $b->id_barang)}}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">Delete</button>
            </form>
            </td>
            </tr>
            @endforeach
            </tbody>
            </table>
            </div>

</body>
</html>