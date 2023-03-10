@include('components/header')
@include('components/navbar')

    <div class="container pt-5">

        <div class="row pt-5">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <p class="display-1">Admin Login Area</p>
                <p class="display-5">Please enter your credentials to proceed.</p>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="card px-4 py-4">
                    @if(Session::get('fail'))
                        <div class="alert alert-danger alert-dissmissable fade show">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                    <form action="{{ route('auth.checkadmin') }}" method="POST" class="needs-validation">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            <span class="text-danger">@error('email'){{ $message }}@enderror</span><br>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password">
                            <span class="text-danger">@error('password'){{ $message }}@enderror</span><br>
                        <div class="form-group">

                        <div class="form-group">
                            <button class="btn btn-info form-control" type="submit">Login</button>
                        </div>
                    </form>
                    {{--  <small class="text-info">Don't have an account? <a href="{{ route('auth.register') }}">Click here</a></small>  --}}
                </div>
            </div>
        </div>

    </div>

@include('components/footer')
