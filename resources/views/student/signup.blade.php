@extends('templates.default')

@section('content')



      <div class="row">
        <div class="col-lg-6">
          <h4>Registration form</h4>


            <form class="form-row" role="form" method="post" action="{{ route('auth.student.signup') }}">

            <input type="hidden" name="_token" value="{{ Session::token() }}">

          </form>

          <form class ="form-vertical" role="form" method="post" action="{{ route('auth.student.signup') }}">
            <div class="form-group{{ $errors->has('student_email') ? ' has-error' : '' }}">
                <label for="student_email" class="control-label">Your email address</label>
                <input type="text" name="student_email" class="form-control" id="student_email" >
                @if ($errors->has('student_email'))
                    <span class="help-block">{{ $errors->first('student_email') }}</span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <label for="name" class="control-label">Enter your name</label>
                  <input type="text" name="name" class="form-control" id="name" >
                  @if ($errors->has('name'))
                      <span class="help-block">{{ $errors->first('name') }}</span>
                  @endif
              </div>
              <div class="form-group{{ $errors->has('major') ? ' has-error' : '' }}">
                  <label for="major" class="control-label">Choose a major</label>
                  <input type="text" name="major" class="form-control" id="major" >
                  @if ($errors->has('major'))
                      <span class="help-block">{{ $errors->first('major') }}</span>
                  @endif
              </div>
              <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                    <label for="age" class="control-label">Enter your age</label>
                    <input type="text" name="age" class="form-control" id="age" >
                    @if ($errors->has('age'))
                        <span class="help-block">{{ $errors->first('age') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('street') ? ' has-error' : '' }}">
                      <label for="street" class="control-label">Enter your street</label>
                      <input type="text" name="street" class="form-control" id="street" >
                      @if ($errors->has('street'))
                          <span class="help-block">{{ $errors->first('street') }}</span>
                      @endif
                </div>
                <div class="form-group{{ $errors->has('zip') ? ' has-error' : '' }}">
                        <label for="zip" class="control-label">Choose a zip</label>
                        <input type="text" name="zip" class="form-control" id="zip" >
                        @if ($errors->has('zip'))
                            <span class="help-block">{{ $errors->first('zip') }}</span>
                        @endif
                </div>
                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="control-label">Choose a password</label>
                    <input type="password" name="password" class="form-control" id="password">
                      @if ($errors->has('password'))
                        <span class="help-block">{{ $errors->first('password') }}</span>
                      @endif
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-default">Register</button>
                  </div>
                  <input type="hidden" name="_token" value="{{ Session::token() }}">
          </form>
        </div>
      </div>
    </div>


@stop
