<!DOCTYPE html>
<html>
<head>
<title>Calendar</title> 

<link rel="stylesheet" type="text/css" href="calendar.css" />

</head>
<body>

<div class="container">
<h1>
	<?php date_default_timezone_set("Africa/Nairobi");
	echo "Bruin Family Schedule for  " . date(" l: h:i:sa");
	?>
</h1>

<?php

 $timestamp = time();

 function get_hour_string($timestamp){

	return date("g",$timestamp) . ".00" . date("a", $timestamp);

 }
?>
<table id="event_table">


	<tr> 
		<th class='hr_td'> &nbsp; </th> <th class='table_header'>Joe</th><th class='table_header'>Joanna</th><th class='table_header'>Lil Cub</th> 
	</tr> 
<tr class='even_row'> 
<td class='hr_td'>10.00pm</td> <td> </td> <td> </td> <td></td>
</tr><tr class='odd_row'>
<td class='hr_td'>11.00pm</td> <td> </td> <td> </td> <td> </td>
</tr><tr class='even_row'> 
<td class='hr_td'>12.00am</td> <td> </td> <td> </td> <td></td>
</tr><tr class='odd_row'>
<td class='hr_td'>1.00am</td> <td> </td> <td> </td> <td> </td>
</tr><tr class='even_row'> 
<td class='hr_td'>2.00am</td> <td> </td> <td> </td> <td></td>
</tr><tr class='odd_row'>
<td class='hr_td'>3.00am</td> <td> </td> <td> </td> <td> </td>
</tr><tr class='even_row'> 
<td class='hr_td'>4.00am</td> <td> </td> <td> </td> <td></td>
</tr><tr class='odd_row'>
<td class='hr_td'>5.00am</td> <td> </td> <td> </td> <td> </td>
</tr><tr class='even_row'> 
<td class='hr_td'>6.00am</td> <td> </td> <td> </td> <td></td>
</tr><tr class='odd_row'>
<td class='hr_td'>7.00am</td> <td> </td> <td> </td> <td> </td>
</tr><tr class='even_row'> 
<td class='hr_td'>8.00am</td> <td> </td> <td> </td> <td></td>
</tr><tr class='odd_row'>
<td class='hr_td'>9.00am</td> <td> </td> <td> </td> <td> </td>
</tr><tr class='even_row'> 
<td class='hr_td'>10.00am</td> <td> </td> <td> </td> <td></td>
</tr>	
	
</table>

</div>
</body>
</html>