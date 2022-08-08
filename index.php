<?php



include('koneksi.php');

//query
$result = mysqli_query($con, "SELECT * FROM kata");

$data = array();

while ($dataKamus = mysqli_fetch_assoc($result)) {
    $data[] = $dataKamus['indonesia'];
}

$jumlahData = count($data);
$cari = 'abu';
$status = false;
$dataKe = 0;

$datetime1 = new DateTime();

for ($i = 0; $i < $jumlahData; $i++) {
    $dataKe++;
    if ($data[$i] == $cari) {
        $index = $dataKe;
        $status = true;
    }
}

$datetime2 = new DateTime();

if ($status) {
    echo 'wah ketemu ni ada di data ke ' . $index;
    $interval = $datetime1->diff($datetime2);
    echo '<br>' . $interval->format('%s.%f detik');
} else {
    echo 'yahh, aku belum bisa nemuin. Sabar yaaa....';
}
