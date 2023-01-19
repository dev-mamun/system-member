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
            <div class="d-flex justify-content-end align-items-center ribbon-blue position-relative px-4 mt-2"><a class="btn position-absolute" role="button" href="#"></a>
                <h3 class="text-light mb-0">5,000.00</h3><img class="position-absolute" width="43" height="46" src="{{ url('icon%20-%20coin.png') }}">
            </div>
        </div>
        <div class="d-xl-block">
            <h1 class="text-uppercase text-light d-flex mb-0 mt-3 ps-3 ps-xl-4"><img width="35" height="35" src="{{ url('icon%20-%20pouch.png') }}" class="me-2">ADD     FUNDS</h1>
        </div>
        <div>
            <!-- Start: Profile Button --><a class="btn btn-home p-0" role="button" href="/dashboard"><img class="flex-shrink-0" width="40" height="46" src="{{ url('icon%20-%20home.png') }}"></a><!-- End: Profile Button -->
        </div>
    </header>
    <div class="py-4">
        <div class="container h-100">
            <ul class="nav nav-tabs justify-content-center nav-add-funds">
            <li data-bs-toggle="modal" data-bs-target="#modal-500" class="nav-item"><a class="nav-link d-inline-flex flex-column justify-content-center align-items-center py-0" href="javascript:void(0)" style="background: url('500.png') top left / 100% 100% no-repeat;"></a></li>
                <li class="nav-item" data-bs-toggle="modal" data-bs-target="#modal-1000" class="nav-item"><a class="nav-link d-inline-flex flex-column justify-content-center align-items-center py-0" href="javascript:void(0)" style="background: url('1k.png') top left / 100% 100% no-repeat;"></a></li>
                <li class="nav-item" data-bs-toggle="modal" data-bs-target="#modal-3000"><a class="nav-link d-inline-flex flex-column justify-content-center align-items-center py-0" href="javascript:void(0)" style="background: url('3k.png') top left / 100% 100% no-repeat;"></a></li>
                <li class="nav-item" data-bs-toggle="modal" data-bs-target="#modal-5000"><a class="nav-link d-inline-flex flex-column justify-content-center align-items-center py-0" href="javascript:void(0)" style="background: url('5k.png') top left / 100% 100% no-repeat;"></a></li>
                <li class="nav-item" data-bs-toggle="modal" data-bs-target="#modal-10000"><a class="nav-link d-inline-flex flex-column justify-content-center align-items-center py-0" href="javascript:void(0)" style="background: url('10k up.png') top left / 100% 100% no-repeat;"></a></li>
            </ul>
            <div class="modal fade custom-modal" role="dialog" tabindex="-1" id="modal-500">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header d-block py-2 rounded-0">
                            <h6 class="text-uppercase text-center text-white modal-title">YOU ARE ABOUT TO ADD</h6><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ul class="nav nav-tabs justify-content-center nav-add-funds">
                                <li class="nav-item mb-0 " ><a class="nav-link d-inline-flex flex-column justify-content-center align-items-center py-0" href="javascript:void(0)" style="background: url(&quot;500.png&quot;) top left / 100% 100% no-repeat;" data-bs-toggle="modal" data-bs-target="#modal-1"></a></li>
                            </ul>
                        </div>
                        <div class="modal-footer d-block">
                            <!-- Start: Action Button -->
                            <div class="d-flex mx-auto m-0 w-50">
                                <div class="d-grid w-50"><button class="btn btn-danger text-uppercase fw-bold" type="button" data-bs-dismiss="modal">CHANGE</button></div>
                                <div class="d-grid w-50"><button class="btn btn-success text-uppercase fw-bold" type="submit" data-bs-toggle="modal" data-bs-target="#modal-1-500">PROCEED</button></div>
                            </div><!-- End: Action Button -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade custom-modal" role="dialog" tabindex="-1" id="modal-1000">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header d-block py-2 rounded-0">
                            <h6 class="text-uppercase text-center text-white modal-title">YOU ARE ABOUT TO ADD</h6><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ul class="nav nav-tabs justify-content-center nav-add-funds">
                                <li class="nav-item mb-0"><a class="nav-link d-inline-flex flex-column justify-content-center align-items-center py-0" href="javascript:void(0)" style="background: url(&quot;1k.png&quot;) top left / 100% 100% no-repeat;" data-bs-toggle="modal" data-bs-target="#modal-1"></a></li>
                            </ul>
                        </div>
                        <div class="modal-footer d-block">
                            <!-- Start: Action Button -->
                            <div class="d-flex mx-auto m-0 w-50">
                                <div class="d-grid w-50"><button class="btn btn-danger text-uppercase fw-bold" type="button" data-bs-dismiss="modal">CHANGE</button></div>
                                <div class="d-grid w-50"><button class="btn btn-success text-uppercase fw-bold" type="submit" data-bs-toggle="modal" data-bs-target="#modal-1-1000">PROCEED</button></div>
                            </div><!-- End: Action Button -->
                        </div>
                    </div>
                </div>
            </div>
 
            <div class="modal fade custom-modal" role="dialog" tabindex="-1" id="modal-3000">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header d-block py-2 rounded-0">
                            <h6 class="text-uppercase text-center text-white modal-title">YOU ARE ABOUT TO ADD</h6><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ul class="nav nav-tabs justify-content-center nav-add-funds">
                                <li class="nav-item mb-0"><a class="nav-link d-inline-flex flex-column justify-content-center align-items-center py-0" href="javascript:void(0)" style="background: url(&quot;3k.png&quot;) top left / 100% 100% no-repeat;" data-bs-toggle="modal" data-bs-target="#modal-1"></a></li>
                            </ul>
                        </div>
                        <div class="modal-footer d-block">
                            <!-- Start: Action Button -->
                            <div class="d-flex mx-auto m-0 w-50">
                                <div class="d-grid w-50"><button class="btn btn-danger text-uppercase fw-bold" type="button" data-bs-dismiss="modal">CHANGE</button></div>
                                <div class="d-grid w-50"><button class="btn btn-success text-uppercase fw-bold" type="submit" data-bs-toggle="modal" data-bs-target="#modal-1-3000">PROCEED</button></div>
                            </div><!-- End: Action Button -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade custom-modal" role="dialog" tabindex="-1" id="modal-5000">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header d-block py-2 rounded-0">
                            <h6 class="text-uppercase text-center text-white modal-title">YOU ARE ABOUT TO ADD</h6><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ul class="nav nav-tabs justify-content-center nav-add-funds">
                                <li class="nav-item mb-0"><a class="nav-link d-inline-flex flex-column justify-content-center align-items-center py-0" href="javascript:void(0)" style="background: url(&quot;5k.png&quot;) top left / 100% 100% no-repeat;" data-bs-toggle="modal" data-bs-target="#modal-1"></a></li>
                            </ul>
                        </div>
                        <div class="modal-footer d-block">
                            <!-- Start: Action Button -->
                            <div class="d-flex mx-auto m-0 w-50">
                                <div class="d-grid w-50"><button class="btn btn-danger text-uppercase fw-bold" type="button" data-bs-dismiss="modal">CHANGE</button></div>
                                <div class="d-grid w-50"><button class="btn btn-success text-uppercase fw-bold" type="submit" data-bs-toggle="modal" data-bs-target="#modal-1-5000">PROCEED</button></div>
                            </div><!-- End: Action Button -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade custom-modal" role="dialog" tabindex="-1" id="modal-10000">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header d-block py-2 rounded-0">
                            <h6 class="text-uppercase text-center text-white modal-title">YOU ARE ABOUT TO ADD</h6><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ul class="nav nav-tabs justify-content-center nav-add-funds">
                                <li class="nav-item mb-0"><a class="nav-link d-inline-flex flex-column justify-content-center align-items-center py-0" href="javascript:void(0)" style="background: url(&quot;10k up.png&quot;) top left / 100% 100% no-repeat;" data-bs-toggle="modal" data-bs-target="#modal-1"></a></li>
                            </ul>
                        </div>
                        <div class="modal-footer d-block">
                            <!-- Start: Action Button -->
                            <div class="d-flex mx-auto m-0 w-50">
                                <div class="d-grid w-50"><button class="btn btn-danger text-uppercase fw-bold" type="button" data-bs-dismiss="modal">CHANGE</button></div>
                                <div class="d-grid w-50"><button class="btn btn-success text-uppercase fw-bold" type="submit" data-bs-toggle="modal" data-bs-target="#modal-1-10000">PROCEED</button></div>
                            </div><!-- End: Action Button -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade custom-modal" role="dialog" tabindex="-1" id="modal-1-500">
            <form method="POST" action="funds/add" enctype="multipart/form-data">
                {{ @csrf_field()}}
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header d-block py-2 rounded-0">
                            <h6 class="text-uppercase text-center text-white modal-title">PLEASE ONLY SEND GCASH JUAN PERDIDO</h6><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="background-color:white;">
                           <span>Image of the receipt</span>
                           <input type="file" name="receipt"/>
                        </div>
                        <div class="modal-footer d-block">
                            <!-- Start: Action Button -->
                            <div class="d-flex mx-auto m-0 w-50">
                                <div class="d-grid w-50"><button class="btn btn-danger text-uppercase fw-bold" type="button" data-bs-dismiss="modal">CHANGE</button></div>
                                <div class="d-grid w-50"><input  class="btn btn-success text-uppercase fw-bold" value="UPLOAD" type="submit"/></div>
                                <input type="hidden" value="500" name="value"/>
                            </div><!-- End: Action Button -->
                        </div>
                    </div>
                </div>
            </form>
            </div>

            <div class="modal fade custom-modal" role="dialog" tabindex="-1" id="modal-1-1000">
            <form method="POST" action="funds/add" enctype="multipart/form-data">
                {{ @csrf_field()}}
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header d-block py-2 rounded-0">
                            <h6 class="text-uppercase text-center text-white modal-title">PLEASE ONLY SEND GCASH JUAN PERDIDO</h6><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="background-color:white;">
                           <span>Image of the receipt</span>
                           <input type="file" name="receipt"/>
                        </div>
                        <div class="modal-footer d-block">
                            <!-- Start: Action Button -->
                            <div class="d-flex mx-auto m-0 w-50">
                                <div class="d-grid w-50"><button class="btn btn-danger text-uppercase fw-bold" type="button" data-bs-dismiss="modal">CHANGE</button></div>
                                <div class="d-grid w-50"><input  class="btn btn-success text-uppercase fw-bold" value="UPLOAD" type="submit"/></div>
                                <input type="hidden" value="500" name="value"/>
                            </div><!-- End: Action Button -->
                        </div>
                    </div>
                </div>
            </form>
            </div>

            <div class="modal fade custom-modal" role="dialog" tabindex="-1" id="modal-1-3000">
            <form method="POST" action="funds/add" enctype="multipart/form-data">
                {{ @csrf_field()}}
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header d-block py-2 rounded-0">
                            <h6 class="text-uppercase text-center text-white modal-title">PLEASE ONLY SEND GCASH JUAN PERDIDO</h6><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="background-color:white;">
                           <span>Image of the receipt</span>
                           <input type="file" name="receipt"/>
                        </div>
                        <div class="modal-footer d-block">
                            <!-- Start: Action Button -->
                            <div class="d-flex mx-auto m-0 w-50">
                                <div class="d-grid w-50"><button class="btn btn-danger text-uppercase fw-bold" type="button" data-bs-dismiss="modal">CHANGE</button></div>
                                <div class="d-grid w-50"><input  class="btn btn-success text-uppercase fw-bold" value="UPLOAD" type="submit"/></div>
                                <input type="hidden" value="3000" name="value"/>
                            </div><!-- End: Action Button -->
                        </div>
                    </div>
                </div>
            </form>
            </div>

            <div class="modal fade custom-modal" role="dialog" tabindex="-1" id="modal-1-5000">
            <form method="POST" action="funds/add" enctype="multipart/form-data">
                {{ @csrf_field()}}
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header d-block py-2 rounded-0">
                            <h6 class="text-uppercase text-center text-white modal-title">PLEASE ONLY SEND GCASH JUAN PERDIDO</h6><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="background-color:white;">
                           <span>Image of the receipt</span>
                           <input type="file" name="receipt"/>
                        </div>
                        <div class="modal-footer d-block">
                            <!-- Start: Action Button -->
                            <div class="d-flex mx-auto m-0 w-50">
                                <div class="d-grid w-50"><button class="btn btn-danger text-uppercase fw-bold" type="button" data-bs-dismiss="modal">CHANGE</button></div>
                                <div class="d-grid w-50"><input  class="btn btn-success text-uppercase fw-bold" value="UPLOAD" type="submit"/></div>
                                <input type="hidden" value="5000" name="value"/>
                            </div><!-- End: Action Button -->
                        </div>
                    </div>
                </div>
            </form>
            </div>

            <div class="modal fade custom-modal" role="dialog" tabindex="-1" id="modal-1-10000">
            <form method="POST" action="funds/add" enctype="multipart/form-data">
                {{ @csrf_field()}}
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header d-block py-2 rounded-0">
                            <h6 class="text-uppercase text-center text-white modal-title">PLEASE ONLY SEND GCASH JUAN PERDIDO</h6><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="background-color:white;">
                           <span>Image of the receipt</span>
                           <input type="file" name="receipt"/>
                        </div>
                        <div class="modal-footer d-block">
                            <!-- Start: Action Button -->
                            <div class="d-flex mx-auto m-0 w-50">
                                <div class="d-grid w-50"><button class="btn btn-danger text-uppercase fw-bold" type="button" data-bs-dismiss="modal">CHANGE</button></div>
                                <div class="d-grid w-50"><input  class="btn btn-success text-uppercase fw-bold" value="UPLOAD" type="submit"/></div>
                                <input type="hidden" value="10000" name="value"/>
                            </div><!-- End: Action Button -->
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>