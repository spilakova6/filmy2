

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


<div class="form-group text-danger">
    @foreach($errors->all() as $error)
        {{ $error }}<br>
    @endforeach
</div>
<form method="post" action="{{ $action }}">
    @csrf
    @method($method)
    <div class="form-group">
        <label for="name">Full name</label>
        <input type="name" class="form-control" id="name" name="name" placeholder="Full name" value="{{ $user->name }}">
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{ $user->email }}">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="password">Password again</label>
        <input type="password" class="form-control" id="password" name="password_confirmation" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
