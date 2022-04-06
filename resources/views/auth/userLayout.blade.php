<!-- Sidebar -->
<nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
     <ul class="nav sidebar-nav">
       <div class="sidebar-header">
       <div class="sidebar-brand">
         <a href="/dashboardUser">User Dashbord</a></div></div>
       <li><a href="/getProfile/{{ Auth::user()->id }}">edit profile</a></li>
       <li><a href="/changeUserPassword/{{ Auth::user()->id }}">change password</a></li>

      </ul>
  </nav>
  <div>
  <span class="nav-item dropdown" style="    padding: 10px;
    margin-bottom: 10px;
    float: right;">
                               Hi,  <a id="navbarDropdown" class="font-weight-bold">
                               <a class="" href="/profileUser"> {{ Auth::user()->name }}</a>
                                </a>
                                <a class="" href="{{ route('logout') }}">Logout</a>
                            </span>
  </div>
        <!-- /#sidebar-wrapper -->

         <!-- Page Content -->
         <div id="page-content-wrapper">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        @if ($message = Session::get('error'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
        @endif