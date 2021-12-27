<?php
require 'function.php';

$tiket = query("SELECT * FROM tiket");

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$html = '<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .judul{
            text-align: center;
        }
    </style>

    <title>Penjualan Tiket</title>
  </head>
  <body>

      <h1 class="judul">Jadwal Tiket</h1>
    
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>NO</th>
            <th>ASAL</th>
            <th>TUJUAN</th>
            <th>TANGGAL</th>
            <th>JADWAL</th>
            <th>HARGA</th>
            <th>SEAT</th>
            <th>JAM KEBERANGKATAN</th>
        </tr>';

            $i=1;
            foreach($tiket as $tkt){
                $html .= '<tr>
                    <td>'. $i++ .'</td>
                    <td>'. $tkt["asal"] .'</td>
                    <td>'. $tkt["tujuan"] .'</td>
                    <td>'. $tkt["tanggal"] .'</td>
                    <td>'. $tkt["jadwal"] .'</td>
                    <td>'. $tkt["harga"] .'</td>
                    <td>'. $tkt["seat"] .'</td>
                    <td>'. $tkt["j_keberangkatan"] .'</td>
                </tr>';
            }
                
                    
                    
  $html .= '</table>
  </body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output();

?>