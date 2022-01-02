
  <!DOCTYPE html>
<html lang="en">
   <head>
    <!-- Required meta tags -->

    <base href="/public">

    <style type="text/css">
    
    
    label
    {
        display: inline-block;

        width: 200px;
    }

    </style>

    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">


        <div class="container" align="center" style="padding:100px">

        @if(session()->has('message'))

        <div class="alert alert-success">

          <button type="button"class="close" data-dismiss="alert">
            
          </button>

            {{session()->get('message')}}

          </div>

          @endif


        <form action="{{url('edithall', $data->id)}}" method="POST" enctype="multipart/form-data">

        @csrf
        
        <div style="padding:15px;">
        
        <label for="">Hall name</label>
        <input type="text" style="color:black;" name="name" value="{{$data->name}}">
        
        </div>

        <div style="padding:15px;">
        
        <label for="">Location</label>
        <input type="text" style="color:black;" name="location" value="{{$data->location}}">
        
        </div>

        <div style="padding:15px;">
        
        <label for="">Office number</label>
        <input type="phone_number" style="color:black;" name="phone_number" value="{{$data->phone_number}}">
        
        </div>

        <div style="padding:15px;">
        
        <label for="">Current Image</label>
        <img height="500" width="500" src="hallimage/{{$data->image}}" alt="">
        
        </div>

        <div tyle="padding:15px;">
        
        <label for="">Change Image</label>

        <input type="file" name="file">
        
        </div>

        <div style="padding:15px;">        

        <input type="submit" class="btn btn-primary">
        
        </div>


        
        </form>
        
        
        
        </div>


        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
     @include('admin.script') 
    <!-- End custom js for this page -->
  </body>
</html>