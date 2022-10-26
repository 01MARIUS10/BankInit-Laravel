<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>{{ $pageTitle ?? config('app.name') }}</title>
</head>
<body>
    <div class="container-fluid p-0 d-flex">
		<div class="left bg-secondary" style="width:20vw;height:100vh">
            @include('shared/sidemenu')
        </div>
        <div class="right" style="width:85vw">
            @include('shared/header')
			<div class=" m-0">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="{{asset('js/header.js')  }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://getbootstrap.com/docs/5.0/examples/sidebars/sidebars.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script> --}}
    <script type="text/javascript">
        // Data Picker Initialization
        // $('.datepicker').datepicker({
        // inline: true
        // });

        // $(function () {
        //     $('#datetimepicker6').datetimepicker();
        //     $('#datetimepicker7').datetimepicker({
        // useCurrent: false //Important! See issue #1075
        // });
        //     $("#datetimepicker6").on("dp.change", function (e) {
        //         $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        //     });
        //     $("#datetimepicker7").on("dp.change", function (e) {
        //         $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        //     });
        // });
     </script>
</body>
</html>
