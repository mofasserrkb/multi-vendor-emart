@include('admin.layouts.header')
<body class="theme-blue">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{{asset('assets/images/loader5.gif')}}" width="200" height="150" alt="Lucid"></div>
        <p>Please wait...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->

<div id="wrapper">
<!--nav bar start-->
  @include('admin.layouts.nav')
<!--nav bar end-->
<!-- side bar start-->
  @include('admin.layouts.sidebar')
  <!-- side bar end-->
    <div id="main-content">
   @yield('content')
    </div>



</div>
@include('admin.layouts.footer');
