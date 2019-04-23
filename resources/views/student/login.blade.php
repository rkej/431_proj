@extends('templates.default')

    <h4>Sign in</h4>
    <div class="row">
        <div class="col-lg-6">
            <form class="form-vertical" role="form" method="post" action="{{ route('auth.student.login') }}">
                <div class="form-group{{ $errors->has('student_email') ? ' has-error' : '' }}">
                    <label for="student_email" class="control-label">Email</label>
                    <input type="text" name="student_email" class="form-control" id="student_email">
                    @if ($errors->has('student_email'))
                        <span class="help-block">{{ $errors->first('student_email') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="control-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                    @if ($errors->has('password'))
                        <span class="help-block">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember me
                    </label>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Sign in</button>
                </div>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <button class="btn btn-default"><a href = "{{route('auth.student.signup')}}">Register</a></button>
            </form>

        </div>
    </div>
