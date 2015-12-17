@extends('admin.layouts.login')

@section('title_page')
	Login @parent
@stop

<style type="text/css">
	
	.loginpage
	{
		margin-top: 30vh;
	}

</style>

@section('content')

    
        <div class="row loginpage">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                    
		 @if(Session::has('message'))
                            <div class="panel-body bg-danger color-red">
                                {{Session::get('message')}}
                            </div>
                            @endif

                        <form role="form" method="post" action="{{url('admin/loginprocess')}}">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username"  type="text" autofocus>
                                    {!!$errors->first('username', '<span  class="alert-danger">*:message</span>')!!}
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password">
                                    {!!$errors->first('password', '<span  class="alert-danger">*:message</span>')!!}
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                
		      <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="submit" name="submit" value="Login" class="btn btn-lg btn-success btn-block">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    

@stop
