<div class="container">
	<table border="1">
		<tr>
			<th>naam</th>
			<th>gender</th>
			<th>specie</th>
      <th>owner</th>
      <th>status</th>
			<th colspan="2">Actie</th>
		</tr>

		<?php
		foreach ($patients as $patients) {
			echo "<tr>";
			echo "<td>" . $patients['patient_name'] . "</td>";
			echo "<td>" . $patients['patient_gender'] . "</td>";
      echo "<td>" . $patients['species_description'] . "</td>";
      echo "<td>" . $patients['client_firstname'] . "</td>";
			echo "<td>" . $patients['patient_status'] . "</td>";
			echo "<td><a href=\"" . URL . "patients/edit/" . $patients['patient_id'] . "\">Wijzigen</a></td>";
			echo "<td><a href=\"" . URL . "patients/delete/" . $patients['patient_id'] . "\">Verwijderen</a></td>";
			echo "</tr>";
		}
		?>
	</table>
	<a href="<?= URL ?>patients/create">Nieuwe patient toevoegen</a>
</div>
