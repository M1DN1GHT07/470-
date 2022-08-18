<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Information update</title>
</head>
<body>
    <form action="{{ Route('update',['id' => $student->student_id])}}" method="post">
        @csrf
        <div class="container mt-4 card p-3 bg-white">
          <h3 class="text-center text-primary ">
            Update Information
          </h3>
          <div class="row">
            <div class="form-group col-md-6 required">
              <label for=" ">name: </label>
              <input type="text" name="name" id="" class="form-control" value="{{ $student->name }}"/>
              <span class="text-danger">
                @error('name')
                {{$message}}
                @enderror
              </span>
            </div>
            <div class="form-group col-md-6 required">
                <label for=" ">Email: </label>
                <input type="text" name="email" id="" class="form-control" value="{{ $student ->email }}" />
                <span class="text-danger">
                  @error('name')
                  {{$message}}
                  @enderror
                </span>                                                           
            </div>
          <button>Update</button>

        </div>
    
    
    
    </form>
</body>
</html>