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
         background:#EDE9E8;
         
        }
        .profile-picture {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      margin: 0 auto 10px;
      background-image:url("images/client2.jpg"); 
      background-size: 100px 100px;/* Replace with your profile picture */
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
       
        
        <div style="height:300px;width:15%;border-radius: 25px; box-shadow: 3px 3px;margin-left:40px;background-color:#EDE9E8;">
        <div class="profile-picture"style="margin-top:15px;"></div><div style="margin-top:40px;">
        <div style="font-size:20px; margin-left:75px;">Nissan </div>
        <div style="font-size:20px; margin-left:25px;">Reward points: 0.0 </div>
        </div>
      </div> 
      <div class="center" style="margin-top:-300px">
      <button style="color:black;border:white;background-color:#EDE9E8; margin-left:130px;width:100%;height:60px;" class="btn btn-primary" type="button" data-toggle="collapse" data-target="#purchasedCollapse" aria-expanded="false" aria-controls="purchasedCollapse">PURCHASED</button>
<div class="collapse" style="visibility:visible;" id="purchasedCollapse">
  <div class="card card-body" style="margin-left:130px;width:100%;">
    <p>You don't have any tickets for upcoming shows.</p>
  </div>
</div>

<button style="color:black;margin-top:10px;border:white;background-color:#EDE9E8;  margin-left:130px;width:100%;height:60px;" class="btn btn-primary" type="button" data-toggle="collapse" data-target="#historyCollapse" aria-expanded="false" aria-controls="historyCollapse">HISTORY</button>
<div class="collapse" style="visibility:visible;" id="historyCollapse">
  <div class="card card-body" style="margin-left:130px;width:100%;">
    <p>No tickets bought yet.</p>
  </div>
</div>
      <button style="color:black;border:black;margin-top:10px;background-color:#EDE9E8;  margin-left:130px;width:100%;height:60px;" class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> BOOKINGS
</button>
<div class="collapse" style="visibility:visible;" id="collapseExample">
  <div class="card card-body" style=" margin-left:130px;width:100%;">
    
  
      <table style=" width:100%; margin-left:0px;">
        <tr  >
            <th class="th_deg">Event name</th>
            <th class="th_deg">quantity</th>
            <th class="th_deg">Price</th>
            <!-- <th class="th_deg" >Image</th> -->
            <th class="th_deg">Action</th>
         </tr>
         <?php  $totalprice =0;  ?>


         @foreach($ticket as $ticket)
         <tr >
         <td>{{$ticket->event_name}}</td>
            <td>{{$ticket->quantity}}</td>
            <td>Rs.{{$ticket->price}}</td>
            <!-- <td ><img style="width:100%;padding:20px" class="img_deg" src="/addEvent/{{$ticket->image}}"</td> -->
            <td><a class="btn btn-danger" onclick="return confirm('Are you sure to remove this event?')" 
            href="{{url('remove_tickets',$ticket->id)}}">Remove Tickets</a></td>
         </tr>

         <?php $totalprice=$totalprice + $ticket->price ?>

      @endforeach

     


        </table>
        <div>
        </div>
        
</div>

         <h1 style="font-size:20px; padding:40px;">Total Price :  Rs.{{$totalprice}}</h1>
      </div>
      <div style="margin-left:250px;margin-top:30px;">
         <h1 style="font-size:25px;  padding-bottom:15px;">Proceed to Order</h1>
         <a href="{{url('stripe',$totalprice)}}" style=" border: none;font-size: 20px;background-color:black;" onmouseover="this.style.backgroundColor='#64c4ed'"
        onmouseout="this.style.backgroundColor='black'"class="btn btn-danger">Pay Using Card</a>
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