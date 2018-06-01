<div class="container">
	<table border="1">
		<tr>
			<th>#</th>
			<th>Description</th>
			<th colspan="2">Actie</th>
		</tr>

		<?php
		foreach ($species as $species) {
			echo "<tr>";
			echo "<td>" . $species['species_id'] . "</td>";
			echo "<td>" . $species['species_description'] . "</td>";
			echo "<td><a href=\"" . URL . "species/edit/" . $species['species_id'] . "\">Wijzigen</a></td>";
			echo "<td><a href=\"" . URL . "species/delete/" . $species['species_id'] . "\">Verwijderen</a></td>";
			echo "</tr>";
		}
		?>
	</table>
	<a href="<?= URL ?>species/create">Nieuw dier toevoegen</a>
</div>
