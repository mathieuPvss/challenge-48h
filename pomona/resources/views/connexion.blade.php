<form action="/connexion" method="post">
    {{ csrf_field() }}
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type='email' class="form-control" id="exampleInputEmail1" name='email' value="{{old('email')}}" label="email">
        @if($errors->has('email'))
            <p>{{$errors->first('email')}} </p>
        @endif
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label> <br>
        <input type='password' class="control" id="exampleInputPassword1" name='password' label="password">
        @if($errors->has('password'))
            <p>{{$errors->first('password')}} </p>
        @endif
    </div>

    <button type="submit" class="btn btn-primary">log in</button>
</form>