<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ขอยินดีกับน้องๆ ปี 2 ที่รับช็อปทุกคนนะครับ</title>
    <!--Bootstrap 4.1-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Kanit:300,400" rel="stylesheet"> 
    <!--Custom CSS-->
    <link rel="stylesheet" href="{{URL::asset('main.css')}} ">
    <!--Jquery JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <br>
        <img class="icon-first" src="{{URL::asset('icon/trophy.png')}}" alt="congrat">
        <h1 class="kanit acenter text-1" >CONGRATULATION</h1>
        <h3 class="kanit acenter text-2">ยินดีด้วยนะครับ</h3>
        <!--Select Main Content to show -->
            @yield("content")
    </div>
    

     <!--Javascript for bootstrapt-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!--end of JS-->
</body>
</html>