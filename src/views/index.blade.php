<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/public/assets/themes/auth/beach/css/app.css">

    <title>Myrtle</title>
</head>
<body class="body">
<div id="content" class="col-xs-12 col-sm-8 col-md-6 col-lg-6 col-xl-3">
    <div class="card animated zoomIn">
        <div class="card-block">
            <div id="logo">
                <h1 class="text-xs-center mb-2">
                    <a href="{{ route('landing') }}">
                        <span class="brand">Myrtle</span>
                        <span class="product tag tag-warning">WMS</span>
                    </a>
                </h1>
            </div>
            @yield('content')
        </div>
    </div>
</div>

{{-- Footer --}}
<script src="/public/assets/themes/auth/beach/js/app.js"></script>

<script>
    $(function(){
        @foreach($alerts->messages() as $level => $alert)
            @foreach($alert as $message)
                 notie.alert(
                         "@if($level == 'danger'){{ 'error' }}@else{{ $level }}@endif",
                        "{{ $message }}",
                        3
                    );
            @endforeach
        @endforeach
    });
</script>

</body>
</html>
