<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Simple Sidebar - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    <link href="{{asset('css/index.css')}}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.css">



</head>
<body>
<section class="intro ">
    <div class="bg-image h-100" style="background-color: #f5f7fa;">
        <div class="mask d-flex align-items-center h-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <table class="table table-striped mb-0">
                                 <thead style="background-color: #2E97A7;">
                                 <tr>
                                     <th colspan="2">
                                         <h3>Child Report</h3>
                                     </th>
                                 </tr>
                                 <tbody>
                                 <tr>
                                     <th scope="col">Child Name</th>
                                     <td>{{$kid->name}}</td>
                                 </tr>
                                 <tr>
                                     <th scope="col">Birth Of Date</th>
                                     <td>{{$kid->date_of_birth}}</td>
                                 </tr>
                                 <tr>
                                     <th scope="col">Parent Name</th>
                                     <td>{{$kid->father->name}}</td>
                                 </tr>
                                <tr>
                                    <th scope="col">Status Indicator</th>
                                    <td>
                                        <div style="width:75%;">
                                            <div id="chart-container">
                                                {!! $chart->render() !!}
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                               </tbody>
                             </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>

<script src="{{ asset('js/app.js') }}"></script>
<!-- Core theme JS-->
<script src="{{asset('js/scripts.js')}}"></script>
</body>
</html>
