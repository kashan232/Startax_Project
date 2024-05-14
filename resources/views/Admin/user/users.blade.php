@include('Admin.include.header_include')
<div id="main-wrapper">
    <div class="nav-header">
        <a href="#" class="brand-logo text-dark">
            <h1>StarTax</h1>
        </a>
        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>

    @include('Admin.include.navbar_include')

    <div class="deznav">
        @include('Admin.include.sidebar_include')
    </div>

    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Registered Users</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example4" class="display min-w850">
                                    <thead>
                                        <tr>
                                            <th>Sno</th>
                                            <th>Name </th>
                                            <th>Email </th>
                                            <th>usertype </th>
                                            <th>created_at</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td>01</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td><span class="badge light badge-success">{{ $user->usertype }}</span></td>
                                            <td>{{ $user->created_at->diffForHumans()
 }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('Admin.include.powerdby_include')
</div>
@include('Admin.include.footer_include')