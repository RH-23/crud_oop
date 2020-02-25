<?php
$content = "
<page>
<h1>Example d'utilisation</h1>
<br>
Ceci est un <b>example d'utilitation</b>
de <a href='http:/html2pdf.fr/'>HTML2PDF</a>.<br>
</page>";

require_once('../assets/libs/html2pdf/html2pdf-4.4.0/html2pdf.class.php');
$html2pdf = new HTML2PDF('P','A4','en');
$html2pdf->WriteHTML($content);
$html2pdf->Output('example.pdf');
?>