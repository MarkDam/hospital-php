<?php

require(ROOT . "model/speciesModel.php");

function index()
{
	$species = getAllSpecies();

	render("species/index", array(
		'species' => $species)
	);
}

function create()
{
	render("species/create");
}

function createSave()
{
	if (createSpecies()) {
		header("location:" . URL . "species/index");
		exit();
	} else {
		header("location:" . URL . "error/error_db");
		exit();
	}
}

function read($id)
{
	$species = getSpecies($id);

	render("species/read", array(
		"species" => $species
	));
}

function edit($id)
{
	$species = getSpecies($id);

	render("species/edit", array(
		"species" => $species
	));
}

function editSave($id)
{
	if (editSpecies($id)) {
		header("location:" . URL . "species/index");
		exit();
	} else {
		header("location:" . URL . "error/error_404");
		exit();
	}
}

function delete($id)
{
	if (deleteSpecies($id)) {
		header("location:" . URL . "species/index");
		exit();
	} else {
		header("location:" . URL . "error/error_delete");
		exit();
	}
}
