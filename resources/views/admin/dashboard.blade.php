@include('../components/header')

    {{--  <div class="container">
        <p class="display-5 text-center">Dashboard</p>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Joined On</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $loggeduserinfo['f_name'] }}</td>
                    <td>{{ $loggeduserinfo['l_name'] }}</td>
                    <td>{{ $loggeduserinfo['email'] }}</td>
                    <td>{{ $loggeduserinfo['phone'] }}</td>
                    <td>{{ $loggeduserinfo['created_at'] }}</td>
                    <td><a href="{{ route('auth.logoutadmin') }}">Logout</a></td>
                </tr>
            </tbody>
        </table>
    </div>  --}}

    <div class="row">
        {{--  =========================side pane starts here==================================  --}}
        <div class="col-md-2 col-lg-2">
            <div class="menu-wrapper bg-dark">
                <div class="buspro-logo-box">
                    <h5>Bus Pro</h5>
                    <p>Super Admin Dashboard</p>
                </div>
                <div class="menu">
                    <ul>
                      <li><a href="#">Dashboard</a></li>
                      <li>
                        <a href="#">Sales</a>
                        <ul>
                          <li><a href="#">Reports</a></li>
                          <li><a href="#">Charts</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Customers</a></li>
                    </ul>
                </div>
            </div>

        </div>
        {{--  =========================side pane ends here==================================  --}}

        {{--  =========================main pane starts here==================================  --}}
        <div class="col-md-10 col-lg-10 bg-light">
            @include('../components/super-admin-navbar')
            <p class="display-6">Content</p>








        </div>
        {{--  =========================main pane ends here==================================  --}}
    </div>

@include('../components/footer')
