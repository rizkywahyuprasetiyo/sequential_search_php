<?php



include('koneksi.php');

//query
$result = mysqli_query($con, "SELECT * FROM kata");

$datetime1 = new DateTime();

$data = array();

while ($dataKamus = mysqli_fetch_assoc($result)) {
    $data[] = $dataKamus['indonesia'];
}

$jumlahData = count($data);
$cari = 'asuk';
$status = false;
$dataKe = 0;

for ($i = 0; $i < $jumlahData; $i++) {
    $dataKe++;
    if ($data[$i] == $cari) {

        $status = true;

        if ($status) {
            echo 'wah ketemu ni ada di data ke ' . $dataKe;
            $datetime2 = new DateTime();
            $interval = $datetime1->diff($datetime2);
            echo '<br>' . $interval->format('%s.%f detik');
        } else {
            echo 'yahh, aku belum bisa nemuin. Sabar yaaa....';
        }
    }
}
