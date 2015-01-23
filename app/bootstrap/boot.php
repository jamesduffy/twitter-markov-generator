<?php
/**
 * Twitter Markov Generator
 *
 * @package  Twitter-Markov-Generator
 * @author   James Duffy <james@cafeduff.com>
 */

/*
|--------------------------------------------------------------------------
| Boot the Eloquent ORM
|--------------------------------------------------------------------------
|
| We are using Laravel's Eloqent ORM for database interactions. Check out
| the documentation here --> https://github.com/illuminate/database
|
*/

$db->bootEloquent();


/*
|--------------------------------------------------------------------------
| Dispatch the Router
|--------------------------------------------------------------------------
|
| Everything should now be loaded and we can now process requests.
|
*/

$router->dispatch();

