<form class="form" action="<?= URL ?>species/editSave/<?= $species["species_id"] ?>" method="POST">
	<input type="text" name="description" value="<?= $species["species_description"] ?>">
	<input type="hidden" name="id" value="<?= $species["species_id"] ?>">

	<input type="submit" value="Opslaan" />

</form>
