<div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital">Blog post </h1>
            <p class="services_text">Hier kan je de post bekijken die je hebt toegevoegd en door te klikken op "Read More" kan je meer in detail gaan om de blog zelf te bekijken.</p>
            <div class="services_section_2">
               <div class="row">


                  @foreach($post as $post)

                     <div class="col-md-4">
                        <div><img  style="margin-bottom:20px; height:200px" width="350px" 
                        src="/postimage/{{$post->image}}" class="services_img"></div>

                        <h4>{{$post->title}}</h4>
                        
                        <p>Post by <b>{{$post->name}}</b></p>

                        <div class="btn_main"><a href="{{url('post_details',$post->id)}}">Read More</a></div>
                     </div>

                  @endforeach
                  
                  
               </div>
            </div>
         </div>
      </div>