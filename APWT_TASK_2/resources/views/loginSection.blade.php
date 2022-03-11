<html>

    <head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    </head>
    
    <body style="background-color:#63E5D9" > 
    <div class = "container">
    <br><br>
    
    <h2>Log In</h2>
    <br>
    <form action= "{{route('loginSection')}}" class "form-group" method = "post">
        {{csrf_field()}}
        <div class ="col-md-4 form-group">
            <span>Student Name</span>
            <input type="text" name="StudentName" value = "{{old('StudentName')}}" class = "form-control">
            @error('StudentName')
                <span class = "text-danger">{{$message}}</span>
            @enderror
        </div>
        <br>

        <div class ="col-md-4 form-group">
            <span>StudentId</span>
            <input type="StudentId" name="StudentId" value = "{{old('StudentId')}}" class = "form-control">
            @error('StudentId')
                <span class = "text-danger">{{$message}}</span>
            @enderror
        </div>
        <br>
        <input type = "submit" class="btn btn-primary" value = "Login"> <br>

        If you don't have an account then <a href="{{route('registration')}}" >Registration</a>
    </form>
    </div>
    </body>
</html>