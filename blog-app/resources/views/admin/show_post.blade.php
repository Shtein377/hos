<!DOCTYPE html>
<html>

<head>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @include('admin.css')

    <style>
        .title_deg {
            font-size: 30px;
            font-weight: bold;
            color: chartreuse;
            padding: 30px;
            text-align: center;
        }

        .table_deg {
            border: 1px solid white;
            width: 80%;
            text-align: center;
            margin-left: 70px;
        }

        .th_deg {
            background-color: blue;
        }

        .img_deg {
            width: 90%;
            height: 100px;
            padding: 10px;
        }
    </style>
</head>

<body>
    @include('admin.header')


    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')


        <div class="page-content">

            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>

                {{ session()->get('message') }}
            </div>

            @if (session()->has('message'))
            @endif
            <h1 class="title_deg"> Все Посты</h1>

            <table class="table_deg">

                <tr class="th_deg">

                    <th>Заголовок</th>
                    <th>Описание</th>
                    <th>Post by</th>
                    <th>Статус</th>
                    <th>Тип пользователя</th>
                    <th>Изображение</th>
                    <th>Удалить</th>


                </tr>


                @foreach ($post as $post)
                    <tr>

                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td>
                        <td>{{ $post->name }}</td>
                        <td>{{ $post->post_status }}</td>
                        <td>{{ $post->usertype }}</td>
                        <td>
                            <img class="img_deg" src="postimage/{{ $post->image }}" alt="">
                        </td>

                        <td>
                            <a href="{{ url('delete_post', $post->id) }}" class="btn btn-danger"
                                onclick="confirmation(event)">Удалить</a>
                        </td>

                    </tr>
                @endforeach
            </table>

        </div>

        <!-- Sidebar Navigation end-->

        @include('admin.footer')

    </div>
    </div>
    <!-- JavaScript files-->
    <script type="text/javascript">

    function confirmation(event){
      event.preventDefault();

      let urlToRedirect = event.currentTarget.getAttribute('href');

      console.log(urlToRedirect);

      swal({

        title:"Вы уверенны что хотите удалить пост?",

        text: "ВЫ не сможете восстановить его обратно...",

        icon: "warning",

        buttons: true,

        dangerMode: true,



      })

      .then((willCancel)=>
      {

        if(willCancel){
        window.location.href = urlToRedirect;
          
        }


      });

    }

    </script>
    <script src="admincss/vendor/jquery/jquery.min.js"></script>
    <script src="admincss/vendor/popper.js/umd/popper.min.js"></script>
    <script src="admincss/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="admincss/vendor/jquery.cookie/jquery.cookie.js"></script>
    <script src="admincss/vendor/chart.js/Chart.min.js"></script>
    <script src="admincss/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="admincss/js/charts-home.js"></script>
    <script src="admincss/js/front.js"></script>
</body>

</html>
