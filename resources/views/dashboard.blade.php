<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Shira2 UI - member 1.0</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet" href="{{ url('utilities.css') }}">
    <link rel="stylesheet" href="{{url('styles.css') }}">
</head>

<body class="h-100 bg-stars">
    <div class="d-flex flex-column h-100">
        <header class="d-flex justify-content-between header-home pt-3 pe-3 pt-xl-4 pe-xl-4">
            <div>
                <div class="d-flex justify-content-between align-items-center ribbon-blue position-relative px-4 mt-2"><span class="fw-bold">Active Funds</span>
                    <h3 class="text-light mb-0">5,000.00</h3><img class="position-absolute" width="43" height="46" src="{{ url('icon%20-%20coin.png')}}">
                </div>
                <div class="d-flex justify-content-between align-items-center ribbon-yellow position-relative px-4 mt-2 mt-xl-3"><span class="fw-bold">Active Funds</span>
                    <h4 class="mb-0">0.00</h4><img class="position-absolute" width="43" height="46" src="{{ url('Icon_Bag.png') }}">
                </div>
            </div><!-- Start: Profile Button --><a class="btn btn-profile p-0" role="button" href="{{ route('my-profile') }}"><span class="d-inline-flex flex-column"><img class="rounded-circle flex-shrink-0 mb-1" width="56" height="56" src="{{ url('icon%20-%20profile%20gray.png') }}">
                    <p class="mb-0">MY PROFILE</p>
                </span></a><!-- End: Profile Button -->
        </header>
        <div class="flex-grow-1 py-2 py-xl-5">
            <div class="container h-100">
                <div class="row row-cols-1 row-cols-xl-3 h-100">
                    <div class="col align-self-center">
                        <ul class="nav nav-tabs justify-content-center flex-xl-column align-items-xl-center home-nav">
                            <li class="nav-item me-xl-0 mb-0 mb-xl-0"><a class="nav-link d-inline-flex flex-column justify-content-center align-items-center" href="/add-funds" style="background: url('Btn_MainButton_Green.png') top left / 100% 100% no-repeat;"><img src="{{ url('icon%20-%20pouch.png') }}"><span class="mt-1">ADD FUNDS</span></a></li>
                            <li class="nav-item mb-0"><a class="nav-link d-inline-flex flex-column justify-content-center align-items-center" href="/withdrawal" style="background: url('Btn_MainButton_Red.png') top left / 100% 100% no-repeat;"><img src="{{ url('Icon_ShopIcon_Gold3.png') }}"><span class="mt-1">WITHDRAW</span></a></li>
                        </ul>
                    </div>
                    <div class="col align-self-center">
                        <div class="text-center"><img class="w-75 w-xl-100" src="{{ url('wheel.png') }}"></div>
                    </div>
                    <div class="col align-self-center">
                        <div class="d-flex justify-content-center flex-xl-column align-items-xl-center"><a class="btn btn-danger btn-lg text-nowrap text-uppercase fw-bold" style="font-size: 30px;width: 122px;padding-bottom:0px;padding-top:0px" role="button" href="#">SPIN</a><a class="btn btn-success btn-lg text-nowrap text-uppercase fw-bold" style="padding-left:15px;padding-right:10px;padding-top:0px;padding-bottom:0px" role="button" href="#"><span style="color: #000;">DAILY SPINS AVAILABLE:&nbsp;</span><br><span style='font-size: 20px'>7/7</span></a></div>
                    </div>
                </div>
            </div>
        </div><!-- Start: Bottom Navbar -->
        <footer>
            <div class="container">
                <ul class="nav nav-tabs justify-content-center home-nav">
                    <li class="nav-item"><a class="nav-link d-inline-flex flex-column justify-content-center align-items-center" href="/my-funds"><img src="{{ url('icon%20-%20pullout.png') }}"><span class="mt-1">FUND HISTORY</span></a></li>
                    <li class="nav-item"><a class="nav-link d-inline-flex flex-column justify-content-center align-items-center" href="/daily-spins"><img src="{{ url('icon%20-%20spin%20wheel.png') }}"><span class="mt-1">DAILY SPINS</span></a></li>
                    <li class="nav-item"><a class="nav-link d-inline-flex flex-column justify-content-center align-items-center" href="/my-reference"><img src=" {{ url('icon%20-%20member.png') }}"><span class="mt-1">REFERRALS</span></a></li>
                    <li class="nav-item"><a class="nav-link d-inline-flex flex-column justify-content-center align-items-center" href="/bonus"><img src="{{ url('icon%20-%20bonuses.png') }}"><span class="mt-1">BONUSES</span></a></li>
                    <li class="nav-item"><a class="nav-link d-inline-flex flex-column justify-content-center align-items-center" href="/withdrawal"><img src="{{ url('Icon_ShopIcon_Gold3.png') }}"><span class="mt-1">WITHDRAWALS</span></a></li>
                    <li class="nav-item"><a class="nav-link d-inline-flex flex-column justify-content-center align-items-center" href="/my-bonus-items"><img src="{{ url('Icon_ImageIcon_Gift_Blue.png') }}"><span class="mt-1">BONUS ITEMS</span></a></li>
                    <li class="nav-item"><a class="nav-link d-inline-flex flex-column justify-content-center align-items-center" href="/my-raffle-ticket"><img src="{{ url('icon%20-%20raffle%20ticket.png') }}"><span class="mt-1">RAFFLE TICKETS</span></a></li>
                </ul>
            </div>
        </footer><!-- End: Bottom Navbar -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
