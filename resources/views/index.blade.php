<!-- index.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home Data</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <button class="btn btn-success"><a href="{{action('CrudController@create')}}" style="text-decoration: none; color: white;">Tambah Data</a></button>
      <button class="btn btn-primary"><a href="{{url('categories')}}" style="text-decoration: none; color: white;">Kategori</a></button>
      <button class="btn btn-secondary"><a href="{{url('membership')}}" style="text-decoration: none; color: white;">Role</a></button>
      <br>
    <br/>
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Foto</th>
        <th>Judul Buku</th>
        <th>Keterangan</th>
        <th>Penerbit</th>
        <th>Kategori</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($cruds as $crud)
      <tr>
        <td>{{$crud['id']}}</td>
        <td><img src="{{ url('foto/'.$crud->foto) }}" style="width: 150px;"></td>
        <td>{{$crud['title']}}</td>
        <td>{{$crud['description']}}</td>
        <td>{{$crud['publisher']}}</td>
        <td>{{$crud['qty']}}</td>
        
        <td><a href="{{action('CrudController@edit', $crud['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('CrudController@destroy', $crud['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
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