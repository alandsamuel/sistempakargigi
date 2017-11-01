<HTML>
<HEAD>
<TITLE> Contoh Penaikan Isi variabel</TITLE>
</HEAD>

<BODY>
	<?php
		$gaji= 2000000;
		printf("gaji semula = %d <br> \n",$gaji);
		if ($gaji>2000000) $gaji=1.5 * $gaji+1000000;
		else $gaji = 1.5 *Sgaji;
		printf ("gaji sekarang =%d <br> \n",$gaji);
	?>
</BODY>
</HTML>