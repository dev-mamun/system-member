<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Shira2 UI - member 1.0</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet" href="{{url('utilities.css') }}">
    <link rel="stylesheet" href="{{ url('styles.css') }}">
</head>

<body>
    <header class="d-flex justify-content-between py-3 px-3 pt-xl-4 px-xl-4">
        <div class=" d-lg-block">
        </div>
        <div>
            <h1 class="text-uppercase text-light d-flex mb-0"><img src="{{ url('icon%20-%20raffle%20ticket.png') }}" width="40" height="40" class="me-2">MY RAFFLE TICKECTS</h1>
        </div>
        <div>
            <!-- Start: Profile Button --><a class="btn btn-home p-0" role="button" href="/dashboard"><img class="flex-shrink-0" width="40" height="46" src="{{ url('icon%20-%20home.png') }}"></a><!-- End: Profile Button -->
        </div>
    </header>
    <div class="py-4">
        <div class="table-responsive">
            <table class="table table-dark custom-table mb-0">
                <thead>
                    <tr class="table-dark-header">
                        <th>COUNT</th>
                        <th>FUND DATE</th>
                        <th>AMOUNT</th>
                        <th>TICKECT#</th>
                        <th>STATUS</th>
                        <th>RAFFLE DATE</th>
                        <th>OUTCOME</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cell 1</td>
                        <td>Cell 2</td>
                        <td>Cell 2</td>
                        <td>Cell 2</td>
                        <td>--</td>
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