<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

  <title>Mylo</title>

  <meta name="description" content="Mylo">
  <meta name="author" content="pixelcave">
  <meta name="robots" content="noindex, nofollow">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Icons -->
  <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
  <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">

  <!-- Fonts and Styles -->
  @yield('css_before')
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
  <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/dashmix.css') }}">

  <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
  <!-- <link rel="stylesheet" id="css-theme" href="{{ mix('css/themes/xwork.css') }}"> -->
  @yield('css_after')

  <!-- Scripts -->
  <script>
    window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
  </script>
</head>

<body>
  <div id="page-container" class="sidebar-o enable-page-overlay sidebar-dark side-scroll page-header-fixed main-content-narrow">
    <!-- Side Overlay-->
    <aside id="side-overlay">
      <!-- Side Header -->
      <div class="bg-image" style="background-image: url('{{ asset('media/various/bg_side_overlay_header.jpg') }}');">
        <div class="bg-primary-op">
          <div class="content-header">
            <!-- User Avatar -->
            <a class="img-link me-1" href="javascript:void(0)">
              <img class="img-avatar img-avatar48" src="{{ asset('media/avatars/avatar10.jpg') }}" alt="">
            </a>
            <!-- END User Avatar -->

            <!-- User Info -->
            <div class="ms-2">
              <a class="text-white fw-semibold" href="javascript:void(0)">George Taylor</a>
              <div class="text-white-75 fs-sm">Full Stack Developer</div>
            </div>
            <!-- END User Info -->

            <!-- Close Side Overlay -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="ms-auto text-white" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
              <i class="fa fa-times-circle"></i>
            </a>
            <!-- END Close Side Overlay -->
          </div>
        </div>
      </div>
      <!-- END Side Header -->

      <!-- Side Content -->
      <div class="content-side">
        <div class="block pull-x mb-0">
          <!-- Color Themes -->
          <!-- Toggle Themes functionality initialized in Template._uiHandleTheme() -->
          <div class="block-content block-content-sm block-content-full bg-body">
            <span class="text-uppercase fs-sm fw-bold">Color Themes</span>
          </div>
          <div class="block-content block-content-full">
            <div class="row g-sm text-center">
              <div class="col-4 mb-1">
                <a class="d-block py-3 text-white fs-sm fw-semibold bg-default" data-toggle="theme" data-theme="default" href="#">
                  Default
                </a>
              </div>
              <div class="col-4 mb-1">
                <a class="d-block py-3 text-white fs-sm fw-semibold bg-xwork" data-toggle="theme" data-theme="{{ asset('assets/css/themes/xwork.css') }}" href="#">
                  xWork
                </a>
              </div>
              <div class="col-4 mb-1">
                <a class="d-block py-3 text-white fs-sm fw-semibold bg-xmodern" data-toggle="theme" data-theme="{{ asset('assets/css/themes/xmodern.css') }}" href="#">
                  xModern
                </a>
              </div>
              <div class="col-4 mb-1">
                <a class="d-block py-3 text-white fs-sm fw-semibold bg-xeco" data-toggle="theme" data-theme="{{ asset('assets/css/themes/xeco.css') }}" href="#">
                  xEco
                </a>
              </div>
              <div class="col-4 mb-1">
                <a class="d-block py-3 text-white fs-sm fw-semibold bg-xsmooth" data-toggle="theme" data-theme="{{ asset('assets/css/themes/xsmooth.css') }}" href="#">
                  xSmooth
                </a>
              </div>
              <div class="col-4 mb-1">
                <a class="d-block py-3 text-white fs-sm fw-semibold bg-xinspire" data-toggle="theme" data-theme="{{ asset('assets/css/themes/xinspire.css') }}" href="#">
                  xInspire
                </a>
              </div>
              <div class="col-4 mb-1">
                <a class="d-block py-3 text-white fs-sm fw-semibold bg-xdream" data-toggle="theme" data-theme="{{ asset('assets/css/themes/xdream.css') }}" href="#">
                  xDream
                </a>
              </div>
              <div class="col-4 mb-1">
                <a class="d-block py-3 text-white fs-sm fw-semibold bg-xpro" data-toggle="theme" data-theme="{{ asset('assets/css/themes/xpro.css') }}" href="#">
                  xPro
                </a>
              </div>
              <div class="col-4 mb-1">
                <a class="d-block py-3 text-white fs-sm fw-semibold bg-xplay" data-toggle="theme" data-theme="{{ asset('assets/css/themes/xplay.css') }}" href="#">
                  xPlay
                </a>
              </div>
            </div>
          </div>
          <!-- END Color Themes -->

          <!-- Sidebar -->
          <div class="block-content block-content-sm block-content-full bg-body">
            <span class="text-uppercase fs-sm fw-bold">Sidebar</span>
          </div>
          <div class="block-content block-content-full">
            <div class="row g-sm text-center">
              <div class="col-6 mb-1">
                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="sidebar_style_dark" href="javascript:void(0)">Dark</a>
              </div>
              <div class="col-6 mb-1">
                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="sidebar_style_light" href="javascript:void(0)">Light</a>
              </div>
            </div>
          </div>
          <!-- END Sidebar -->

          <!-- Header -->
          <div class="block-content block-content-sm block-content-full bg-body">
            <span class="text-uppercase fs-sm fw-bold">Header</span>
          </div>
          <div class="block-content block-content-full">
            <div class="row g-sm text-center mb-2">
              <div class="col-6 mb-1">
                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_style_dark" href="javascript:void(0)">Dark</a>
              </div>
              <div class="col-6 mb-1">
                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_style_light" href="javascript:void(0)">Light</a>
              </div>
              <div class="col-6 mb-1">
                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_mode_fixed" href="javascript:void(0)">Fixed</a>
              </div>
              <div class="col-6 mb-1">
                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_mode_static" href="javascript:void(0)">Static</a>
              </div>
            </div>
          </div>
          <!-- END Header -->

          <!-- Content -->
          <div class="block-content block-content-sm block-content-full bg-body">
            <span class="text-uppercase fs-sm fw-bold">Content</span>
          </div>
          <div class="block-content block-content-full">
            <div class="row g-sm text-center">
              <div class="col-6 mb-1">
                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="content_layout_boxed" href="javascript:void(0)">Boxed</a>
              </div>
              <div class="col-6 mb-1">
                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="content_layout_narrow" href="javascript:void(0)">Narrow</a>
              </div>
              <div class="col-12 mb-1">
                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="content_layout_full_width" href="javascript:void(0)">Full Width</a>
              </div>
            </div>
          </div>
          <!-- END Content -->
        </div>
        <div class="block pull-x mb-0">
          <!-- Content -->
          <div class="block-content block-content-sm block-content-full bg-body">
            <span class="text-uppercase fs-sm fw-bold">Heading</span>
          </div>
          <div class="block-content">
            <p>
              Content..
            </p>
          </div>
          <!-- END Content -->
        </div>
      </div>
      <!-- END Side Content -->
    </aside>
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    <!--
      Sidebar Mini Mode - Display Helper classes

      Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
      Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
          If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

      Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
      Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
      Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
    -->
    <nav id="sidebar" aria-label="Main Navigation">
      <!-- Side Header -->
      <div class="bg-header-dark">
        <div class="content-header bg-white-5">
           <a href="{{ route('profile') }}"><img id="" class="img-avatar img-avatar96 img-avatar-thumb" src="assets/media/avatars/avatar10.jpg" alt="" style="max-width:50px;max-height:50px;"></a>
           <span class="fw-semibold text-white tracking-wide">
            {{Auth::user()->name}} <br>
             <span class="opacity-75">Self</span>
           </span>
        
          <!-- END Logo -->

          <!-- Options -->
          <div>
        
            <div class="dropdown d-inline-block">
            <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="far fa-fw fa-user me-1"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
              <div class="bg-primary-dark rounded-top fw-semibold text-white  p-3">
              <i class="far fa-fw fa-user me-1"></i>{{Auth::user()->name}}
              </div>
              <div class="p-2">
              @if(!empty($subusers))
               @foreach( $subusers as $subuser)
                <a class="dropdown-item" href="">
                  <i class="far fa-fw fa-user me-1"></i>{{ $subuser->name }}
                </a>
                @endforeach
              @endif  
                <a  class="dropdown-item "  data-bs-toggle="modal" data-bs-target="#modal-profile">
                  <i class="fa fa-fw fa-plus  me-1"></i>Add Another
                </a>
               
              </div>
            </div>
          </div>
            <!-- END Dark Mode -->

            <!-- Close Sidebar, Visible only on mobile screens -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_close">
              <i class="fa fa-times-circle"></i>
            </button>
            <!-- END Close Sidebar -->
          </div>
          <!-- END Options -->
        </div>
      </div>
      <!-- END Side Header -->

      <!-- Sidebar Scrolling -->
      <div class="js-sidebar-scroll">
        <!-- Side Navigation -->
        <div class="content-side content-side-full">
          <ul class="nav-main">
           
            <li class="nav-main-item">
              <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon fa fa-border-all"></i>
                <span class="nav-main-link-name">Personal And Medical Profile and Vaccine History</span>
              </a>
              <ul class="nav-main-submenu">
                <li class="nav-main-item">
                  <a class="nav-main-link" href="{{ route('profile') }}">
                    <span class="nav-main-link-name">Personal Profile</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="{{ route('medicalprofile') }}">
                    <span class="nav-main-link-name">Medical Profile</span>
                  </a>
                </li>                
                <li class="nav-main-item">
                  <a class="nav-main-link" href="{{ route('immunizations') }}">
                    <span class="nav-main-link-name">Immunizations/Vaccines</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="{{ route('emergencyContacts') }}">
                    <span class="nav-main-link-name">Emergency Contacts & Health Care Proxy Agents</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="{{ route('primaryPhysician') }}">
                    <span class="nav-main-link-name">Primary Physician</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon fa fa-border-all"></i>
                <span class="nav-main-link-name">Advance Directives & Documents</span>
              </a>
              <ul class="nav-main-submenu">
                <li class="nav-main-item">
                  <a class="nav-main-link" href="{{ route('advanceDirectives') }}">
                    <span class="nav-main-link-name">Advance Directives</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="{{ route('medicalrecords') }}">
                    <span class="nav-main-link-name">Medical Records</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="{{ route('otherdocument') }}">
                    <span class="nav-main-link-name">Other Document</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon fa fa-border-all"></i>
                <span class="nav-main-link-name">Speciality Contacts</span>
              </a>
              <ul class="nav-main-submenu">
                <li class="nav-main-item">
                  <a class="nav-main-link" href="{{ route('index')}}">
                    <span class="nav-main-link-name">Doctors & Other Health Care Professionals</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="{{ route('urgentCare')}}">
                    <span class="nav-main-link-name">Urgent Care, teleMed, Hospitals, Rehab, €home Care</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="{{ route('pharmaciesMedical')}}">
                    <span class="nav-main-link-name">Pharmacies & Home Medical Equipment</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="{{ route('financeLegal')}}">
                    <span class="nav-main-link-name">Finance, Legal, Other</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon fa fa-border-all"></i>
                <span class="nav-main-link-name">Insurance</span>
              </a>
              <ul class="nav-main-submenu">
                <li class="nav-main-item">
                  <a class="nav-main-link" href="">
                    <span class="nav-main-link-name">Insurance Companies</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="">
                    <span class="nav-main-link-name">Insurance Cards</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="">
                    <span class="nav-main-link-name">Insurance Forms</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon fa fa-border-all"></i>
                <span class="nav-main-link-name">Notes, Routine Appointments, ADLs, Vital Sigsn</span>
              </a>
              <ul class="nav-main-submenu">
                <li class="nav-main-item">
                  <a class="nav-main-link" href="{{ route('eventNotes')}}">
                    <span class="nav-main-link-name">Event Notes</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="{{ route('routineAppointment')}}">
                    <span class="nav-main-link-name">Routine and Past Appointments</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="{{ route('activitiesLiving')}}">
                    <span class="nav-main-link-name">Activities of Daily Living</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="{{ route('vitalSigns')}}">
                    <span class="nav-main-link-name">Vital Signs</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon fa fa-border-all"></i>
                <span class="nav-main-link-name">Prescriptions</span>
              </a>
              <ul class="nav-main-submenu">
                <li class="nav-main-item">
                  <a class="nav-main-link" href="">
                    <span class="nav-main-link-name">Precription Information</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="">
                    <span class="nav-main-link-name">Precription List Upload</span>
                  </a>
                </li>
               
              </ul>
            </li>
          </ul>
        </div>
        <!-- END Side Navigation -->
      </div>
      <!-- END Sidebar Scrolling -->
    </nav>
    <!-- END Sidebar -->
<!--contacts model--> 
<div class="modal" id="modal-profile" tabindex="-1" role="dialog" aria-labelledby="modal-profile" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="block block-rounded block-themed block-transparent mb-0">
                  <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Create New profile</h3>
                    <div class="block-options">
                      <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-fw fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <form action="{{ route('storeSubprofile') }}" method="POST">
                  @csrf 
                  <div class="block-content">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 repeater">
                            <div class="card">                             
                                <div class="card-body">
                                  <div class="form-group">
                                      <div class="py-1 text-center">
                                        <img id="profileedit" class="img-avatar img-avatar96 img-avatar-thumb" src="assets/media/avatars/avatar10.jpg" alt="">
                                        <input id="editUpload" type="file" name="profile_photo" placeholder="Photo" capture>
                                      </div>
                                      <label class="col-form-label" for="image">Name </label>                                   
                                      <input type="text" value="" name="name"  class="form-control"  placeholder="Name">
                                      <label class="col-form-label" for="image">Relationship</label>                                   
                                      <?php echo Form::select('relationship', ['' => 'Choose any option...', 'Aunt' => 'Aunt', 'Brother' => 'Brother', 'Brother-in-law' => 'Brother-in-law', 'Client' => 'Client', 'Cousin' => 'Cousin', 'Dad' => 'Dad', 'Daughter' => 'Daughter', 'Daughter-in-law' => 'Daughter-in-law', 'Father-in-law' => 'Father-in-law', 'Friend' => 'Friend', 'Granddaughter' => 'Granddaughter', 'Grandmother' => 'Grandmother', 'Grandfather' => 'Grandfather', 'Grandson' => 'Grandson', 'Husband' => 'Husband', 'Mom' => 'Mom', 'Mother-in-law' => 'Mother-in-law', 'Neighbor' => 'Neighbor', 'Nephew' => 'Nephew', 'Niece' => 'Niece', 'Patient' => 'Patient', 'Roommate' => 'Roommate', 'Sister' => 'Sister', 'Sister-in-law' => 'Sister-in-law', 'Son' => 'Son', 'Son-in-law' => 'Son-in-law', 'Uncle' => 'Uncle','Wife' => 'Wife','other' => 'Other'] , null, ['class' => 'form-control']); ?>
                                      <label class="col-form-label" for="image">Email </label>                                 
                                      <input type="text" value="" name="email" class="form-control"  placeholder="Email">
                                      <label class="col-form-label" for="image">Contact Number  </label> 
                                      <div class="form-group" data-repeater-list="data">
                                        <div class="row mt-2">
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <input type="text" value="" name="contacts"  class="form-control"  placeholder="Contact Number ">
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-4"> 
                                                <?php echo Form::select('contact_type', ['' => 'Choose any', 'fax' => 'Fax', 'home' => 'Home', 'mobile' => 'Mobile', 'office' => 'Office'] , null, ['class' => 'form-control']); ?>
                                            </div>
                                            <div class="col-xs-1 col-sm-1 col-md-1">
                                                <button data-repeater-create type="button" class="btn btn-success">
                                                  <i class="fa fa-fw fa-plus"></i>
                                                </button>                            
                                            </div>
                                        </div>
                                        <div class="row items mt-2" data-repeater-item style="display:none">
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <input type="text" value="" name="contacts"  class="form-control"  placeholder="Contact Number ">
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-4"> 
                                                <?php echo Form::select('contact_type', ['' => 'Choose any', 'fax' => 'Fax', 'home' => 'Home', 'mobile' => 'Mobile', 'office' => 'Office'] , null, ['class' => 'form-control']); ?>
                                            </div>
                                            <div class="col-xs-1 col-sm-1 col-md-1">
                                                <button type="button" class="btn btn-danger" onclick="$(this).parents('.items').remove()">
                                                  <i class="fa fa-fw fa-trash"></i>
                                                </button>                            
                                            </div>
                                        </div>
                                      </div>
                                      <label class="col-form-label" for="image">Address </label>                                 
                                      <input type="text" value="" name="address" class="form-control"  placeholder="Address">
                                      <div class="form-group mt-2" > 
                                      <label class="col-form-label" for="image">Do you have a business card</label>                  
                                      <div class="btn-group  items-push m-2" role="group" aria-label="Horizontal Success" style="float:right">
                                        <button type="button" id="yes" class="btn btn-success" onclick="busshow()">Yes</button>
                                        <button type="button" id="no" class="btn btn-success" onclick="bushide()">No</button>                            
                                      </div><br> 
                                      <div class="col-xs-6 col-sm-6 col-md-6" id="business" style="display:none">                 
                                        <input type="file" name="business_card" class="form-control" id="fileToUpload"> 
                                      </div>
                                      </div> 
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content block-content-full text-center bg-body">
                      <button type="submit" class="btn btn-md btn-success" data-bs-dismiss="modal" style="padding: 10px 50px 10px 50px;">Save</button>
                    </div>
                    
                  </form>
                </div>
              </div>
            </div>
        </div>
    <!-- Header -->
    <header id="page-header">
      <!-- Header Content -->
      <div class="content-header">
        <!-- Left Section -->
        <div class="space-x-1">
          <!-- Toggle Sidebar -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
          <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
            <i class="fa fa-fw fa-bars"></i>
          </button>
          <!-- END Toggle Sidebar -->

          <!-- Open Search Section -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="header_search_on">
            <i class="fa fa-fw opacity-50 fa-search"></i> <span class="ms-1 d-none d-sm-inline-block">Search</span>
          </button>
          <!-- END Open Search Section -->
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="space-x-1">
          <!-- User Dropdown -->
          <div class="dropdown d-inline-block">
            <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-user d-sm-none"></i>
              <span class="d-none d-sm-inline-block">{{Auth::user()->email}}</span>
              <i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
              <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
                User Options
              </div>
              <div class="p-2">
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="far fa-fw fa-user me-1"></i> Profile
                </a>
                <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                  <span><i class="far fa-fw fa-envelope me-1"></i> Inbox</span>
                  <span class="badge bg-primary rounded-pill">3</span>
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="far fa-fw fa-file-alt me-1"></i> Invoices
                </a>
                <div role="separator" class="dropdown-divider"></div>

                <!-- Toggle Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                  <i class="far fa-fw fa-building me-1"></i> Settings
                </a>
                <!-- END Side Overlay -->

                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}">
                  <i class="far fa-fw fa-arrow-alt-circle-left me-1"></i> Sign Out
                </a>
              </div>
            </div>
          </div>
          <!-- END User Dropdown -->

          <!-- Notifications Dropdown -->
          <div class="dropdown d-inline-block">
            <button type="button" class="btn btn-alt-secondary" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-bell"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
              <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
                Notifications
              </div>
              <ul class="nav-items my-2">
                <li>
                  <a class="d-flex text-dark py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 mx-3">
                      <i class="fa fa-fw fa-check-circle text-success"></i>
                    </div>
                    <div class="flex-grow-1 fs-sm pe-2">
                      <div class="fw-semibold">App was updated to v5.6!</div>
                      <div class="text-muted">3 min ago</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="d-flex text-dark py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 mx-3">
                      <i class="fa fa-fw fa-user-plus text-info"></i>
                    </div>
                    <div class="flex-grow-1 fs-sm pe-2">
                      <div class="fw-semibold">New Subscriber was added! You now have 2580!
                      </div>
                      <div class="text-muted">10 min ago</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="d-flex text-dark py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 mx-3">
                      <i class="fa fa-fw fa-times-circle text-danger"></i>
                    </div>
                    <div class="flex-grow-1 fs-sm pe-2">
                      <div class="fw-semibold">Server backup failed to complete!</div>
                      <div class="text-muted">30 min ago</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="d-flex text-dark py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 mx-3">
                      <i class="fa fa-fw fa-exclamation-circle text-warning"></i>
                    </div>
                    <div class="flex-grow-1 fs-sm pe-2">
                      <div class="fw-semibold">You are running out of space. Please consider
                        upgrading your plan.</div>
                      <div class="text-muted">1 hour ago</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="d-flex text-dark py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 mx-3">
                      <i class="fa fa-fw fa-plus-circle text-primary"></i>
                    </div>
                    <div class="flex-grow-1 fs-sm pe-2">
                      <div class="fw-semibold">New Sale! + $30</div>
                      <div class="text-muted">2 hours ago</div>
                    </div>
                  </a>
                </li>
              </ul>
              <div class="p-2 border-top">
                <a class="btn btn-alt-primary w-100 text-center" href="javascript:void(0)">
                  <i class="fa fa-fw fa-eye opacity-50 me-1"></i> View All
                </a>
              </div>
            </div>
          </div>
          <!-- END Notifications Dropdown -->

          <!-- Toggle Side Overlay -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="side_overlay_toggle">
            <i class="far fa-fw fa-list-alt"></i>
          </button>
          <!-- END Toggle Side Overlay -->
        </div>
        <!-- END Right Section -->
      </div>
      <!-- END Header Content -->

      <!-- Header Search -->
      <div id="page-header-search" class="overlay-header bg-header-dark">
        <div class="content-header">
          <form class="w-100" action="/dashboard" method="POST">
            @csrf
            <div class="input-group">
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <button type="button" class="btn btn-alt-primary" data-toggle="layout" data-action="header_search_off">
                <i class="fa fa-fw fa-times-circle"></i>
              </button>
              <input type="text" class="form-control border-0" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
            </div>
          </form>
        </div>
      </div>
      <!-- END Header Search -->

      <!-- Header Loader -->
      <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
      <div id="page-header-loader" class="overlay-header bg-header-dark">
        <div class="bg-white-10">
          <div class="content-header">
            <div class="w-100 text-center">
              <i class="fa fa-fw fa-sun fa-spin text-white"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- END Header Loader -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
      @yield('content')
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-body-light">
      <div class="content py-0">
        <div class="row fs-sm">
          {{-- <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-end">
            Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
          </div> --}}
          <div class="col-sm-6 order-sm-1 text-center text-sm-start">
            <a class="fw-semibold" href="https://1.envato.market/r6y" target="_blank">MYLO</a> &copy;
            <span data-toggle="year-copy"></span>
          </div>
        </div>
      </div>
    </footer>
    <!-- END Footer -->
  </div>
  <!-- END Page Container -->

  <!-- Dashmix Core JS -->
  {{-- <script src="{{ asset('assets/js/dashmix.app.js') }}"></script> --}}
  <script src="{{asset('assets/js/dashmix.app.min.js')}}"></script>

  <!-- Laravel Original JS -->
  <!-- <script src="{{ mix('/js/laravel.app.js') }}"></script> -->
  

  @yield('js_after')
</body>

</html>
<style>
  #editUpload
{
    display: none;
}

#profileedit
{
    cursor: pointer;
}
</style>
<script>
     $("#profileedit").click(function(e) {
        $("#editUpload").click();
    });
</script>
<script>
   function busshow() {
      document.getElementById("business").style.display = 'block';
      }

      function bushide() {
      document.getElementById("business").style.display = 'none';
      
      } 
</script>