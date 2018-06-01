<?php

function getAllClients()
{
  $db = openDatabaseConnection();

	$sql = "SELECT * FROM clients";

	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getClients($id)
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM clients WHERE client_id = :id LIMIT 1";

	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id
	));

	$db = null;

	return $query->fetch();
}

function createClients()
{
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];

	if ($firstname === '' || $lastname === '') {
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "INSERT INTO clients (client_firstname, client_lastname) VALUES (:firstname, :lastname)";

	$query = $db->prepare($sql);
	$query->execute(array(
		":firstname" => $firstname,
		":lastname" => $lastname,
	));

	$db = null;

	return true;
}

function deleteClients($id)
{
	if ($id === '') {
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "DELETE FROM clients WHERE client_id = :id";

	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id
	));

	$db = null;

	return true;
}

function editClients($id=null)
{
	$firstname = isset($_POST["firstname"]) ? $_POST["firstname"] : null;
	$lastname = isset($_POST["lastname"]) ? $_POST["lastname"] : null;

	if ($id === null || $firstname === null || $lastname === null) {
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "UPDATE clients
			SET client_firstname = :firstname, client_lastname = :lastname
			WHERE client_id = :id";

	$query = $db->prepare($sql);

	$query->execute(array(
		":id" => $id,
		":firstname" => $firstname,
		":lastname" => $lastname,
	));

	$db = null;

	return true;
}
