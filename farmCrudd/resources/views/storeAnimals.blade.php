@extends('index')
@section('form')
<div class="border border-0 border-dark" >
    <div class="x_title">
        <h2><center>Enter Animal Details </center></h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
 
    <form id = "formid" enctype="multipart/form-data" >
        {{-- action = "{{ route('storeAnimalsRoute')}}" --}}
            {{ csrf_field() }}
        <div class = "row">
            <div class = "col-md-6 col-sm-6 col-xs-6">
                <div class = "form-group">
                    <label for="farm" class="col-md-4 control-label">Farm Name:</label>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <input type="text" id="farmName" class="form-control mb-4" name = "farm">
                    </div>
                </div>
            </div>

            <div class = "col-md-6 col-sm-6 col-xs-6">
                <div class = "form-group">
                    <label for="name" class="col-md-4 control-label">Animal Name:</label>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <input type="text" id="animalName" class="form-control mb-4" name = "name">
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class = "row">
            <div class = "col-md-6 col-sm-6 col-xs-6">
                <div class = "form-group">
                    <label for="type" class="col-md-4 control-label">Animal Type:</label>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <input type="text" id="animalType" class="form-control mb-4"name = "type">
                    </div>
                </div>
            </div>
            
            <div class = "col-md-6 col-sm-6 col-xs-6">
                <div class = "form-group">
                    <label for="color" class="col-md-4 control-label">Animal Color:</label>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <input type="text" id="animalColor" class="form-control mb-4" name = "color">
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class = "row">
            <div class = "col-md-6 col-sm-6 col-xs-6">
                <div class = "form-group">
                    <label for="age" class="col-md-4 control-label">Animal age:</label>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <input type="number" id="animalAge" class="form-control mb-4" name = "age">
                    </div>
                </div>
            </div>

            <div class = "col-md-6 col-sm-6 col-xs-6">
                <div class = "form-group">
                    <label for="image" class="col-md-4 control-label">Animal Image:</label>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <input type="file" id="animalImage" class="form-control mb-4" name="image" accept = "image/*">
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class = "row">
                <div class = "col-md-6 col-sm-6 col-xs-6">
                    <div>
                        <label for="breed" class="col-md-4 control-label">Animal Breed:</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <select class = "form-control col-md-7 col-xs-6" id = "breed_options" >
                                <option value = "" selected disabled>Select Animal Breed</option>
                                <option value = "angola">Angola</option>
                                <option value = "ankole">Ankole</option>
                                <option value = "bolan">Bolan</option>
                                <option value = "texas">Texas</option>
                                <option value = "highland">Highland</option>
                                <option value = "belgian">Belgian Blue</option>
                            </select>
                        </div>
                        <!--<input type="hidden" name="breeds" class="form-control col-md-7 col-xs-12" id = "breed">-->
                    </div>
                </div>

                <div class = "col-md-6 col-sm-6 col-xs-6">
                    <div>
                            <label for="country" class = "col-md-4 control-label">Animal Country:</label>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <select class = "form-control col-md-7 col-xs-12" id = "country_options" >
                                    
                                    <option value = "addcountry" data-toggle="modal" data-target="#countriesModal">Add Country</option>


                            </div>
                        <!--<input type="hidden" name="breeds" class="form-control col-md-7 col-xs-12" id = "breed">-->
                    </div>
                </div>
        </div>
        <br />
        <div >
        {{--<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ModalLoginForm">Add Country</button>--}}
            <div class="col-md-3 col-sm-3 col-xs-3">
                <input name = "submit" class="btn btn-success" id="btn_submit" type="submit" value="Save Animal"/>
                <button type="button" class="btn btn-danger">Cancel</button>
            </div>
        </div>
    </form>
<script>
    $('#btn_submit').click(function (){
            var submit = $(this).val();
            $.ajax({
                type:"POST",
                url:"{{ url('/storeAnimalsRoute') }}",
                data:
                {
                "_token":"{{ csrf_token() }}",
                "form_data":$('#formid').serialize(),
                },
                success:function(message)
                {
                    alert("Data Submitted Successfully to database")
                    console.log(message);
                },
                
                error: function(xhr, ajaxOptions, thrownError)
                {
                    alert(xhr.status);
                    alert(thrownError);
                }

            });  
    });
</script>
</div>
@endsection