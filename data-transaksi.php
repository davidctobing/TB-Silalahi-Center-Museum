<?php


	require_once('function.php');

	?>

<center>
	<table class="tabel" style="width: 50%;">
			<tr>
				<th>Kode Tiket</th>
				<th>Total</th>
			</tr>
				<?php
					$q = mysqli_query($conn,"select * from transaksi");
					while($a = mysqli_fetch_array($q)){
						@$total = $total + $a['total'];
				?>
			<tr>
				<td><?= $a['kodeTiket']?></td>
				<td style="text-align: right;">Rp.<?= number_format($a['total'],0,'.','.')?>,-</td>
			</tr>
			<?php }?>
			<tr bgcolor="#eee">
				<td style="text-align: center;"><b >TOTAL<b></td>
				<td style="text-align: right;">Rp.<?= number_format($total,0,'.','.')?>,-</td>
			</tr>

		</table>
</center>