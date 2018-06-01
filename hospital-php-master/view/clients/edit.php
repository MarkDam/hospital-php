<form class="form" action="<?= URL ?>clients/editSave/<?= $clients["client_id"] ?>" method="POST">
	<input type="text" name="firstname" value="<?= $clients["client_firstname"] ?>">
  <input type="text" name="lastname" value="<?= $clients["client_lastname"] ?>">
	<input type="hidden" name="id" value="<?= $clients["client_id"] ?>">

	<input type="submit" value="Opslaan" />

</form>
