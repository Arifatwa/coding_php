<?php
$hargaSemen = 60000;
$jumlahSemen = 150;
$totalHarga = $hargaSemen * $jumlahSemen;

if($jumlahSemen > 100){
    $pajak = 2 / 100;
    $totalHargaSetelahPajak = $totalHarga - $pajak;


}elseif($jumlahSemen > 200){
    $pajak = 5 / 100;
    $totalHargaSetelahPajak = $totalHarga - $pajak;
}else{
    $pajak = 0;
    $hargaJual = $totalHarga;

}
echo " hasil =". number_format($totalHargaSetelahPajak, 2, ',', '.');

 


// // Harga per sak semen
$harga_per_sak = 60000;

// Jumlah sak yang akan dibeli
$jumlah_sak = 150;

// Hitung total harga
$total_harga = $harga_per_sak * $jumlah_sak;

// Berikan diskon jika jumlah pembelian lebih dari atau sama dengan 100 sak
if ($jumlah_sak >= 100) {
    $diskon = $total_harga * 2 / 100;
    $total_harga -= $diskon;
}

// Berikan pajak jika jumlah pembelian lebih dari atau sama dengan 200 sak
if ($jumlah_sak >= 200) {
    $pajak = $total_harga * 5 / 100;
    $total_harga += $pajak;
}

// Tampilkan total harga
echo "Total harga penjualan semen adalah: Rp " . number_format($total_harga, 2, ',', '.');






?>

