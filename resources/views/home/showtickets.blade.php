<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Sammelaan</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />



      <style>
        .center
        {
            margin:auto;
            width:70%;
            text-align:center;
            padding:30px;

        }
        table,th,td
        {
         border:1px solid black;
        
        
        }
        td{
         background-color:white;
        }
        .th_deg
        {
         
         padding:20px;
         background:#ffbc34;
         
        }
        .img_deg
        {
         height:200px;
         width:200px;
        }
        /* tr:nth-child(even) {
  background-color: rgba(150, 212, 212, 0.4);
}

th:nth-child(even),td:nth-child(even) {
  background-color: rgba(150, 212, 212, 0.4);
} */
        


        </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
       
        
      
      <div class="center" style="background-image: url('images/o.png'); width:100%;">
      
      <table style="border-collapse: separate;
      border: 1px;
      
      margin-left:240px;margin-top:10px; font-family: cursive, sans-serif;
     
      color: black;
      padding: 10px;
      border-radius: 4px;
      box-shadow: 2px 2px 10px 13px white;
  max-width: 1000px;
 
   
  width: 100%;
  
  margin-right: auto;
 ">
        <tr style="	" >
            <th class="th_deg">Event name</th>
            <th class="th_deg">quantity</th>
            <th class="th_deg">Price</th>
            <th class="th_deg" >Image</th>
            <th class="th_deg">Action</th>
         </tr>
         <?php  $totalprice =0;  ?>


         @foreach($ticket as $ticket)
         <tr >
         <td>{{$ticket->event_name}}</td>
            <td>{{$ticket->quantity}}</td>
            <td>Rs.{{$ticket->price}}</td>
            <td ><img style="width:100%;padding:20px" class="img_deg" src="/addEvent/{{$ticket->image}}"</td>
            <td><a class="btn btn-danger" onclick="return confirm('Are you sure to remove this event?')" 
            href="{{url('remove_tickets',$ticket->id)}}">Remove Event</a></td>
         </tr>

         <?php $totalprice=$totalprice + $ticket->price ?>

      @endforeach

     


        </table>
        <div>
         <h1 style="font-size:20px; padding:40px;">Total Price :  Rs.{{$totalprice}}</h1>
      </div>
      <div>
         <h1 style="font-size:25px;  padding-bottom:15px;">Proceed to Order</h1>
         <a href="{{url('stripe',$totalprice)}}" class="btn btn-danger">Pay Using Card</a>
      </div>


        </div>

      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By SAMELLAN<br>
         
           
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>