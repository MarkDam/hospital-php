<?php

require(ROOT . "model/patientModel.php");

function index()
{
	$patients = getAllPatients();

	render("patients/index", array(
		'patients' => $patients)
	);
}

function create()
{
	render("patients/create");
}

function createSave()
{
	if (createPatients()) {
		header("location:" . URL . "patients/index");
		exit();
	} else {
		header("location:" . URL . "error/error_db");
		exit();
	}
}

function read($id)
{
	$patients = getPatients($id);

	render("patients/read", array(
		"patients" => $patients
	));
}

function edit($id)
{
	$patients = getPatients($id);

	render("patients/edit", array(
		"patients" => $patients
	));
}

function editSave($id)
{
	if (editPatients($id)) {
		header("location:" . URL . "patients/index");
		exit();
	} else {
		header("location:" . URL . "error/error_404");
		exit();
	}
}

function delete($id)
{
	if (deletePatients($id)) {
		header("location:" . URL . "patients/index");
		exit();
	} else {
		header("location:" . URL . "error/error_delete");
		exit();
	}
}
