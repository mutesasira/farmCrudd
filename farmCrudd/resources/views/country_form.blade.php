<form id = "ctry_form">
        {{ csrf_field() }}
    <div class="form-group">
        <label class="control-label">Name:</label>
        <div>
            <input type="text" class="form-control input-lg" name="name" value="">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label">City:</label>
        <div>
            <input type="text" class="form-control input-lg" name="city">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label">Village:</label>
        <div>
            <input type="text" class="form-control input-lg" name="village">
        </div>
    </div>
    <div class="form-group">
        <div>
            <button type="submit" id = "addbtn" class="btn btn-success">Add</button>
        </div>
    </div>
</form>

