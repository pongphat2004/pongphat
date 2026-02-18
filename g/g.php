<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>สรุปยอดขาย Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body { background-color: #f8f9fa; font-family: 'Sarabun', sans-serif; }
        .card { border: none; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        .table-hover tbody tr:hover { background-color: #f1f1f1; }
        .chart-container { position: relative; height: 300px; width: 100%; }
    </style>
</head>

<body>

<div class="container py-5">
    <div class="row mb-4">
        <div class="col">
            <h1 class="text-primary fw-bold">Dashboard สรุปยอดขาย</h1>
            <p class="text-muted">ผู้ดูแลระบบ: พงษ์พัฒน์ ถาวันดี</p>
        </div>
    </div>

    <?php
    include_once("connectdb.php");

    // ดึงข้อมูลมาเก็บใน Array ก่อน เพื่อนำไปใช้หลายที่ (Table, Bar, Donut)
    $sql = "SELECT MONTH(p_date) AS m, SUM(p_amount) AS total 
            FROM popsupermarket 
            GROUP BY MONTH(p_date) 
            ORDER BY m ASC";
    $rs = mysqli_query($conn, $sql);

    $months = [];
    $totals = [];
    $grandTotal = 0;

    while ($row = mysqli_fetch_assoc($rs)) {
        $months[] = "เดือน " . $row['m'];
        $totals[] = $row['total'];
        $grandTotal += $row['total'];
    }
    ?>

    <div class="row g-4">
        <div class="col-lg-5">
            <div class="card h-100 p-4">
                <h5 class="card-title mb-4 fw-bold">รายละเอียดรายเดือน</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>เดือน</th>
                                <th class="text-end">ยอดขายรวม</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($months as $index => $mName): ?>
                            <tr>
                                <td><?php echo $mName; ?></td>
                                <td class="text-end text-primary fw-bold">
                                    <?php echo number_format($totals[$index], 0); ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot class="table-dark">
                            <tr>
                                <td><strong>รวมทั้งหมด</strong></td>
                                <td class="text-end"><strong><?php echo number_format($grandTotal, 0); ?></strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="row g-4">
                <div class="col-12">
                    <div class="card p-4">
                        <h5 class="card-title mb-3 fw-bold">เปรียบเทียบยอดขาย (Bar)</h5>
                        <div class="chart-container">
                            <canvas id="barChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card p-4">
                        <h5 class="card-title mb-3 fw-bold">สัดส่วนยอดขาย (Donut)</h5>
                        <div class="chart-container">
                            <canvas id="donutChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// ข้อมูลจาก PHP ส่งมายัง JavaScript
const labels = <?php echo json_encode($months); ?>;
const dataValues = <?php echo json_encode($totals); ?>;

// ตั้งค่าสีแบบสุ่ม/สวยงาม
const colors = [
    'rgba(54, 162, 235, 0.7)', 'rgba(255, 99, 132, 0.7)', 
    'rgba(75, 192, 192, 0.7)', 'rgba(255, 206, 86, 0.7)', 
    'rgba(153, 102, 255, 0.7)', 'rgba(255, 159, 64, 0.7)'
];

// กราฟแท่ง (Bar Chart)
new Chart(document.getElementById('barChart'), {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [{
            label: 'ยอดขาย',
            data: dataValues,
            backgroundColor: colors[0],
            borderRadius: 8
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { display: false } }
    }
});

// กราฟโดนัท (Donut Chart)
new Chart(document.getElementById('donutChart'), {
    type: 'doughnut',
    data: {
        labels: labels,
        datasets: [{
            data: dataValues,
            backgroundColor: colors,
            hoverOffset: 10
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: { position: 'right' }
        }
    }
});
</script>

<?php mysqli_close($conn); ?>
</body>
</html>