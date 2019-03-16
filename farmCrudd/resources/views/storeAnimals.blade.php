@extends('index')
@section('form')

<style>
        .upper {
          margin-top: 40px;
        }
</style>


<div class="card upper">
    <div class="card-header">
    <p class="h4 mb-4">Enter Animal details</p>  
</div>

<div class = "card-body">
    <form  id = "formid" enctype="multipart/form-data" >
        {{-- action = "{{ route('storeAnimalsRoute')}}" --}}
            {{ csrf_field() }}
        <div class = "form-group">
            <label for="farm" class="col-md-4 control-label">Farm Name:</label>
            <input type="text" id="farmName" class="form-control mb-4" placeholder="Enter Farm's Name" name = "farm">
        </div>

        <div class = "form-group">
            <label for="name" class="col-md-4 control-label">Animal Name:</label>
            <input type="text" id="animalName" class="form-control mb-4" placeholder="Enter the name of the animal" name = "name">
        </div>

        <div class = "form-group">
            <label for="type" class="col-md-4 control-label">Animal Type:</label>
            <input type="text" id="animalType" class="form-control mb-4" placeholder="Enter the type of the animal" name = "type">
        </div>

        <div class = "form-group">
            <label for="color" class="col-md-4 control-label">Animal Color:</label>
            <input type="text" id="animalColor" class="form-control mb-4" placeholder="Enter the color of the animal" name = "color">
        </div>

        <div class = "form-group">
            <label for="age" class="col-md-4 control-label">Animal age:</label>
            <input type="number" id="animalAge" class="form-control mb-4" placeholder="Enter the age of the animal" name = "age">
        </div>

        <div class = "form-group">
            <label for="image" class="col-md-4 control-label">Animal Image:</label>
            <input type="file" id="animalImage" class="form-control mb-4" name="image" accept = "image/*">
        </div>
        <button name = "submit" class="btn btn-info btn-block my-4" type="submit" >Submit Data</button>
    </form>
</div>
<script>
    $('#formid').submit(function (e){
            var submit = $(this).val();
            $.ajax({
                type:"POST",
                url:"{{ url('/storeAnimalsRoute') }}",
                data:
                "_token":"{{ csrf_token() }}",
                "form_data":$('#formid').serialize(),
                success:function(){
                    console.log("data successfully added");
                alert('successfully added'),
                    },
                }
                dataType : 'json'
            );
        });
</script>

@endsection