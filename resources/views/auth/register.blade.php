@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Register Min-Admin</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <!-- school name -->
                        <div class="form-group{{ $errors->has('schoolname') ? ' has-error' : '' }}">
                            <label for="schoolname" class="col-md-4 control-label">School Name</label>

                            <div class="col-md-6">
                                <input id="schoolname" type="text" class="form-control" name="schoolname" value="{{ old('schoolname') }}" required autofocus>

                                @if ($errors->has('schoolname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('schoolname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- School reg. number -->
                        <div class="form-group{{ $errors->has('schoolnumber') ? ' has-error' : '' }}">
                            <label for="schoolnumber" class="col-md-4 control-label">School Reg. No</label>

                            <div class="col-md-6">
                                <input id="schoolnumber" type="text" class="form-control" name="schoolnumber" value="{{ old('schoolnumber') }}" required autofocus>

                                @if ($errors->has('schoolnumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('schoolnumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- District -->
                        <div class="form-group{{ $errors->has('district') ? ' has-error' : '' }}">
                            <label for="district" class="col-md-4 control-label">District</label>

                            <div class="col-md-6">
                                <input id="district" type="text" class="form-control" name="district" value="{{ old('district') }}" required autofocus>

                                @if ($errors->has('district'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('district') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- School ward -->
                        <div class="form-group{{ $errors->has('ward') ? ' has-error' : '' }}">
                            <label for="ward" class="col-md-4 control-label">Ward</label>

                            <div class="col-md-6">
                                <input id="ward" type="text" class="form-control" name="ward" value="{{ old('ward') }}" required autofocus>

                                @if ($errors->has('ward'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ward') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Headmaster's name -->
                        <div class="form-group{{ $errors->has('headmaster') ? ' has-error' : '' }}">
                            <label for="headmaster" class="col-md-4 control-label">HeadMaster's Name</label>

                            <div class="col-md-6">
                                <input id="headmaster" type="text" class="form-control" name="headmaster" value="{{ old('headmaster') }}" required autofocus>

                                @if ($errors->has('headmaster'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('headmaster') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Phone number -->
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Phone Number</label>
                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- email -->
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-6">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
