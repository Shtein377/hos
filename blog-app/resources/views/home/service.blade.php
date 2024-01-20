<div class="services_section layout_padding">
    <div class="container">
       <h1 class="services_taital">Статьи</h1>
       <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
       <div class="services_section_2">
          <div class="row">

            @foreach($post as $post)

             <div class="col-md-4">

               <h2 style="text-align: center; font-size: 25px;">{{$post->title}}</h2>
                <div><img src="/postimage/{{$post->image}}" class="services_img"></div>

                

                <p>Автор: <b>{{$post->name}}</b> </p>
                <div class="btn_main"><a href="#">Читать</a></div>
             </div>

             @endforeach
             
             
          </div>
       </div>
    </div>
 </div>