<!DOCTYPE html>
<head>
    <title>Sondages créés</title>
</head>
<body>
<table>
				<thead> 
					<tr>
						<th>Nom du sondage</th>
						<th>Début disponibilités</th>
						<th>Fin disponibilités</th>
					</tr>
				</thead>
				<tbody>
                <?php foreach ($sondage as $poll){$this->table->add_row($poll->title,$contact->DateMin,$contact->DateMax) ?>
				</tbody>
			</table>
</body>