
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($packageType)->name) }}" minlength="1" maxlength="255" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
    <label for="price" class="col-md-2 control-label">Price</label>
    <div class="col-md-10">
        <input class="form-control" name="price" type="text" id="price" value="{{ old('price', optional($packageType)->price) }}" minlength="1" placeholder="Enter price here...">
        {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('show_online') ? 'has-error' : '' }}">
    <label for="price" class="col-md-2 control-label">Show online</label>
    <div class="col-md-10">
        <select name="show_online">
            <option {{ old('show_online', optional($packageType)->show_online)  == 1 ? 'selected' : ''}} value="1" >Yes</option>
            <option {{ old('show_online', optional($packageType)->show_online) == 1 ? ' ' : 'selected' }} value="0">No</option>
        </select>
    </div>
</div>

