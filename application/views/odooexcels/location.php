<html>
<head>
		<?php
		header("Content-Type: application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment;filename=location.xls");
		header("Cache-Control: private",false);
		?>
	</head>
    <body>
        <table>
            <tr>
                <td>Nama</td>
                <td>Display Name</td>
                <td>Address</td>
                <td>Kelurahan_id</td>
                <td>Kecamatan_id</td>
                <td>kota_id</td>
                <td>state_id</td>
            </tr>
        </table>
    </body>
</html>