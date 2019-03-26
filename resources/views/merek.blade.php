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
<div style="width:1000px; margin-left:180px; margin-top:50px;">
<form method="POST" action="{{route('merek.store')}}">
@csrf
  <div class="form-group">
    <label class="control-label col-sm-2" for="nama_merek">Nama Merek:</label>
    <div class="col-sm-10">
      <input name="nama_merek" type="text" class="form-control" id="nama_merek" placeholder="Masukkin Mereknya GAN...">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">GAS!</button>
    </div>
  </div>
  </form>
  </div> 
  <div style="width:1000px; margin-left:180px; margin-top:50px;">
        <table class="table col-md-5">
            <thead>
            <tr>
                <th scope="col">No<th>
                <th scope="col">Nama_Merek<th>
                </tr>
            </thead>
            <tbody>
            @foreach($merek as $m)
            <tr>
            <th scope="row">{{$m->id_merek}}</th>
            <td>{{$m->nama_merek}}</td>
            <td>
            <form action="{{route('merek.destroy', $m->id_merek)}}"method="POST">
            @csrf
            @method('delete')
            <button class ="btn btn-danger" type="submit">APUS</button>
            </form>
            </td>
            </tr>
            @endforeach
            </tbody>
            </table>
            </div>
</body>
</html>