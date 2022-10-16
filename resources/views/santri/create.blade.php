<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1 class="text-center mt-5 mb-5">tambah data</h1>

    <form action="{{route('santri.store')}}" method="post">
      @csrf

      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nis</label>
          <input value="{{old('nis')}}" name="nis" type="text" class="form-control @error('nis') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
          @error('nis')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nama</label>
        <input value="{{old('nama')}}" name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="exampleInputPassword1">
        @error('nama')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
      </div>
  
      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>