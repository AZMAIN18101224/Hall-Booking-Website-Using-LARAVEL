
  <!DOCTYPE html>
<html lang="en">
   <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
      @include('admin.body')
    <!-- container-scroller -->
    <!-- plugins:js -->
     @include('admin.script') 
    <!-- End custom js for this page -->
  </body>
</html>