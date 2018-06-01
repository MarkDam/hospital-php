<div class="container">
	<table border="1">
		<tr>
			<th>#</th>
			<th>Voornaam</th>
			<th>Achternaam</th>
			<th colspan="2">Actie</th>
		</tr>

		<?php
		foreach ($clients as $clients) {
			echo "<tr>";
			echo "<td>" . $clients['client_id'] . "</td>";
			echo "<td>" . $clients['client_firstname'] . "</td>";
			echo "<td>" . $clients['client_lastname'] . "</td>";
			echo "<td><a href=\"" . URL . "clients/edit/" . $clients['client_id'] . "\">Wijzigen</a></td>";
			echo "<td><a href=\"" . URL . "clients/delete/" . $clients['client_id'] . "\">Verwijderen</a></td>";
			echo "</tr>";
		}
		?>
	</table>
	<a href="<?= URL ?>clients/create">Nieuwe client toevoegen</a>
</div>
