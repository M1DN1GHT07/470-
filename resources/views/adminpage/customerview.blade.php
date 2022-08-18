<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
   <div class="container">
    <table class="table">
        
            <tr>
                <th>Name</th>               
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>                
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>
                   <a href="{{ Route('delete',['id' => $student->student_id])}}">
                   <button class="btn btn-danger">Delete</button>
                   </a>
                </td>
                <td>
                  <a href="{{ Route('edit',['id' => $student->student_id])}}">
                    <button class="btn btn-primary">Edit</button>
                  </a>
                </td>
            </tr>
            @endforeach
            
            
        </tbody>
    </table>
   </div>
  </body>
</html>