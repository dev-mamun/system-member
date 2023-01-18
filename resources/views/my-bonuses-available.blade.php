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
        <div class="d-none d-lg-block">
            <ul class="nav nav-tabs nav-my-bonuses">
                <li class="nav-item"><a class="nav-link active d-inline-flex align-items-center" href="#"><span class="d-flex flex-column align-items-end"><span style="font-size: 12px;line-height: 12px;">AVAILABLE</span><span class="fs-4" style="line-height: 20px;">55.50</span></span><img src="{{ url('icon%20-%20energy.png') }}" class="ms-1"></a></li>
                <li class="nav-item"><a class="nav-link d-inline-flex align-items-center" href="#"><span class="d-flex flex-column align-items-end"><span style="font-size: 12px;line-height: 12px;">REQUESTED</span><span class="fs-4" style="line-height: 20px;">235.00</span></span><img src="{{ url('icon%20-%20chat%20small.png') }}" class="ms-1"></a></li>
                <li class="nav-item"><a class="nav-link d-inline-flex align-items-center" href="#"><span class="d-flex flex-column align-items-end"><span style="font-size: 12px;line-height: 12px;">RECEIVED</span><span class="fs-4" style="line-height: 20px;">1,250.00</span></span><img src="{{ url('icon%20-%20bag.png') }}" class="ms-1"></a></li>
                <li class="nav-item"><a class="nav-link d-inline-flex align-items-center" href="#"><span class="d-flex flex-column align-items-end"><span class="fs-5 text-end" style="line-height: 16px;">WITHDRAW&nbsp;<br>ALL</span></span><img src="{{ url('icon%20-%20withdraw.png') }}" class="ms-1"></a></li>
            </ul>
        </div>
        <div>
            <h1 class="text-uppercase text-light d-flex mb-0"><img src="{{ url('icon%20-%20bonuses.png') }}" width="40" height="40" class="me-2">MY BONUSES</h1>
        </div>
        <div>
            <!-- Start: Profile Button --><a class="btn btn-home p-0" role="button" href="/dashboard"><img class="flex-shrink-0" width="40" height="46" src="{{ url('icon%20-%20home.png') }}"></a><!-- End: Profile Button -->
        </div>
    </header>
    <nav class="d-lg-none">
        <div class="container">
            <ul class="nav nav-tabs justify-content-center nav-my-bonuses">
                <li class="nav-item"><a class="nav-link active d-inline-flex align-items-center" href="#"><span class="d-flex flex-column align-items-end"><span style="font-size: 12px;line-height: 12px;">AVAILABLE</span><span class="fs-4" style="line-height: 20px;">55.50</span></span><img src="{{ url('icon%20-%20energy.png') }}" class="ms-1"></a></li>
                <li class="nav-item"><a class="nav-link d-inline-flex align-items-center" href="#"><span class="d-flex flex-column align-items-end"><span style="font-size: 12px;line-height: 12px;">REQUESTED</span><span class="fs-4" style="line-height: 20px;">235.00</span></span><img src="{{url('icon%20-%20chat%20small.png') }}" class="ms-1"></a></li>
                <li class="nav-item"><a class="nav-link d-inline-flex align-items-center" href="#"><span class="d-flex flex-column align-items-end"><span style="font-size: 12px;line-height: 12px;">RECEIVED</span><span class="fs-4" style="line-height: 20px;">1,250.00</span></span><img src="{{ url('icon%20-%20bag.png') }}" class="ms-1"></a></li>
                <li class="nav-item"><a class="nav-link d-inline-flex align-items-center" href="#"><span class="d-flex flex-column align-items-end"><span class="fs-5 text-end" style="line-height: 16px;">WITHDRAW&nbsp;<br>ALL</span></span><img src="{{ url('icon%20-%20withdraw.png') }}" class="ms-1"></a></li>
            </ul>
        </div>
    </nav>
    <div class="py-4">
        <div class="table-responsive">
            <table class="table table-dark custom-table mb-0">
                <thead>
                    <tr class="table-dark-header">
                        <th>COUNT</th>
                        <th>USERNAME</th>
                        <th>BONUS TYPE</th>
                        <th>AMOUNT</th>
                        <th>STATUS</th>
                        <th>DATE PAID</th>
                        <th>PAID BY</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cell 1</td>
                        <td>Cell 2</td>
                        <td>Cell 2</td>
                        <td>Cell 2</td>
                        <td>Cell 2</td>
                        <td>—</td>
                        <td>—</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>