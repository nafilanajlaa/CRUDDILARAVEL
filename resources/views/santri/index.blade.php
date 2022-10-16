<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1 class="text-center" mb-5 mt-5>index data</h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nis</th>
      <th scope="col">Nama</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($santri as $row)
    <tr>
      <th scope="row">{{$row->id}}</th>
      <td>{{$row->nis}}</td>
      <td>{{$row->nama}}</td>
      <td>
        <a href="{{route('santri.show', $row->id)}}" class="btn btn-primary">detail</a>
        <a href="#"data-bs-toggle="modal" data-bs-target="#exampleModal{{$row->id}}" class="btn btn-danger">delete</a>
        <a href="{{route('santri.edit', $row->id)}}" class="btn btn-primary">edit</a>
      </td>
    </tr>

    <!-- Modal -->
<div class="modal fade" id="exampleModal{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="text-center"> beneran mau apus<strong style="color:red;">{{$row->nama}}</strong> ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="{{route('santri.destroy', $row->id)}}" class="btn btn-danger">delete</a>
      </div>
    </div>
  </div>
</div>
    @endforeach
  </tbody>
</table>

    <a href="{{route('santri.create')}}" class="btn btn-primary"> tambah data</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>