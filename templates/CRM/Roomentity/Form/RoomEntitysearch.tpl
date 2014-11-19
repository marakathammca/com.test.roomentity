 <html>  
<head> 
<title>{$title}</title>  
</head>  
<body>
<table>
<tr>
<th> Room Label </th>
<th> Room Number </th>
<th> Room Floor <th>
<th> Room Extension </th>
</tr>
{foreach from=$result item=row}
	<tr>
		{foreach from=$row item=column}
			<td>
   			 {$column}
			</td>
		{/foreach}
	</tr>
{/foreach}
</table>
</body>  
</html>