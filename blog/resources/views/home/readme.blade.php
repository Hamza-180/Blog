<!DOCTYPE html>
<html lang="en">
   <head>
     @include('home.homecss')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <!-- banner section start -->
         @include('home.banner')
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- services section start -->
      <div class="container mt-5 mb-5">
         <h2 style="padding-bottom: 30px !important">List of sources:</h2>
         <ul class="list-group">
            <li class="list-group-item"><a href="https://www.youtube.com/@WebTechKnowledge" target="_blank"> Web Tech Knowledge</a></li>
            <li class="list-group-item"><a href="https://www.youtube.com/watch?v=dxt7w5NUub8&list=PLAyPO7TEH9XdZimg1YDJA7-jHPr0CzQo9" target="_blank"> Parfaitement Web</a></li>
            <li class="list-group-item"><a href="https://chat.openai.com/" target="_blank">Chat GPT</a></li>
            <li class="list-group-item"><a href="https://canvas.ehb.be/courses/34801/assignments/145251" target="_blank">Canvas</a></li>
            <li class="list-group-item">Medestudenten</a></li>
            
         </ul>
         <br>
         <a href="/" class="btn btn-primary">Back to Home</a>
      </div>


      
   </body>
</html>
