<!DOCTYPE html>
<html>

<head>

    <base href="/public">
    @include('admin.css')


    <style>
        .post_title {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            padding: 30px;
            color: chartreuse;
        }

        .div_center {
            align-items: center;
            text-align: center;
            padding: 30px;
        }

        label {
            display: inline-block;
            width: 200px;

        }
    </style>
</head>

<body>
    @include('admin.header')


    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')

        <div class="page-content">

            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>

                {{ session()->get('message') }}
            </div>

            @if (session()->has('message'))
            @endif

            <h1>Изменение постов</h1>

            <form action="{{url('update_post', $post->id)}}" method="POST" enctype="multipart/form-data">
                   
                
                @csrf


                <div class="div_center">

                    <label for="">Заголовки постов</label>
                    <input type="text" name="title" value="{{ $post->title }}">
                </div>

                <div class="div_center">

                    <label for="">Описание постов</label>
                    <textarea name="description">{{ $post->description }}

                </textarea>
                </div>





                <div class="div_center">

                    <label for="">Старая картинка</label>

                    <img style="margin:auto" height="150px" width="150px" src="/postimage/{{ $post->image }}">

                </div>

                <div class="div_center">

                    <label for="">Изменить картинку</label>
                    <input type="file" name="image">
                </div>

                <div class="div_center">


                    <input type="submit" value="update" class="btn btn-primary">
                </div>
            </form>

        </div>


        <!-- Sidebar Navigation end-->

        @include('admin.footer')

    </div>
    </div>
    <!-- JavaScript files-->
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
