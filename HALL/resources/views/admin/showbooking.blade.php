
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

        <div align='center' style='padding-top:100px'>
        
        <table>

        <tr align='center' style='background-color:black'>

        <th style='padding:10px'>Customer name</th>
        <th style='padding:10px'>Email</th>
        <th style='padding:10px'>Phone</th>
        <th style='padding:10px'>Hall Name</th>
        <th style='padding:10px'>Date</th>
        <th style='padding:10px'>Message</th>
        <th style='padding:10px'>Status</th>
        <th style='padding:10px'>Approve</th>
        <th style='padding:10px'>Cancel</th>
        
       
        </tr>

        @foreach($data as $book)

        <tr align='center' style='background-color:gray;'>
        <td>{{$book->name}}</td>
        <td>{{$book->email}}</td>
        <td>{{$book->phone}}</td>
        <td>{{$book->hall}}</td>
        <td>{{$book->date}}</td>
        <td>{{$book->message}}</td>
        <td>{{$book->status}}</td>
        <td>
        
        <a class="btn btn-success" href="{{url('approved',$book->id)}}">Approved</a>

        </td>
        <td>
        
        <a class="btn btn-danger" href="{{url('canceled',$book->id)}}">Canceled</a>
        
        </td>
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