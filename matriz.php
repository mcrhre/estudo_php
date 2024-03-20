<?php

$matriz['linha'][1]['coluna'][1] = 'AA';
$matriz['linha'][1]['coluna'][2] = 'AB';
$matriz['linha'][1]['coluna'][3] = 'AC';
$matriz['linha'][1]['coluna'][4] = 'AD';

$matriz['linha'][2]['coluna'][1] = 'BA';
$matriz['linha'][2]['coluna'][2] = 'BB';
$matriz['linha'][2]['coluna'][3] = 'BC';
$matriz['linha'][2]['coluna'][4] = 'BD';

$matriz['linha'][3]['coluna'][1] = 'CA';
$matriz['linha'][3]['coluna'][2] = 'CB';
$matriz['linha'][3]['coluna'][3] = 'CC';
$matriz['linha'][3]['coluna'][4] = 'CD';

$matriz['linha'][4]['coluna'][1] = 'DA';
$matriz['linha'][4]['coluna'][2] = 'DB';
$matriz['linha'][4]['coluna'][3] = 'DC';
$matriz['linha'][4]['coluna'][4] = 'DD';

echo '<pre>';

print_r($matriz);

?>

<table border="1">
	<tr style="color:red; font-weight: bold;">
		<td>&nbsp</td>
		<td>1</td>
		<td>2</td>
		<td>3</td>
		<td>4</td>
	</tr>
	<?php foreach($matriz['linha'] as $linha => $colunas){ ?>
		<tr>
			<td style='color:red; font-weight: bold;'><?=$linha?></td>
			<?php foreach($colunas['coluna'] as $coluna => $valor){ ?>
				<td><?=$valor?></td>
			<?php } ?>
		</tr>
	<?php } ?>
</table>