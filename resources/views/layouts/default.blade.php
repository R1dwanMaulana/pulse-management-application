<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Management Pulsa</title>

  {{-- style --}}
  @stack('before-style')
  @include('includes.style')
  @stack('after-style')

</head>

<body id="page-top">
  
  <!-- Page Wrapper -->
  <div id="wrapper">
    
    {{-- sidebar --}}
    @include('includes.sidebar')
    
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      
      <!-- Main Content -->
      <div id="content">
        
        {{-- navbar --}}
        @include('includes.navbar')
         
        {{-- content --}}
        @yield('content')
          
      </div>
       <!-- Footer -->
      
    </div>
    
  </div>
  <!-- End of Page Wrapper -->
  

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

{{-- script --}}
  @stack('before-script')
  @include('includes.script')
  @stack('after-script')

</body>

</html>
