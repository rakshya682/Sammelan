<style>.custom_nav-container .navbar-nav .nav-item:hover .nav-link, .custom_nav-container .navbar-nav .nav-item.active .nav-link {
    color: #f7444e;
}
.rating {
  display: inline-block;
}

.rating input {
  display: none;
}

.rating label {
  float: right;
  font-size: 25px;
  color: #ccc;
  cursor: pointer;
}

.rating label:before {
  content: '\2605'; /* Unicode character for a star */
}

.rating input:checked ~ label {
  color: #f8d32b; /* Change color to the desired rating color */
}
</style>
<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
            <h2> Our <span>Events</span></h2>

               <br><br>

               <div>
                  <form action="{{url('search_event')}}" method="">
                     @csrf
                        <input style="width:500px;"type="text" name="search" placeholder="Search for something">
                        <input type="submit" value="search">
                  </form>
                  
               </div>


                  </div>
            <div class="row">
               @foreach($event as $events)

               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box"style="background-color: #EDE9E8; border:0px; ">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('event_details',$events->id)}}" class="option1">
                           Event Details
                           </a>
               
                           <form action="{{url('get_tickets',$events->id)}}" method="post">
                              @csrf
                              <div class="row">
                                 <div class="col-md-4">
                                 <input type="number" name="quantity" value="1" min="1" style="width:100px;">
                                 </div>

                                 <div class="col-md-4">
                                 <input type="submit"value="Get tickets">
                              </div>
                           
                        </div>
                        </form>

                        </div>
                     </div>
                     <div class="img-box">
                        <img src="addEvent/{{$events->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5 style="color:black;">
                        {{$events->event_name}}
                        </h5>
                        <h6 style="color:black;">
                           Price<br>
                        Rs.{{$events->price}}

                        </h6>
                        <div class="rating" style="margin-top:70px;">
  <input type="radio" name="rating" id="star5" value="5">
  <label for="star5"></label>
  <input type="radio" name="rating" id="star4" value="4">
  <label for="star4"></label>
  <input type="radio" name="rating" id="star3" value="3">
  <label for="star3"></label>
  <input type="radio" name="rating" id="star2" value="2">
  <label for="star2"></label>
  <input type="radio" name="rating" id="star1" value="1">
  <label for="star1"></label>
</div>

      
                     </div>
                  </div>
               </div>
               
                  @endforeach   
                  <span style="padding-top:20px;">
            {!!$event->withQueryString()->links('pagination::bootstrap-5')!!}
               </span> 
         </div>
      </section>