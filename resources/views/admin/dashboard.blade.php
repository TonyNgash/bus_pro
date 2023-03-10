@include('../components/header')
@include('../components/admin-navbar')
    <div class="container">
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

    </div>

@include('../components/footer')
