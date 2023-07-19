<!DOCTYPE html>
<html>
   <head>
    <base href="/public">
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
   </head>
   <body>
      <div class="hero_area" style="">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
   
        
 
<div style="background-image: url('addEvent/{{$event->image}}'); width:100%; height:600px;">
      <div style="margin-left:500px;margin-top:0px; font-family: cursive, sans-serif;
      background-color: white;
      color: black;
      padding: 10px;
      border-radius: 10px;
      "class="col-sm-6 col-md-4 col-lg-4" >
                 
                     <div class="img-box">
                        <img style="max-width: 100%; "src="addEvent/{{$event->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                        {{$event->event_name}}
                        </h5>
                        <h6 >
                           Price<br>
                        Rs.{{$event->price}}

                        </h6>

                        <h6>Event Details : {{$event->description}}</h6>
                        <h6>Available Tickets : {{$event->quantity}}</h6>
                        <form action="{{url('get_tickets',$event->id)}}" method="post">
                              @csrf
                              <div class="row">
                                 <div class="col-md-4">
                                    
                                 <input type="number"  style="color:black; width:80px; height:30px;margin-top:10px;margin-left:40px;"value=""name="quantity" value="1" min="1" >
                                 </div>

                                 <div class="col-md-4">
                                 <input style="padding:8px;margin-top:3px;"type="submit"value="Get tickets">
                              </div>
                           
                        </div>
                        </form>

                       
                     </div>
                  </div>
               </div>

</div>
<hr style="border:dotted #f7444e 15px;
  border-bottom: none;
  width:7%;
  margin-top:40px;
  margin-left:650px;">
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