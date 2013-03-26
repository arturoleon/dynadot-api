<?php
require('lib/dynadot.php');

$dynadot = new Dynadot("DYNADOT_API_KEY");

// Search for domains, language is a optional value and is intented for IDN domains
$search_domains = array(
	'1' => array('domain' => 'pincel.mx'),
	'2' => array('domain' => 'comidarápida.com','language' => 'spa')
);
//print_r($dynadot->search($search_domains));

// Register a domain for N years
//print_r($dynadot->register('pincel.mx',1));

// Delete a domain
//print_r($dynadot->delete('google.mx'));

// Renew a domain for N years
//print_r($dynadot->renew('google.mx',1));

// Get nameservers
//print_r($dynadot->getNameservers('arturoleon.net'));



?>