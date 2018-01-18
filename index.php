<?php
/**
 * Created by PhpStorm.
 * User: adriansmith and James Mcpherson
 * Date: 1/18/18
 * Time: 10:31 AM
 */

require 'vendor/autoload.php';

$f3 = Base::instance();

$f3->set('DEBUG', 3);

$f3->route('GET /', function(){
   $template = new Template();
   echo $template->render("views/home.html");
});

$f3->run();