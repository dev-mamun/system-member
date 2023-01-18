<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Shira2 UI - member 1.0</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet" href="{{ url('utilities.css') }}">
    <link rel="stylesheet" href="{{ url('styles.css') }}">
</head>

<body class="h-100">
    <div class="d-flex flex-column justify-content-center h-100 py-xl-5 py-xl-10">
        <div>
            <div class="container">
                <div class="card mx-auto card-login" style="max-width: 332px;">
                    <div class="card-header border-0 py-3">
                        <h6 class="text-uppercase fw-bold text-center text-white mb-0" style="font-size: 14px;line-height: 16px;">LOGIN</h6>
                    </div>
                    <div class="card-body pt-3 pb-4">
                    @if(Session::has('error'))
<p class="alert alert-error">{{ Session::get('error') }}</p>
@endif
                        <form class="text-center px-3" method="post" action="/login">
                            {{ @csrf_field() }}
                            <!-- Start: Input Username -->
                            <div class="text-center input-icon position-relative mb-2"><img class="position-absolute" src="assets/img/icon%20-%20profile%20blue.png"><input class="form-control" type="text" name="username" placeholder="USERNAME"></div><!-- End: Input Username -->
                            <!-- Start: Input Password -->
                            <div class="text-center input-icon position-relative mb-4"><img class="position-absolute" src="assets/img/icon%20-%20lock.png"><input class="form-control" type="password" name="password" placeholder="PASSWORD"></div><!-- End: Input Password -->
                            <!-- Start: Action Button -->
                            <div class="d-flex">
                                <div class="d-grid w-50"><a class="btn btn-danger btn-sm text-uppercase fw-bold" role="button" href="javascript:void(0)">forgot password</a></div>
                                <div class="d-grid w-50"><input type="submit" class="btn btn-success btn-sm text-uppercase fw-bold" value="Login"/></div>
                            </div><!-- End: Action Button -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>