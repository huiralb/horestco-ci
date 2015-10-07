<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use \Illuminate\Database\Capsule\Manager as Capsule;

class HRC_Database
{
	protected $ci;

	public function __construct()
	{
        $setting = parse_ini_file(BASEDIR . "setting.ini.php");

		$capsule = new Capsule;

		$capsule->addConnection(array(
		    'host'      => $setting['host'],
		    'database'  => $setting['database'],
		    'username'  => $setting['username'],
		    'password'  => $setting['password'],
		    'driver'    => 'mysql',
		    'charset'   => 'utf8',
		    'collation' => 'utf8_general_ci',
		    'prefix'    => ''
		));

		$capsule->setAsGlobal();
		$capsule->bootEloquent();
	}

	

}

/* End of file HRC_Database.php */
/* Location: .//D/GDRIVE/www.horestco.com/ci/app/libraries/HRC_Database.php */
