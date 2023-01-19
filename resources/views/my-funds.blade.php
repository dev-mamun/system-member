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
    <header class="d-flex justify-content-between pt-3 pe-3 pt-xl-4 pe-xl-4">
        <div>
            <div class="d-flex justify-content-between align-items-center ribbon-blue position-relative px-4 mt-2"><span class="fw-bold">Active Funds</span>
                <h3 class="text-light mb-0">5,000.00</h3><img class="position-absolute" width="43" height="46" src="{{ url('icon%20-%20coin.png') }}">
            </div>
        </div>
        <div class="d-xl-block">
            <h1 class="text-uppercase text-light mb-0">MY FUNDS</h1>
        </div>
        <div>
            <!-- Start: Profile Button --><a href="/add-funds" class="btn d-inline-flex align-items-center btn-add-funds p-0 me-3" role="button" href="#"><img class="flex-shrink-0" width="40" height="46" src="{{ url('icon%20-%20add.png') }}"><span class="fw-bold text-start text-light ms-1" style="line-height: 18px;">ADD&nbsp;<br>FUNDS</span></a><!-- End: Profile Button -->
            <!-- Start: Profile Button --><a class="btn btn-home p-0" role="button" href="/dashboard"><img class="flex-shrink-0" width="40" height="46" src="{{ url('icon%20-%20home.png') }}"></a><!-- End: Profile Button -->
        </div>
    </header>
    <div class="py-4">
        <div class="container h-100">
            <ul class="nav nav-tabs justify-content-center nav-funds">
                @foreach($query as $q)
                @if($q->is_enabled)
                <li class="nav-item"><a class="nav-link py-0" href="#"><span class="fw-bold d-inline-flex justify-content-center align-items-center position-absolute nav-icon-diamond">{{ $diff = Carbon\Carbon::parse($q->created_at)->diffInDays() }}</span>
                        <p class="text-center mb-0">{{ $q->created_at->format('m/d/Y')}}</p><span class="d-inline-flex flex-column justify-content-center align-items-center bg-brown-container" style="background: url('Frame_ItemFrame01_Color_Brown.png') top left / 100% 100% no-repeat;"><img width="33" height="31" src="{{ $q->image }}"><span class="fs-5 fw-bold d-block">{{$q->value}}</span></span>
                        <p class="text-center mb-0">WITHDRAW FUND</p><span class="fw-bold d-inline-flex justify-content-center align-items-center position-absolute nav-icon-lock"></span>
                    </a></li>
                    @else
                    <li class="nav-item" style="opacity: 0.5"><a class="nav-link py-0" href="#"><span class="fw-bold d-inline-flex justify-content-center align-items-center position-absolute nav-icon-diamond">{{ $diff = Carbon\Carbon::parse($q->created_at)->diffInDays()  }}</span>
                        <p class="text-center mb-0">{{ $q->created_at->format('m/d/Y')}}</p><span class="d-inline-flex flex-column justify-content-center align-items-center bg-brown-container" style="background: url('Frame_ItemFrame01_Color_Brown.png') top left / 100% 100% no-repeat;"><img width="33" height="31" src="{{ $q->image }}"><span class="fs-5 fw-bold d-block">{{$q->value}}</span></span>
                        <p class="text-center mb-0">WITHDRAW FUND</p><span class="fw-bold d-inline-flex justify-content-center align-items-center position-absolute nav-icon-lock"></span>
                    </a></li>
                    @endIf
                @endforeach

                <!-- <li class="nav-item"><a class="nav-link py-0" href="#"><span class="fw-bold d-inline-flex justify-content-center align-items-center position-absolute nav-icon-diamond">1</span>
                        <p class="text-center mb-0">01/01/2023</p><span class="d-inline-flex flex-column justify-content-center align-items-center bg-brown-container" style="background: url('Frame_ItemFrame01_Color_Brown.png') top left / 100% 100% no-repeat;"><img width="33" height="31" src="{{ url('icon%20-%20coin.png') }}"><span class="fs-5 fw-bold d-block">500</span></span>
                        <p class="text-center mb-0">WITHDRAW FUND</p><span class="fw-bold d-inline-flex justify-content-center align-items-center position-absolute nav-icon-lock"></span>
                    </a></li>
                <li class="nav-item"><a class="nav-link py-0" href="#"><span class="fw-bold d-inline-flex justify-content-center align-items-center position-absolute nav-icon-diamond">1</span>
                        <p class="text-center mb-0">01/01/2023</p><span class="d-inline-flex flex-column justify-content-center align-items-center bg-brown-container" style="background: url('Frame_ItemFrame01_Color_Brown.png') top left / 100% 100% no-repeat;"><img width="33" height="31" src="{{ url('icon%20-%20coin.png') }}"><span class="fs-5 fw-bold d-block">500</span></span>
                        <p class="text-center mb-0">WITHDRAW FUND</p><span class="fw-bold d-inline-flex justify-content-center align-items-center position-absolute nav-icon-lock"></span>
                    </a></li>
                <li class="nav-item" style='opacity: 0.5'><a class="nav-link py-0" href="#"><span class="fw-bold d-inline-flex justify-content-center align-items-center position-absolute nav-icon-diamond">-</span>
                        <p class="text-center mb-0">-</p><span class="d-inline-flex flex-column justify-content-center align-items-center bg-brown-container" style="background: url('Frame_ItemFrame01_Color_Brown.png') top left / 100% 100% no-repeat;"><img width="33" height="31" src="{{ url('icon%20-%20coin.png') }}"><span class="fs-5 fw-bold d-block">500</span></span>
                        <p class="text-center mb-0">WITHDRAW FUND</p><span class="fw-bold d-inline-flex justify-content-center align-items-center position-absolute nav-icon-lock"></span>
                    </a></li> -->
            </ul>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
