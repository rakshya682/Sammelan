<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')

   <style type="text/css">

    .title_deg
    {
        text-align:center;
        font-size:25px;
        font-weight:bold; 
        padding-bottom:40px;
    }
    .table_deg{
        border:2px solid white;
        width: 100%;
        margin:auto;
        text-align:center;
    }

    .th_deg{

        background-color: skyblue;
    }

    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.slidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
     
            
                      
          <div class="main-panel">
            <div class="content-wrapper">
                <h1 class="title_deg"> Event Order</h1>

                <table class="table_deg">

                <tr class="th_deg">

                <th> Name   </th>
                <th> Email   </th>
                <th> Event Name   </th>
                <th>  Quantity  </th>
                <th> Price   </th>
                <th>  Payment Status  </th>
</tr>
 @foreach($ordeer as $ordeer)
<tr>
    <td>{{$ordeer->name}}</td>
    <td>{{$ordeer->email}}</td>
    <td>{{$ordeer->event_name}}</td>
    <td>{{$ordeer->quantity}}</td>
    <td>{{$ordeer->price}}</td>
    <td>{{$ordeer->payment_status}}</td>
  
</tr>
@endforeach
</table>
            </div>
            </div>
          
          <!-- partial -->
        
    <!-- plugins:js -->
   @include('admin.script')
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>