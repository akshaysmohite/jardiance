<?php

date_default_timezone_set("Asia/Kolkata");
if ($_SERVER['HTTP_HOST'] == 'jardiance.com') {
    $GLOBALS['site_root'] = 'http://' . $_SERVER['HTTP_HOST'];
} else {
    $GLOBALS['site_root'] = 'http://' . $_SERVER['HTTP_HOST'] . '/jardiance';
}
require_once('Autopaginate.php');
require_once('functions.php');
require_once('database.php');
require_once('Table.php');
require_once('classbm.php');
require_once('doctor.php');
require_once ('classrx.php');
require_once ('query.php');
require_once ('classpob.php');
require_once ('ho.php');
require_once ('classtask.php');
require_once ('classtf_doc.php');
//require_once ('c:/wamp/www/jardiance/Classes/PHPExcel.php');
