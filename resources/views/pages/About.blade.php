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
                <th>StudentID</th>               
                <th>Grade Point</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($result as $result)
            <tr>                
                <td>{{ $result->student_id }}</td>
                <td>{{ $result->Grade_point }}</td>
                <td>{{ $result->Grade }}</td>
                
            </tr>
            @endforeach
            
            
        </tbody>
    </table>
   </div>
  </body>
</html>