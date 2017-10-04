<?php
	$array = 
	[
		[
			"id" => 1,
			"Cliente" => "Francisco", 
			"Rua" => "1 de Maio",
			"Bairro" => "Jaguaribe",
			"Cidade" => "João Pessoa"
		]
	];

	function insert_in_object(&$array)
	{
		$insertion =
		[
			"id" => 2,
			"Cliente" => "Maria",
			"Rua" => "Retão de Manaíra",
			"Bairro" => "Manaíra",
			"Cidade" => "João Pessoa"
		];
		array_push($array, $insertion);
	}


	function print_object($array)
	{
		echo
		(
		'<table border="1">
			<tr>
				<td>Id</td>
				<td>Cliente</td>
				<td>Rua</td>
				<td>Bairro</td>
				<td>Cidade</td>
			</tr>
		'
		);
		foreach($array as $value)
		{
			echo('<tr>');
			foreach($value as $content)
			{
				echo('<td>'.$content.'</td>');
			}
			echo('</tr>');
		}
		echo('</table>');
	}

	insert_in_object($array);
	print_object($array);

?>
