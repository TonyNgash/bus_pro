@include('components/header')
@include('components/navbar')

    <div class="container pt-5">

        <div class="row pt-5">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <p class="display-1">Admin Register Area</p>
                <p class="display-5">Fill in your details.</p>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="card px-4 py-4">
                    @if(Session::get('success'))
                        <div class="alert alert-success alert-dissmissable fade show">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if(Session::get('fail'))
                        <div class="alert alert-danger alert-dissmissable fade show">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                    <form action="{{ route('auth.saveadmin') }}" method="POST" class="needs-validation">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" name="f_name" value="{{ old('f_name') }}">
                            <span class="text-danger">@error('f_name'){{ $message }} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="l_name" value="{{ old('l_name') }}">
                            <span class="text-danger">@error('l_name'){{ $message }} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Phone</label>
                            <input type="tel" class="form-control" name="phone" value="{{ old('phone') }}">
                            <span class="text-danger">@error('phone'){{ $message }} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password">
                            <span class="text-danger">@error('password'){{ $message }}@enderror</span><br>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-dark form-control" type="submit">Register</button>
                        </div>
                    </form>
                    {{--  <small class="text-info">Already have an account? <a href="{{ route('auth.login') }}">Click here to login</a></small>  --}}
                </div>
            </div>
        </div>

    </div>

@include('components/footer')
