

<form method="post" action="{{$action}}">
    @csrf
    @method($method)
    <div class="form-group">
        <label for="name">Full name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Full name" value="{{old('name', @$model->name)}}">
    </div>
    <div class="form-group mx-sm-3 mb-2">
        <label for="inputPassword2" class="sr-only">Password</label>
        <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
</form>
