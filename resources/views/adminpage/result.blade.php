<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grade sublission</title>
</head>
<body>
    <form action="{{url('/')}}/Result" method="post">
        @csrf
        <div class="container mt-4 card p-3 bg-white">
          <h3 class="text-center text-primary ">
            Grade submission
          </h3>
          <div class="row">
            <div class="form-group col-md-6 required">
              <label for=" ">Student id: </label>
              <input type="text" name="student_id" id="" class="form-control" />
              <span class="text-danger">
                @error('name')
                {{$message}}
                @enderror
              </span>
            </div>
            <div class="form-group col-md-6 required">
                <label for=" ">Grade point: </label>
                <input type="text" name="Grade_point" id="" class="form-control" />
                <span class="text-danger">
                  @error('name')
                  {{$message}}
                  @enderror
                </span>                                                           
            </div>
            <div class="form-group col-md-6 required">
                <label for=" ">Grade: </label>
                <input type="text" name="Grade" id="" class="form-control" />
                <span class="text-danger">
                  @error('name')
                  {{$message}}
                  @enderror
                </span>                                                           
            </div>
          <button>Register</button>

        </div>
    
    
    
    </form>
</body>
</html>