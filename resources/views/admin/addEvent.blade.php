<!DOCTYPE html>
<html lang="en">
  <head>

   @include('admin.css')
<style>
.div_center
{
    text-align:center;
    padding-top:40px;
}
.font_size
{
    font-size:40px;
    padding-bottom:40px;
}
.text_color{
    color:black;
    padding-bottom:20px;
}
label{
    display:inline-block;
    width:200px;
}
.div_design{
    padding-bottom:15px;
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
        <div class="content-wrapper"style="padding-top:100px">
        <div style="border:solid; margin-left:25px;">
            <div class="div_center">
                <h1 class="font_size" style="font-family: Cambria">Add Events</h2>

</>
                <form action="{{url('/event_add')}}" method="POST" enctype="multipart/form-data"style="display: inline-block;
  vertical-align: middle;
  line-height: 14px; ">
                <fieldset style="font-family: Cambria">
                    @csrf
                 <div class="div_design">
                <label>Event Name</label>
                <input class="text_color" type="text" name="event_name" placeholder="Write the Event Name" required="">
                    </div> 

                    <div class="div_design">
                <label style="margin-left:1px;">Description</label>
                <textarea class="text_color" type="text" name="description" placeholder="Write a description" required="" rows="4" cols="25">
</textarea>
                    </div>

                    <!-- <div class="div_design">
                <label>Event Category</label>
                <sekect class="text_color"  name="category">
                    <option value="" selected="">add a category</option>
                   
                    <option>Concert</option>
                  
                </select>
                    </div> -->
                    

                     <div class="div_design">
                <label>Event Price</label>
                <input class="text_color" type="number" name="price" placeholder="Write a price" required="">
                    </div>  
                    
                    <div class="div_design">
                <label>Quantity</label>
                <input class="text_color" type="number" min="0" name="quantity" placeholder="Write the quantity" required="">
                    </div> 

                     <div class="div_design">
                <label>Event Image Here </label>
                <input  type="file" name="image" required="">
                    </div> 

                    <div class="div_design">
                <input  type="submit" value="Add Event" class="btn btn-primary">
                    </div>
                </fieldset>
                </form>  
</div>   
             </div>

                      
               
          
          
        </div>
     
    
    
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
