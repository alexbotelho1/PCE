<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'moodle';
$CFG->dbuser    = 'root';
$CFG->dbpass    = 'ecocentauro-3000';
$CFG->dbpersist = false;
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_general_ci',
);

if(substr($_SERVER['REMOTE_ADDR'],0,7) == '192.168') {
    $CFG->wwwroot   = 'http://moodle.ecocentauro.com.br';
} else {
	if(substr($_SERVER['SERVER_NAME'],0,6) == '201.47') {
	    $CFG->wwwroot   = 'http://201.47.91.79:8070';
	} else {
	    $CFG->wwwroot   = 'http://177.220.153.190:8070';
	}
}

$CFG->dataroot  = '/var/www/moodledata';
$CFG->admin     = 'admin';
$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');


// 	if(substr($_SERVER['REMOTE_ADDR'],0,6) == '201.47') {
// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
