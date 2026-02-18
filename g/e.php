<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>สรุปยอดขายตามประเทศ - พงษ์พัฒน์ ถาวันดี</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-light">

<div class="container my-4">
    <h2 class="text-center mb-4">พงษ์พัฒน์ ถาวันดี</h2>
    
    <div class="row g-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white text-center">สรุปยอดขายตามประเทศ</div>
                <div class="card-body p-0">
                    <table class="table table-hover mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th>ประเทศ</th>
                                <th class="text-end">ยอดขายรวม (บาท)</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        include_once("connectdb.php");
                        $sql = "SELECT p_country, SUM(p_amount) AS total FROM popsupermarket GROUP BY p_country";
                        $rs = mysqli_query($conn, $sql);

                        $grandTotal = 0;
                        $countries = [];
                        $totals = [];

                        while ($data = mysqli_fetch_array($rs)) {
                            $grandTotal += $data['total'];
                            // เก็บข้อมูลไว้ทำกราฟ
                            $countries[] = $data['p_country'];
                            $totals[] = $data['total'];
                        ?>
                        <tr>
                            <td><?php echo $data['p_country']; ?></td>
                            <td class="text-end"><?php echo number_format($data['total'], 0); ?></td>
                        </tr>
                        <?php } ?>
                        </tbody>
                        <tfoot class="table-secondary">
                            <tr>
                                <th class="text-end">รวมทั้งหมด</th>
                                <th class="text-end text-primary"><?php echo number_format($grandTotal, 0); ?></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h6 class="text-center border-bottom pb-2">ยอดขายแยกตามประเทศ (Bar)</h6>
                    <canvas id="barChart"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h6 class="text-center border-bottom pb-2">สัดส่วนการขาย (Pie)</h6>
                    <canvas id="pieChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// เตรียมข้อมูลจาก PHP เข้าสู่ JavaScript
const labels = <?php echo json_encode($countries); ?>;
const dataValues = <?php echo json_encode($totals); ?>;

// กำหนดสีสดใสสำหรับกราฟ
const chartColors = [
    'rgba(255, 99, 132, 0.7)',
    'rgba(54, 162, 235, 0.7)',
    'rgba(255, 206, 86, 0.7)',
    'rgba(75, 192, 192, 0.7)',
    'rgba(153, 102, 255, 0.7)',
    'rgba(255, 159, 64, 0.7)'
];

// 1. Bar Chart
new Chart(document.getElementById('barChart'), {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [{
            label: 'ยอดขายรวม',
            data: dataValues,
            backgroundColor: chartColors,
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: { legend: { display: false } }
    }
});

// 2. Pie Chart
new Chart(document.getElementById('pieChart'), {
    type: 'pie',
    data: {
        labels: labels,
        datasets: [{
            data: dataValues,
            backgroundColor: chartColors,
            hoverOffset: 4
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { position: 'bottom' }
        }
    }
});
</script>

<?php mysqli_close($conn); ?>
</body>
</html>