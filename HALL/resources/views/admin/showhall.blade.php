
  <!DOCTYPE html>
<html lang="en">
   <head>
    <!-- Required meta tags -->
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

        <div style='padding-top:100px; padding-left:100px'>

        <table >
        
        <tr align='center' style='background-color:black'>

          <th style='padding:10px'>Hall name</th>
          <th style='padding:10px'>Location</th>
          <th style='padding:10px'>Phone</th>
          <th style='padding:10px'>Image</th>
          <th style='padding:10px'>Delete</th>
          <th style='padding:10px'>Update</th>
         

        </tr>

        @foreach($data as $hall)

        <tr align='center' style='background-color:gray'>
        
        <td>{{$hall->name}}</td>
        <td>{{$hall->location}}</td>
        <td>{{$hall->phone_number}}</td>
        
        <td><img height="100" width="100" src="hallimage/{{$hall->image}}" alt=""></td>

        <td><a onclick="return confirm('are you sure want to delete this')" class="btn btn-danger" href="{{url('deletehall',$hall->id)}}">Delete</a></td>

        <td><a class="btn btn-primary" href="{{url('updatehall', $hall->id)}}">Update</a></td>
        
        
        </tr>

        @endforeach
       
        </table>

        </div>

        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
     @include('admin.script') 
    <!-- End custom js for this page -->
  </body>
</html>