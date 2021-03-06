<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>bs4 crud users - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="row flex-lg-nowrap">

    {{-- sidebar --}}
    @include('admin.partials.sidebar')

    <div class="col">

    {{-- header --}}
    @include('admin.partials.header')

    <div class="row flex-lg-nowrap">
      <div class="col mb-3">
        <div class="e-panel card">
          <div class="card-body">
            <div class="card-title">
              <h6 class="mr-2"><span>Users</span><small class="px-1">Be a wise leader</small></h6>
            </div>

            {{-- content --}}
            <main>
                @yield('content')
            </main>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-3 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="text-center px-xl-3">
              <button class="btn btn-success btn-block" type="button" data-toggle="modal" data-target="#user-form-modal">New User</button>
            </div>
            <hr class="my-3">
            <div class="e-navlist e-navlist--active-bold">
              <ul class="nav">
                <li class="nav-item active"><a href="" class="nav-link"><span>All</span>&nbsp;<small>/&nbsp;32</small></a></li>
                <li class="nav-item"><a href="" class="nav-link"><span>Active</span>&nbsp;<small>/&nbsp;16</small></a></li>
                <li class="nav-item"><a href="" class="nav-link"><span>Selected</span>&nbsp;<small>/&nbsp;0</small></a></li>
              </ul>
            </div>
            <hr class="my-3">
            <div>
              <div class="form-group">
                <label>Date from - to:</label>
                <div>
                  <input id="dates-range" class="form-control flatpickr-input" placeholder="01 Dec 17 - 27 Jan 18" type="text" readonly="readonly">
                </div>
              </div>
              <div class="form-group">
                <label>Search by Name:</label>
                <div><input class="form-control w-100" type="text" placeholder="Name" value=""></div>
              </div>
            </div>
            <hr class="my-3">
            <div class="">
              <label>Status:</label>
              <div class="px-2">
                <div class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" name="user-status" id="users-status-disabled">
                  <label class="custom-control-label" for="users-status-disabled">Disabled</label>
                </div>
              </div>
              <div class="px-2">
                <div class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" name="user-status" id="users-status-active">
                  <label class="custom-control-label" for="users-status-active">Active</label>
                </div>
              </div>
              <div class="px-2">
                <div class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" name="user-status" id="users-status-any" checked="">
                  <label class="custom-control-label" for="users-status-any">Any</label>
                </div>
              </div>
            </div>
            <hr class="my-3">
            <div class="text-center px-xl-3">
              <button class="btn btn-primary btn-block" type="button" >Search</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- User Form Modal -->
    <div class="modal fade" role="dialog" tabindex="-1" id="user-form-modal">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Create User</h5>
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">??</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="py-1">
              <form class="form" novalidate="">
                <div class="row">
                  <div class="col">
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Full Name</label>
                          <input class="form-control" type="text" name="name" placeholder="John Smith" value="John Smith">
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label>Username</label>
                          <input class="form-control" type="text" name="username" placeholder="johnny.s" value="johnny.s">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Email</label>
                          <input class="form-control" type="text" placeholder="user@example.com">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col mb-3">
                        <div class="form-group">
                          <label>About</label>
                          <textarea class="form-control" rows="5" placeholder="My Bio"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 col-sm-6 mb-3">
                    <div class="mb-2"><b>Change Password</b></div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Current Password</label>
                          <input class="form-control" type="password" placeholder="??????????????????">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>New Password</label>
                          <input class="form-control" type="password" placeholder="??????????????????">
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                          <input class="form-control" type="password" placeholder="??????????????????"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col d-flex justify-content-end">
                    <button class="btn btn-primary" type="submit">Save Changes</button>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<style type="text/css">
body{
    margin-top:20px;
    background:#f8f8f8
}
</style>

<script type="text/javascript">

</script>
</body>
</html>