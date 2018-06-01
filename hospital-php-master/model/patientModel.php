<?php

function getAllPatients()
{
  $db = openDatabaseConnection();

  $sql = "SELECT patients.*, species.species_description, clients.client_firstname, clients.client_lastname
      FROM patients
      JOIN species ON patients.species_id = species.species_id
      JOIN clients ON patients.client_id = clients.client_id";

	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getPatients($id)
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patients WHERE patient_id = :id LIMIT 1";

	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id
	));

	$db = null;

	return $query->fetch();
}

function createPatients()
{
	$name = $_POST['name'];
  $gender = $_POST['gender'];
  $specie = $_POST['specie'];
  $owner = $_POST['owner'];
	$status = $_POST['status'];

	if ($name === '' || $gender === '' || $specie === '' || $owner === '' || $status === '') {
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "INSERT INTO patients (patient_name, patient_gender, species_id, client_id, patient_status) VALUES (:name, :gender, :specie, :owner, :status)";

	$query = $db->prepare($sql);
	$query->execute(array(
		":name" => $name,
    ":gender" => $gender,
    ":specie" => $specie,
    ":owner" => $owner,
		":status" => $status,
	));

	$db = null;

	return true;
}

function deletePatients($id)
{
if ($id === '') {
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "DELETE FROM patients WHERE patient_id = :id";

	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id
	));

	$db = null;

	return true;
}

function editPatients($id=null)
{
	$name = isset($_POST["name"]) ? $_POST["name"] : null;
  $gender = isset($_POST["gender"]) ? $_POST["gender"] : null;
  $specie = isset($_POST["specie"]) ? $_POST["specie"] : null;
  $owner = isset($_POST["owner"]) ? $_POST["owner"] : null;
	$status = isset($_POST["status"]) ? $_POST["status"] : null;

	if ($id === null || $name === null || $gender === null || $specie === null || $owner === null || $status === null) {
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "UPDATE patients
			SET patient_name = :name, patient_gender = :gender, species_id = :specie, client_id = :owner, patient_status = :status
			WHERE patient_id = :id";

	$query = $db->prepare($sql);

	$query->execute(array(
		":id" => $id,
		":name" => $name,
    ":gender" => $gender,
    "specie" => $specie,
    ":owner" => $owner,
		":status" => $status,
	));

	$db = null;

	return true;
}
