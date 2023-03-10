<!DOCTYPE html>
<html lang="en">

<head>
    <title>E Commerce Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <!-- Optional theme -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> --}}

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>

</head>

<body>
    {{ View::make('header') }}
    @yield('content')
    {{ View::make('footer') }}
</body>
{{-- <script>
    $(document).ready(function(){
        $("button").click(function(){
            alert("all set");
        })
    })
</script> --}}
<style>
    .custom-login {
        height: 500px;
        padding-top: 100px;
    }

    img.silder-img {
        height: 400px !important;
    }

    .custom-product {
        height: 600px;
    }

    .slider-text {
        background-color: #87ceeb73 !important;
    }

    .trending-img {
        height: 100px;
    }

    .trending-item {
        float: left;
        width: 20%;
    }

    .trending-wrapper {
        margin: 20px;
    }

    .detail-img {
        height: 200px;
    }

    .search-box {
        width: 500px !important;
    }

    .cart-list-devider {
        border-bottom: 1px solid #000000;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }
</style>

</html>
