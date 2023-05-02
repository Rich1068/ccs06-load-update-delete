<?php

require "config.php";

use App\Pet;

try {
	Pet::register('Richard', 'male', '2023-05-02', 'lean', 'richard@feynman.com', '1231 afdgfa', '09178978979');
	echo "<li>Added 1 pet";

	$pets = [
		[
			'name' => 'Albert',
			'gender' => 'male',
			'birthdate' => '1711-01-01',
			'owner' => 'bob',
			'email' => 'albert@einstein.com',
			'address' => '1234 babadbadbas st.',
			'contact_number' => '0912313123'
		],
		[
			'name' => 'Paul',
			'gender' => 'female',
			'birthdate' => '1844-05-06',
			'owner' => 'loren',
			'email' => 'paul@erdos.com',
			'address' => '1534 asdfaasa st.',
			'contact_number' => '0812321321'
		]
	];
	Pet::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

