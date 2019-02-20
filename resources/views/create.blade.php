<!-- create.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Create Data</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Tambah Data Baru</h2><br/>
      <form method="post" action="{{url('cruds')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Title">Foto:</label>
            <input type="file" class="form-control" name="foto">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Title">Judul buku:</label>
            <input type="text" class="form-control" name="title">
          </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Description">Keterangan:</label>
              <textarea type="text" class="form-control" name="description" row="5"></textarea>
            </div>
        </div>
          
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Qty">Kategori:</label>
            <select name="qty" class="form-control">
              <option value="1">Design</option>
              <option value="2">Music</option>
              <option value="3">Travelling</option>
              <option value="4">Sky High</option>
              <option value="5">Education</option>
              <option value="6">Fantasy</option>
              <option value="7">Forest</option>
            </select>
          </div>
        </div>
          <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Publisher">Penerbit:</label>
            <input type="text" class="form-control" name="publisher">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>