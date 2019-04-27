<?php 
	$cantidad=0;
	$nombres=were;

	//PHP ES UN LEGUAJE DE EXPPRESIONES
		if($nombres)
	/*{
		echo "Este mensaje es si la expresion devuelve true";
		echo "<br /> Linea dos :Este mensaje es si la expresion devuelve true";
	}
*/
 ?>


 	<table>
 		<tr>
 			<th>Nombres</th>
 			<th>Apellidos</th>
 			<th>Dni</th>
 		</tr>
 	<?php if(1): ?>
 	<style type="text/css">
 		td{
 			background: green;
 			color:white;
 		}
 	</style>
 	<tr>
 		<td>Luis</td>
 		<td>Mendoza</td>
 		<td>78526954</td>
 	</tr>
 	<tr>
 		<td>Maria</td>
 		<td>Soto</td>
 		<td>75369157</td>
 	</tr>
 	<tr>
 		<td>Manuel</td>
 		<td>Lopez</td>
 		<td>75842684</td>
 	</tr>
 <?php endif; ?>

 	</table>