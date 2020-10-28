<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Efiles Admin Panel</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-rtl.min.css" rel="stylesheet">
    <link href="/css/admin-dashboard.css" rel="stylesheet">
</head>
<body dir="rtl">
<div style="margin-bottom:35px">
    @include('admin.partials.navbar')
</div>
<div class="container" >
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ isset($card_title)? $card_title : " " }}
                    </div>
                    <div class="card-body">
                            @yield('content')

                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>
