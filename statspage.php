<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link href="css/stylesheet.css" rel="stylesheet"></link>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <title>Convict Records Product Website</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>

    <style>
        h1 {
            font-family: 'Raleway', sans-serif;
            font-size: 30px;
            text-align: center;
            letter-spacing: 1px;
            color: #faf5f5;
        }
        
        .sections a {
            font-size: 18px;
            font-family: 'Raleway', sans-serif;
            color: #faf5f5;
        }
        
        input {
            margin: 8px 0 8px 0;
            color: #000;
        }
        
        button {
            font-family: 'Raleway', sans-serif;
            text-transform: uppercase;
            font-weight: bolder;
        }
        
        td,
        th {
            color: #faf5f5;
        }
    </style>
</head>

<body style="background-color: #794a5e;">
    <nav class="navbar navbar-default" style="position:fixed;">

        <div class="navbar-collapse collapse" id="menu">
            <a href="planding.php" class="logo">Moreton Bay Convict Records</a>
            <ul class="nav navbar-nav">
                <li id="even">
                    <a href="planding.php">HOME</a>
                </li>
                <li id="even">
                    <a href="moreproduct.php">products</a>
                </li>
                <li id="even">
                    <a href="statspage.php">stats</a>
                </li>
                <li>
                    <a href="https://www.facebook.com/qldstatearchives"><img src="img/facebook-with-circle.png" alt="Facebook Logo"></a>
                </li>
                <li>
                    <a href="https://twitter.com/qsarchives"><img src="img/twitter-with-circle.png" alt="Twitter Logo"></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/qsarchives/"><img src="img/instagram-with-circle.png" alt="Instagram Logo"></a>
                </li>
            </ul>
        </div>




    </nav>
    <div id="stats" class="sections">
        <h1>Statistics</h1>
        <br>
        <script type="text/javascript">
            google.charts.load('current', {
                'packages': ['bar']
            });
            google.charts.setOnLoadCallback(drawStuff);

            function drawStuff() {

                var stringdata = "OLD STRING";
                jsonData = $.ajax({
                    url: "getstats.php",
                    success: function(msg) {

                        stringdata = msg;
                        //document.getElementById('fortest').innerHTML = stringdata;

                        var data = new google.visualization.DataTable(stringdata);

                        myjason = data.toJSON();


                        var options = {
                            title: 'Chess opening moves',
                            width: 900,
                            legend: {
                                position: 'none'
                            },
                            chart: {
                                title: 'Clicks per Day',
                                subtitle: 'For Informative Product Website'
                            },
                            bars: 'vertical', // Required for Material Bar Charts.
                            axes: {
                                x: {
                                    0: {
                                        side: 'bottom',
                                        label: 'Date'
                                    } // Top x-axis.
                                }
                            },
                            bar: {
                                groupWidth: "90%"
                            }
                        };

                        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
                        chart.draw(data, options);




                    }
                });




            };

            jsonData = $.ajax({
                url: "getstattable.php",
                success: function(msg) {
                    document.getElementById('forinfo').innerHTML = msg;

                }
            });
        </script>

        <div id="top_x_div" style="width: 900px; height: 500px;"></div>
        <br>
        <p> All information collected </p>
        <div id="forinfo"></div>
    </div>

</body>

</html>

</html>