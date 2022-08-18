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
                <th>ID</th>               
                <th>Faculty Name</th>
                <th>Subject</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($faculty as $faculty)
            <tr>                
                <td>{{ $faculty->id }}</td>
                <td>{{ $faculty->faculty }}</td>
                <td>{{ $faculty->subject }}</td>
                <td>{{ $faculty->email }}</td>
                
            </tr>
            @endforeach
            
            
        </tbody>
    </table>
   </div>
  </body>
</html>