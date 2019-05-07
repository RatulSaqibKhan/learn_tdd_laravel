{!! Form::model($user, ['url' => $user ? 'users/' . $user->id : 'users', 'method' => $user ? 'PUT' : 'POST', 'autocomplete' => 'off']) !!}
<div>
    <label for="name">Name</label>
    {!! Form::text('name', null, ['id' => 'name', 'placeholder' => 'Name', 'size' => 30]) !!}
    @if($errors->has('name'))
        <span class="text-danger">{{ $errors->first('name') }}</span>
    @endif
</div>
<div>
    <label for="email">Email</label>
    {!! Form::email('email', null, ['id' => 'email', 'placeholder' => 'Email', 'size' => 30]) !!}
    @if($errors->has('email'))
        <span class="text-danger">{{ $errors->first('email') }}</span>
    @endif
</div>
<div>
    <label for="password">Password</label>
    {!! Form::password('password', ['id' => 'password', 'size' => 30]) !!}
    @if($errors->has('password'))
        <span class="text-danger">{{ $errors->first('password') }}</span>
    @endif
</div>
<div>
    <button type="submit">{{  $user ? 'Update' : 'Submit' }}</button>
</div>
{!! Form::close() !!}