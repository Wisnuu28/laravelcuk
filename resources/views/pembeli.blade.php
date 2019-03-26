<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pembelian</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="col-md-6 mx-auto">
    @if(Session::has('success'))
      <p class="alert alert-success">{{Session::get('success')}}</p>
    @endif
    <h2>Input Pembelian form</h2>
    <form method="POST" action="{{route('pembeli.store')}}">
      @csrf
      <div class="form-group">
        <label for="nama_pembeli">Nama Pembeli:</label>
        <input type="text" class="form-control" id="nama_pembeli" placeholder="Nama Pembeli" name="nama_pembeli">
      </div>
      <div class="form-group">
        <label for="nama_barang">Nama Barang:</label>
        <input type="text" class="form-control" id="nama_barang" placeholder="Nama Barang" name="nama_barang">
      </div>
      <div class="form-group">
        <label for="jumlah_barang">Jumlah Barang:</label>
        <input type="text" class="form-control" id="jumlah_beli" placeholder="Jumlah Barang" name="jumlah_beli">
      </div>
      <div class="form-group">
        <label for="harga">Harga:</label>
        <input type="text" class="form-control" id="harga_barang" placeholder="Harga Barang" name="harga_barang">
      </div>
      <!-- <div class="form-group">
        <label for="jumlah_barang">Total Harga:</label>
        <input type="number" class="form-control" id="total_harga" placeholder="Total Harga" name="total_harga">
      </div> -->
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
  
  <br><br><br>

  @if(!empty($pembeli))
  <div class="col-md-10 m-auto">
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Pembeli</th>
          <th>Nama Barang</th>
          <th>Jumlah Barang</th>
          <th>Harga</th>
          <th>Total Harga</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($pembeli as $p)
        <tr>
          <th scope="row">{{$loop->iteration}}</th>
          <td>{{$p->nama_pembeli}}</td>
          <td>{{$p->nama_barang}}</td>
          <td>{{$p->jumlah_beli}}</td>
          <td>{{$p->harga_barang}}</td>
          <td>{{$p->total_harga}}</td>
          <form action="{{route('pembeli.destroy', $p->id_pembeli)}}" method="POST">
            @csrf
            @method('delete')
            <td>
              <button class="btn btn-danger" role="button" aria-pressed="true">Delete</button>
            </td>
          </form>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endif
</body>
</html>
