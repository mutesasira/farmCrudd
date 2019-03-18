@extends('index')
@section('form')
<div class="card upper">
    <div class="card-header">
    <p class="h4 mb-4">Edit Animal details</p>  
</div>
<div class = "card-body">
    <form action = "{{ route('editAnimalsRoute')}}" method = 'POST' enctype="multipart/form-data">
            
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $animal->id }}">
            
        <div class = "form-group">
            <label for="farm" class="col-md-4 control-label">Farm Name:</label>
            <input type="text" id="farmName" class="form-control mb-4" placeholder="Enter Farm's Name" name = "farm" value = "{{ $animal->farm }}">
        </div>

        <div class = "form-group">
            <label for="name" class="col-md-4 control-label">Animal Name:</label>
            <input type="text" id="animalName" class="form-control mb-4" placeholder="Enter the name of the animal" name = "name" value = "{{ $animal->name }}">
        </div>

        <div class = "form-group">
            <label for="type" class="col-md-4 control-label">Animal Type:</label>
            <input type="text" id="animalType" class="form-control mb-4" placeholder="Enter the name of the animal" name = "type" value = "{{ $animal->type }}">
        </div>

        <div class = "form-group">
            <label for="color" class="col-md-4 control-label">Animal Color:</label>
            <input type="text" id="animalColor" class="form-control mb-4" placeholder="Enter the name of the animal" name = "color" value = "{{ $animal->color }}">
        </div>

        <div class = "form-group">
            <label for="age" class="col-md-4 control-label">Animal age:</label>
            <input type="number" id="animalAge" class="form-control mb-4" placeholder="Enter the name of the animal" name = "age" value = "{{ $animal->age }}">
        </div>

        <div class = "form-group">
            <label for="image" class="col-md-4 control-label">Animal Image:</label>
            <input type="file" id="animalImage" class="form-control mb-4" name="image" accept = "image/*">
        </div>
        
        <!-- Sign in button -->
        <button class="btn btn-info btn-block my-4" type="submit" >Submit Data</button>
    </form>
</div>
@endsection
