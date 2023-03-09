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
                    <form action="/admin/login" method="POST" class="needs-validation">
                        @csrf
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                        <small class="text-danger">@error('email'){{ $message }}@enderror</small><br>
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                        <small class="text-danger">@error('password'){{ $message }}@enderror</small><br>
                        <br>
                        <button class="btn btn-success" type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

@include('components/footer')
