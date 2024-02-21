@extends('layout') 

@section('title', 'Register')

@section('content')
    <div class="container">
        <form class="ms-auto me-auto mt-3" style="width:500px" method="POST" action="{{route('store')}}">
          @csrf 
          <div class="mb-3">
              <label  class="form-label">Fullname</label>
              <input type="text" class="form-control"  name="name" value={{old('name')}}> 
              @error('name')
                  <p class="text-danger mt-1">{{$message}}</p>
              @enderror
              
            </div>
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control" name="email" value={{old('email')}} >
              @error('email')
              <p class="text-danger mt-1">{{$message}}</p>
          @enderror
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" name="password" value={{old('password')}}> 
              @error('password')
              <p class="text-danger mt-1">{{$message}}</p>
          @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection