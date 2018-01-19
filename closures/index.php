<?php

	//anonymous function
	//Example one
	/*
	$greet = function($name){
		return "Hola, {$name}";
	};

	echo $greet('Italo Morales');
	*/

	//Example two

    function greet(Closure $gender, $name) {

        return $gender($name);

    }

    $female = function ($name) {
        return "Hola señora, {$name}";
    };

    $male = function ($name) {
        return "Hola señor, {$name}";
    };

    echo greet($female, 'Luisa Fantone');

    echo '<br>';

    echo greet($male, 'Italo Morales');