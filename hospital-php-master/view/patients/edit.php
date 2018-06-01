<form class="form" action="<?= URL ?>patients/editSave/<?= $patients["patient_id"] ?>" method="POST">
	<input type="text" name="name" value="<?= $patients["patient_name"] ?>">
	<input type="text" name="gender" value="<?= $patients["patient_gender"] ?>">
	<input type="text" name="specie" value="<?= $patients["species_id"] ?>">
	<input type="text" name="owner" value="<?= $patients["client_id"] ?>">
  <input type="text" name="status" value="<?= $patients["patient_status"] ?>">
	<input type="hidden" name="id" value="<?= $patients["patient_id"] ?>">

	<input type="submit" value="Opslaan" />

</form>
