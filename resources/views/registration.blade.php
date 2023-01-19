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
    <link rel="stylesheet" href="{{ url('custom.css') }}">

</head>

<body class="h-100">
    <!-- Start: Signup Form -->
    <div class="d-flex flex-column justify-content-center h-100 py-xl-5 py-xl-10">
        <div>
            <div class="container">
                <div class="card mx-auto card-login" style="max-width: 332px;">
                    <div class="card-header border-0 py-3">
                        <h6 class="text-uppercase fw-bold text-center text-white mb-0" style="font-size: 14px;line-height: 16px;">signup</h6>
                    </div>
                    <div class="card-body pt-3 pb-4">
                        <form class="text-center mx-auto px-3" method="POST">
                          {{ @csrf_field() }}
                            <!-- Start: Upline Username -->
                            <div class="text-center input-icon position-relative mb-2"><img class="position-absolute" src="{{ url('icon%20-%20star.png') }}"><input required class="form-control" name="upline_username" id="upline_username" value="{{ $name }}" type="text" placeholder="DISPLAYUPLINEUSERNAMEHERE"></div><!-- End: Upline Username -->
                            <!-- Start: Full Name -->
                            <div class="text-center input-icon position-relative mb-2"><img class="position-absolute" src="{{ url('icon%20-%20profile%20gray.png') }}"><input required class="form-control" type="text" name="name" id="name" placeholder="FULL NAME"></div><!-- End: Full Name -->
                            <!-- Start: Email Address -->
                            <div class="text-center input-icon position-relative mb-2"><img class="position-absolute" src="{{ url('icon%20-%20mobile.png') }}"><input required class="form-control" type="text" id="mobile_number" name="mobile_number" placeholder="MOBILE NO."></div><!-- End: Email Address -->
                            <!-- Start: Email Address -->
                            <div class="text-center input-icon position-relative mb-2"><img class="position-absolute" src=" {{ url('icon%20-%20email.png') }}"><input required class="form-control" type="email" name="email" id="email" placeholder="EMAIL ADDRESS"></div><!-- End: Email Address -->
                            <!-- Start: Input Username -->
                            <div class="text-center input-icon position-relative mb-2"><img class="position-absolute" src="{{ url('icon%20-%20profile%20blue.png') }}"><input required class="form-control" type="text" id="username" name="username" placeholder="USERNAME">
                                <div id="error" class="alert alert-success custom-alert mb-0 show p-2" role="alert" style="width:125px;height:100px;"><span class="fw-bold text-danger">PLEASE CHOOSE A UNIQUE USERNAME</span></div>
                            </div><!-- End: Input Username -->
                            <!-- Start: Input Password -->
                            <div class="text-center input-icon position-relative mb-2"><img class="position-absolute" src="{{ url('icon%20-%20lock.png') }}"><input required class="form-control" type="password" name="password" id="password" placeholder="PASSWORD"></div><!-- End: Input Password -->
                            <!-- Start: Input Repeat Password -->
                            <div class="text-center input-icon position-relative mb-4"><img class="position-absolute" src="{{ url('icon%20-%20lock.png') }}"><input required class="form-control" type="password" name="password_again" id="password" placeholder="REPEAT PASSWORD"></div><!-- End: Input Repeat Password -->
                            <div class="d-flex justify-content-center r_button">
                                <div class="d-grid w-50"><input type='button' value="CREATE ACCOUNT" class="btn btn-success btn-sm text-uppercase fw-bold"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End: Signup Form -->
    <!-- Start: Welcome Screen -->
    <div class="text-center text-white d-none">
        <div class="bg-welcome py-4 py-xl-5 mb-3">
            <div class="container">
                <h1 class="mb-4 mb-xl-5">WELCOME!</h1>
                <div class="mb-4 mb-xl-5"><img src="{{ url('Group%201.png') }}" style="max-width: 276px;"></div>
            </div>
        </div>
        <div class="container">
            <h6 class="mx-auto mb-4" style="max-width: 235px;">THANK YOU FOR CREATING AN ACCOUNT WITH US. PLEASE INSTALL THE LATEST APK.</h6>
            <div><button class="btn btn-sm text-uppercase fw-bold link-light" type="submit" style="background: url(&quot;assets/img/button%20short%20-%20green.png&quot;) top left / 100% 100% no-repeat, var(--bs-btn-bg);">DOWNLOAD</button></div>
        </div>
    </div><!-- End: Welcome Screen -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $('document').ready(function(e){
        $("#error").hide();
        $("input[type='button']").click(function(e){
            $.ajax({
                type:"POST",
                url: "/register",
                data: $("form").serialize(),
                success: function (data) {
            if(data == "message") {
                $("#error").show();
            } else {
                window.location.replace(data);         
            }
    },
            });
        });
    });
</script>
</body>

</html>