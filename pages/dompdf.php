<?php
include "../koneksi.php";
// reference the Dompdf namespace
require_once '../dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$tampil = "SELECT * FROM tbtransaksi";
$query = mysqli_query($db, $tampil);

$html = '<center><h3>Daftar Transaksi</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr>
 <th>No</th>
 <th>Id Transaksi</th>
 <th>Id Anggota</th>
 <th>Id Buku</th>
 <th>Tanggal Pinjam</th>
 <th>Tanggal Kembali</th>
 </tr>';
$no = 1;
while ($row = mysqli_fetch_array($query)) {
	$html .= "<tr>
 <td>" . $no . "</td>
 <td>" . $row['idtransaksi'] . "</td>
 <td>" . $row['idanggota'] . "</td>
 <td>" . $row['idbuku'] . "</td>
 <td>" . $row['tglpinjam'] . "</td>
 <td>" . $row['tglkembali'] . "</td>
 </tr>";
	$no++;
}
$html .= "</html>";
// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
