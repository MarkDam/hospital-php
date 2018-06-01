<?php

require(ROOT . "model/clientModel.php");

function index()
{
	$clients = getAllClients();

	render("clients/index", array(
		'clients' => $clients)
	);
}

function create()
{
	render("clients/create");
}

function createSave()
{
	if (createClients()) {
		header("location:" . URL . "clients/index");
		exit();
	} else {
		header("location:" . URL . "error/error_db");
		exit();
	}
}

function read($id)
{
	$clients = getClients($id);

	render("clients/read", array(
		"clients" => $clients
	));
}

function edit($id)
{
	$clients = getClients($id);

	render("clients/edit", array(
		"clients" => $clients
	));
}

function editSave($id)
{
	if (editClients($id)) {
		header("location:" . URL . "clients/index");
		exit();
	} else {
  	header("location:" . URL . "error/error_404");
		exit();
	}
}

function delete($id)
{
	if (deleteClients($id)) {
		header("location:" . URL . "clients/index");
		exit();
	} else {
		header("location:" . URL . "error/error_delete");
		exit();
	}
}
