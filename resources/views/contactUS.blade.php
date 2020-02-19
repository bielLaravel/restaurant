
    <div id="contactUS" class="container">
    <h1 class="row justify-content-center header-h">Contact US</h1>
    <p class="row header-p justify-content-center ">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                        nonummy
                        <br>nibh euismod tincidunt ut laoreet dolore magna aliquam. </p>
    @if(Session::has('success'))
       <div class="alert alert-success">
         {{ Session::get('success') }}
       </div>
    @endif
    {!! Form::open(['route'=>'contactus.store']) !!}
    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {!! Form::label('Name:') !!}
    {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
    <span class="text-danger">{{ $errors->first('name') }}</span>
    </div>
    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    {!! Form::label('Email:') !!}
    {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
    <span class="text-danger">{{ $errors->first('email') }}</span>
    </div>
    <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
    {!! Form::label('Message:') !!}
    {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
    <span class="text-danger">{{ $errors->first('message') }}</span>
    </div>
    <div class="form-group">
    <button class="btn btn-warning">Contacc</button>
    </div>
    {!! Form::close() !!}
    </div>
