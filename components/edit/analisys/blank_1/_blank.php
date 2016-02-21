


<?php

	echo "<pre>";
	echo $type;
	print_r($bemor);
	echo "</pre>";



//define('_MPDF_PATH','../');
include("verify/mpdf/mpdf.php");
$html = '
	<table>
	<tr>
		<td>Вазорати тандурустии ҶТ<br>
		МД Пажӯҳишгоҳи Гастроэтрологӣ
		</td>
	</tr>
	<tr>
		<td>
			Озмоишгоҳи клиники<br>
			<big>Таҳлили хун</big>
		</td>
	</tr>
	<tr>
		<td>
			Ф.Н.Н <u>'. $bemor['main']->NomiBemor. '</u>
		</td>
	</tr>
	<tr>
		<td>
			Ҳуҷраи №- <u>'. $bemor['tahlilihun']->hujra. ' </u>
		</td>
	</tr>
	<tr>
		<td>
			Гуруҳи хун - <u>'. $bemor['tahlilihun']->guruhiHun. ' </u>
		</td>
	</tr>
	<tr>
		<td>
			Rh- <u>'. $bemor['tahlilihun']->Rh. '  </u>
		</td>
	</tr>
	<tr>
		<td>
			"____"_________________________20__c<br>
			  Духтур <u>'.$bemor['tahlilihun']->NomiDuhtur.'</u>
		</td>
	</tr>
</table>

';
//==============================================================
//==============================================================
//==============================================================

//==============================================================
//==============================================================
//==============================================================
$mpdf=new mPDF('cp-1251', 'A6', '12', '', 20, 10, 7, 7, 10, 10);
$mpdf->default_lineheight_correction = 1.2;
//$mpdf->WriteHTML('<pagebreak sheet-size="150mm 150mm" />');

// LOAD a stylesheet
//$stylesheet = file_get_contents('mpdfstyletables.css');
//$mpdf->WriteHTML($stylesheet,1); // The parameter 1 tells that this is css/style only and no

$mpdf->SetColumns(1,'J');
$mpdf->WriteHTML( $html);
//$mpdf->Output('mpdf.pdf', 'D');
$mpdf->Output();
exit;


?>