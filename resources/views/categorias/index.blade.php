<x-app-layout>
  
    <h2 class="font-semibold text-x5 text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Categorias') }}
    </h2>


<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
          
                <!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  
</html>
            </div>
            <title>Listado de Categorias</title>
          </head>
          <body>
            <div class="container">
            <h1>Listado de Categorias</h1>
            <a href="{{route('categorias.create')}}" class="btn btn-success">Add</a>
            
            <table class="table table-dark table-striped">
              
              <thead >
                
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Categorias</th>
                  <th scope="col">Descripcion</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($categorias as $categoria)
                <tr>
                  <th scope="row">{{$categoria->id}}</th>
                  <td>{{$categoria->name}}</td>
                  <td>{{$categoria->description}}</td>
                  <td>
                    <a href="{{route('categorias.edit',['categorias'=>$categoria->id])}}"
                      class="btn btn-info"> Edit</a></li>
                    <form action="{{route('categorias.destroy',['categorias' =>$categoria->id])}}"
                      method="POST" style="display: inline-block">
                    @method('delete')
                    @csrf
                    <input class="btn btn-danger" type="submit" value="Delete">
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          
          </div>
            <!-- Optional JavaScript; choose one of the two! -->
        
            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
            <!-- Option 2: Separate Popper and Bootstrap JS -->
            <!--
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
            -->
          </body>
        </div>
     
    </div>
    
  </div>

</x-app-layout>