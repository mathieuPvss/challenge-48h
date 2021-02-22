<form  action="/inscription" method="post">
    {{csrf_field()}}
    <input type="email" name="email" placeholder="emaill" value = {{ old('email') }}>
    @if($errors->has('email'))
        <p>{{$errors->first('email')}}</p>
    @endif
    <input type="string" name="name" placeholder="name" >
    @if($errors->has('name'))
        <p>{{$errors->first('name')}}</p>
    @endif
    <input type="password" name="password" placeholder="password" >
    @if($errors->has('password'))
        <p>{{$errors->first('password')}}</p>
    @endif
    <input type="password" name="password_confirmation" placeholder="confirmation password" >
    @if($errors->has('password_confirmation'))
        <p>{{$errors->first('password_confirmation')}}</p>
    @endif
    <input type="submit" value="valider" >
</form>