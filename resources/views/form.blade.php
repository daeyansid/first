<!doctype html>
<html lang="en">
  <head>
    <title>Form</title>
  </head>
@include('layouts.header')
  <body>
    <div class="container">
    <h1 class="text-center">Insert Data</h1>
    <form action="{{url('/')}}" method="post">
        @csrf
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
          @error('name')
              {{$message}}
          @enderror
        </div>
        <div class="form-group">
          <label for="">email</label>
          <input type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
          @error('email')
              {{$message}}
          @enderror
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="password" name="pass" id="" class="form-control" placeholder="" aria-describedby="helpId">
          @error('pass')
              {{$message}}
          @enderror
        </div>
        <div class="form-group">
          <label for="">Confirm Password</label>
          <input type="password" name="ConPass" id="" class="form-control" placeholder="" aria-describedby="helpId">
          @error('ConPass')
              {{$message}}
          @enderror
        </div>
        <button class="btn btn-primary">
            submit
        </button>
    </form>
</div>
</body>
@include('layouts.footer')
</html>