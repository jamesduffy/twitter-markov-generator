<?php
/**
 * Twitter Markov Generator
 *
 * @package  Twitter-Markov-Generator
 * @author   James Duffy <james@cafeduff.com>
 */


/*
|--------------------------------------------------------------------------
| Register The Composer Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
|
*/

require __DIR__.'/../../vendor/autoload.php';


/*
|--------------------------------------------------------------------------
| Load Configuarion
|--------------------------------------------------------------------------
|
| All the configuration values are saved in a config file. It simply holds
| an array that is returned into the config variable.
|
*/

$config = require __DIR__.'/../../app/config.php'; 


/*
|--------------------------------------------------------------------------
| Load the database
|--------------------------------------------------------------------------
|
| 
|
*/
$db = new \Illuminate\Database\Capsule\Manager();

$db->addConnection($config['database']);

// Make this Capsule instance available globally via static methods.
$db->setAsGlobal();


/*
|--------------------------------------------------------------------------
| Setup Router and Load Routes
|--------------------------------------------------------------------------
|
| 
|
*/

$router = new \Klein\Klein();

require __DIR__.'/../routes.php';

