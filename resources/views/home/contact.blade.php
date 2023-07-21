<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Sammelaan</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>


  <body style="min-height: 100vh; width: 100%; background: ; display: flex; align-items: center; justify-content: center;">
  <div >
    <div style="margin-top:-130px;padding:10px;">
  @include('home.header')
</div>

<div>
    <div class="container" style="width: 85%; background: #fff; border-radius: 6px; padding: 20px 60px 30px 40px; box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);">
      <div class="content" style="display: flex; align-items: center; justify-content: space-between;">
        <div class="left-side" style="width: 25%; height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 15px; position: relative;">
          <div class="address details" style="margin: 14px; text-align: center;">
            <i class="fas fa-map-marker-alt" style="font-size: 30px; color: #3e2093; margin-bottom: 10px;"></i>
            <div class="topic" style="font-size: 18px; font-weight: 500;">Address</div>
            <div class="text-one" style="font-size: 14px; color: #afafb6;">New baneshwor</div>
            <div class="text-two" style="font-size: 14px; color: #afafb6;">Kathmandu</div>
          </div>
          <div class="phone details" style="margin: 14px; text-align: center;">
            <i class="fas fa-phone-alt" style="font-size: 30px; color: #3e2093; margin-bottom: 10px;"></i>
            <div class="topic" style="font-size: 18px; font-weight: 500;">Phone</div>
            <div class="text-one" style="font-size: 14px; color: #afafb6;">+0098 9893 5647</div>
            <div class="text-two" style="font-size: 14px; color: #afafb6;">+0096 3434 5678</div>
          </div>
          <div class="email details" style="margin: 14px; text-align: center;">
            <i class="fas fa-envelope" style="font-size: 30px; color: #3e2093; margin-bottom: 10px;"></i>
            <div class="topic" style="font-size: 18px; font-weight: 500;">Email</div>
            <div class="text-one" style="font-size: 14px; color: #afafb6;">sammelan@gmail.com</div>
            <div class="text-two" style="font-size: 14px; color: #afafb6;">sammelan@gmail.com</div>
          </div>
        </div>
        <div class="right-side" style="width: 75%; margin-left: 75px;">
          <div class="topic-text" style="font-size: 23px; font-weight: 600; color: #3e2093;">Send us a message</div>
          <p style="margin: 0;">If you have any work for me or any types of queries related to my tutorial, you can send me a message from here. It's my pleasure to help you.</p>
          <form action="#">
            <div class="input-box" style="height: 50px; width: 100%; margin: 12px 0;">
              <input type="text" placeholder="Enter your name" style="height: 100%; width: 100%; border: none; outline: none; font-size: 16px; background: #F0F1F8; border-radius: 6px; padding: 0 15px;">
            </div>
            <div class="input-box" style="height: 50px; width: 100%; margin: 12px 0;">
              <input type="text" placeholder="Enter your email" style="height: 100%; width: 100%; border: none; outline: none; font-size: 16px; background: #F0F1F8; border-radius: 6px; padding: 0 15px;">
            </div>
            <div class="input-box message-box" style="min-height: 110px;"></div>
            
            <div class="button" style="display: inline-block; margin-top: 12px;">
              <input type="button" value="Send Now" style="color: #fff; font-size: 18px; outline: none; border: none; padding: 8px 16px; border-radius: 6px; background: #3e2093; cursor: pointer; transition: all 0.3s ease;">
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
