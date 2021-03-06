<?php
/**
 * Created by PhpStorm.
 * User: adriansmith and James Mcpherson
 * Date: 1/18/18
 * Time: 10:31 AM
 */

error_reporting(E_ALL);
ini_set('display_errors', TRUE);

require 'vendor/autoload.php';
session_start();

$f3 = Base::instance();
$f3->set('colors', array('pink', 'green', 'blue'));
$f3->set('DEBUG', 3);

$f3->route('GET /', function(){
   $template = new Template();
   echo $template->render("views/home.html");
});

$f3->route('GET /pets/show/@type', function($f3, $params){
    if(strtolower($params['type']) == 'cat') {
        echo "<img src='data:image/jpeg;base64,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' alt='Cat'>";
    }else if(strtolower($params['type']) == 'dog'){
        echo "<img src='data:image/jpeg;base64,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' alt='DOG'>";
    }else{
        $f3->error(404);
    }

});

$f3->route('GET /order', function(){
    $template = new Template();
    echo $template->render('views/form1.html');
});

$f3->route('POST /order2', function(){
    $_SESSION['animal'] = $_POST['animal'];
    $template = new Template();
    echo $template->render('views/form2.html');

});
$f3->route('POST /results', function($f3){
    $_SESSION['color'] = $_POST['colors'];

    $f3->set('animal', $_SESSION['animal']);
    $f3->set('color', $_SESSION['color']);

    $template = new Template();
    echo $template->render('views/results.html');
});

$f3->route('GET|POST /new-pet', function($f3){

    if(isset($_POST['submit'])){
        $color = $_POST['pet-color'];
        $type = $_POST['pet-type'];
        $name = $_POST['pet-name'];

        include('model/validate.php');

        $f3->set('color', $color);
        $f3->set('type', $type);
        $f3->set('name', $name);
        $f3->set('errors', $errors);
        $f3->set('success', $success);
    }

    $template = new Template();
    echo $template->render('views/form5.html');

});

$f3->route("GET /pets", function($f3, $params){
   include "classes/pet.php";
   include "classes/Cat.php";
    $pet1 = new Pet("Rover", "pink");
    $pet1->eat();
    $pet1->talk();
    $pet1->sleep();
    print_r($pet1);

    $cat1 = new Cat();
    $cat1->sleep();
    $cat1->scratch();
});


$f3->run();