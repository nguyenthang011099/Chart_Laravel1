<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Ha Noi</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Fonts -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/css/bootstrap-select.min.css">
</head>
<body>



<table class="table">
    <thead>
    <tr>
        <th>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">MODEL
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a>Only 1</a></li>
                    <li><a>Compare</a></li>
                </ul>
            </div>
        </th>
        <th>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Graph
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a>Line</a></li>
                    <li><a>Bar</a></li>
                    <li><a>Spline</a></li>
                </ul>
            </div>
        </th>
        <th>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">City _!_ Province
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="hanoi">Ha Noi</a></li>
                    <li><a href="haiduong">Hai Duong</a></li>
                    <li><a href="hungyen">Hung Yen</a></li>
                    <li><a href="vinhphuc">Vinh Phuc</a></li>
                    <li><a href="hoabinh">Hoa Binh</a></li>
                    <li><a href="phutho">Phu Tho</a></li>
                    <li><a href="bacninh">Bac Ninh</a></li>
                    <li><a href="bacgiang">Bac Giang</a></li>
                </ul>
            </div>
        </th>
        <th>



            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Month
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="hanoi">January</a></li>
                    <li><a href="haiduong">February</a></li>
                    <li><a href="hungyen">March</a></li>
                    <li><a href="vinhphuc">April</a></li>
                    <li><a href="hoabinh">May</a></li>
                    <li><a href="phutho">June</a></li>
                    <li><a href="bacninh">July</a></li>
                    <li><a href="bacgiang">August</a></li>
                    <li><a href="hanoi">Septemper</a></li>
                    <li><a href="hanoi">October</a></li>
                    <li><a href="hanoi">November</a></li>
                    <li><a href="hanoi">December</a></li>
                </ul>
            </div>
        </th>
        <th>
            <form method="get" action="/hanoi/search">
                <div class="container">
                    <label>From Date</label>
                    <input type="date", name = "" max= "" id="fromDate">

                    <label>To Date</label>
                    <input type="date", name = "" max= "" id="toDate">
                    <style>
                        div{
                            margin-right:2em;
                        }
                    </style>
                </div>
            </form>

        </th>

    </tr>
    </thead>
</table>





<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 style="text-align:left">Weather Forecast in Ha Noi vs Hung Yen</h2>
            </div>
            <div class="panel-body">
                <canvas id="canvas" height=350" width="800"></canvas>
            </div>
        </div>
    </div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>
<script>







    var url = "{{url('charthnvshy')}}";
    var Years = new Array();
    var Labels = new Array();
    var WindHN = new Array();
    var TemperatureHN= new Array();
    var HumidHN= new Array();
    var WindHY=new Array();
    var TemperatureHY=new Array();
    var HumidHY=new Array();
    $(document).ready(function(){
        $.get(url, function(response){
            response.forEach(function(data){
                Years.push(data.ID);
                // Labels.push(data.stockName);
                WindHN.push(data.WindHN);
                TemperatureHN.push(data.TemperatureHN);
                HumidHN.push(data.HumidHN);
                WindHY.push(data.WindHY);
                TemperatureHY.push(data.TemperatureHY);
                HumidHY.push(data.HumidHY);

            });
            var ctx = document.getElementById("canvas").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels:Years,
                    datasets: [
                        {
                            label: 'WindHN',
                            data: WindHN,
                            borderColor:'rgba(42,176,17)',
                            borderWidth: 3
                        },
                        {
                            label: 'TemperatureHN',
                            data: TemperatureHN,
                            borderColor:'rgba(236,74,16)',
                            borderWidth: 3
                        },
                        {
                            label: 'HumidHN',
                            data: HumidHN,
                            borderColor:'rgba(16,140,240)',
                            borderWidth: 3
                        },
                        {
                            label: 'WindHY',
                            data: WindHY,
                            borderColor:'rgba(255, 51, 249)',
                            borderWidth: 3
                        },
                        {
                            label: 'TemperatureHY',
                            data: TemperatureHY,
                            borderColor:'rgba(255, 236, 51)',
                            borderWidth: 3
                        },
                        {
                            label: 'HumidHY',
                            data: HumidHY,
                            borderColor:'rgba(0,276,207)',
                            borderWidth: 3
                        }
                    ]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });
        });
    });
</script>
</body>
</html>
