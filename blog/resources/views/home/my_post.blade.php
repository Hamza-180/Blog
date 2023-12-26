<!DOCTYPE html>
<html lang="en">
   <head>
     @include('home.homecss')

    <style type="text/css">

    .post_deg{

        padding: 30px;
        text-align: center;

    }

    .title_deg{

    font-size: 30px;
    font-weight: bold;
    padding: 15px;
    color: white;
    }

    .des_deg{

    font-size: 18x;
    font-weight: bold;
    padding: 15px;

    color: whitesmoke;
}


    </style>

   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include ('home.header')

        @foreach($data as $data)

        <div  class="post_deg" >

        <img src="">
        <h4 class="title_deg" >{{$data->title}}</h4>
        <p class="des_deg" >{{$data->description}}</p>


        </div>

        @endforeach


      </div>
    
      @include('home.footer')
   </body>
</html>