<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Shira2 UI - member 1.0</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet" href="{{ url('utilities.css') }}">
    <link rel="stylesheet" href="{{ url('styles.css') }}">
</head>

<body>
    <header class="d-flex justify-content-between py-3 px-3 pt-xl-4 px-xl-4">
        <div class=" d-lg-block">
        </div>
        <div>
            <h1 class="text-uppercase text-light d-flex align-items-center justify-content-xl-center mb-0"><img src="{{ url('icon%20-%20profile%20gray.png') }}" width="40" height="40" class="me-2">MY PROFILE</h1>
        </div>
        <div>
            <!-- Start: Profile Button --><a class="btn btn-home p-0" role="button" href="/dashboard"><img class="flex-shrink-0" width="40" height="46" src="{{ url('icon%20-%20home.png') }}"></a><!-- End: Profile Button -->
        </div>
    </header><!-- Start: Copy Link -->
    <div style="background-color: #161C22;" class="py-2">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3">
                <div class="col align-self-center">
                    <h6 class="fw-bold text-light mb-0">MY USERNAME:</h6>
                    <h5 class="fw-bold text-warning mb-0">{{ $user->username }}</h5>
                </div>
                <div class="col text-xl-center align-self-center">
                    <!-- Start: Copy Button -->
                    <div class="d-inline-flex align-items-center mt-3 mt-sm-0">
                        <div>
                            <h6 class="fw-bold text-start text-light mb-0">MY REFERRAL LINK:</h6>
                            <h5 class="fw-bold text-start text-warning mb-0">www.project name/{{ $user->username }}</h5>
                        </div>
                        <div class="ms-3"><button class="btn d-inline-flex flex-column align-items-center p-0" type="button"><img src="{{ url('Group%203.png') }}"><span class="fw-bold text-light" style="font-size: 12px;">COPY</span></button></div>
                    </div><!-- End: Copy Button -->
                </div>
                <div class="col text-end d-none d-xl-flex align-self-center"></div>
            </div>
        </div>
    </div><!-- End: Copy Link -->
    <!-- Start: Form -->
    <div class="flex-column justify-content-center py-3">
        <div class="container-md">
            <form class="text-center profile-form" method="post">
                <div class="row">
                    <div class="col-2 d-none d-md-flex"></div>
                    <div class="col-10 col-md-8">
                        <div class="row row-cols-3 row-cols-md-2">
                            <div class="col mb-2"><label class="form-label fw-bold text-start text-light d-block form-label ps-3 mb-1" for="Full Name">Full Name</label><input value="{{ $user->name }}" class="form-control form-control-lg text-center text-light input-placeholder-white" type="text" placeholder="Pablo Escobar" style="background: url(&quot;{{ url('button%20long%20-%20gray.png') }}&quot;) no-repeat;background-size: 100% 100%;"></div>
                            <div class="col mb-2"><label class="form-label fw-bold text-start text-light d-block form-label ps-3 mb-1" for="MOP Type">MOP Type</label><input value="{{ $user->mop_type }}" class="form-control form-control-lg text-center text-light input-placeholder-white" type="text" placeholder="Type if Gcash or Bank" style="background: url(&quot;{{ url('button%20long%20-%20orange.png') }}&quot;) no-repeat;background-size: 100% 100%;"></div>
                            <div class="col mb-2"><label class="form-label fw-bold text-start text-light d-block form-label ps-3 mb-1" for="Email Address">Email Address</label><input value="{{ $user->email }}" class="form-control form-control-lg text-center text-light input-placeholder-white" type="text" placeholder="email@email.com" style="background: url(&quot;{{ url('button%20long%20-%20green.png') }}&quot;) no-repeat;background-size: 100% 100%;"></div>
                            <div class="col mb-2"><label class="form-label fw-bold text-start text-light d-block form-label ps-3 mb-1" for="Account or Mobile No.">Account or Mobile No.</label><input value="{{ $user->account_number }}" class="form-control form-control-lg text-center text-light input-placeholder-white" type="text" placeholder="0917123456" style="background: url(&quot;{{ url('button%20long%20-%20purple.png') }}&quot;) no-repeat;background-size: 100% 100%;"></div>
                            <div class="col mb-2"><label class="form-label fw-bold text-start text-light d-block form-label ps-3 mb-1" for="Mobile No.">Mobile No.</label><input value="{{ $user->mobile_number }}" class="form-control form-control-lg text-center text-light input-placeholder-white" type="text" placeholder="0917123456" style="background: url(&quot;{{ url('button%20long%20-%20blue.png') }}&quot;) no-repeat;background-size: 100% 100%;"></div>
                            <div class="col mb-2"><label class="form-label fw-bold text-start text-light d-block form-label ps-3 mb-1" for="Account Name">Account Name</label><input value="{{ $user->account_name }}" class="form-control form-control-lg text-center text-light" type="text" placeholder="Pablo Escobar" style="background: url(&quot;{{ url('button%20long%20-%20white.png') }}&quot;) no-repeat;background-size: 100% 100%;"></div>
                        </div>
                    </div>
                    <div class="col-2 align-self-center align-self-md-end">
                        <ul class="nav nav-tabs flex-column fs-5 fw-bold text-end nav-action">
                            <li class="nav-item"><a class="nav-link disabled" href="{{ route('my-profile') }}">Edit</a></li>
                            <li class="nav-item"><a class="nav-link active" href="#">SAVE</a></li>
                            <li class="nav-item"><a class="nav-link active" href="#">CANCEL</a></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- End: Form -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>