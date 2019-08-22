<!DOCTYPE html>
<html>
<head>
<title>Menampilkan Data Menggunakan PHP and Chart.js</title>
<style type="text/css">
BODY {
    width: 550PX;
}

#chart-container {
    width: 100%;
    height: auto;
}
</style>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>


</head>
<body>
    <div id="chart-container">
        <canvas id="graphCanvas"></canvas>
    </div>

    <script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("datajanda.php",
                function (data)
                {
                    console.log(data);
                     var nama_daerah = [];
                    var jumlah = [];

                    for (var i in data) {
                        nama_daerah.push(data[i].nama_daerah);
                        jumlah.push(data[i].jumlah);
                    }

                    var chartdata = {
                        labels: nama_daerah,
                        datasets: [
                            {
                                label: 'Statistik Janda',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: jumlah
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
        </script>

</body>
</html>
