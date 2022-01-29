<?php
    //ejemplo de array asociativo
    $alumnos = array(
            "nombre" => "Juan",
            "apellido" => "Perez",
            "sexo" => "Masculino",
            "fechaNacimiento" => "01/01/2000"
    );
    //array indexado
    $cursos = array("PHP", "Javascript", "HTML");

    //ejemplo de objeto
    $obj = new stdClass();
    $obj->nombre = "Juan";
    $obj->apellido = "Perez";
    $obj->sexo = "Masculino";
    $obj->fechaNacimiento = "01/01/2000";

    $nombre = $alumnos['nombre'];
    $apellido = $alumnos['apellido'];
    $sexo = $alumnos['sexo'];
    $fechaNacimiento = $alumnos['fechaNacimiento'];

    $nombre2 = $obj->nombre;
    $apellido2 = $obj->apellido;
    $sexo2 = $obj->sexo;
    $fechaNacimiento2 = $obj->fechaNacimiento;

    // echo $nombre;
    // echo "<br>";
    // echo $apellido;
    // echo "<br>";
    // echo $sexo;
    // echo "<br>";
    // echo $fechaNacimiento;
    // echo "<br>";
    // echo $nombre2;
    // echo $apellido2;
    // echo $sexo2;
    // echo $fechaNacimiento2;

    var_dump($obj);

    /* Ejemplo de arrays y objetos con var_dump()
        array(4) {

            ["nombre"] => string(4) "Juan" 
            
            ["apellido"] => string(5) "Perez"
            
            ["sexo"] => string(9) "Masculino"
            
            ["fechaNacimiento"] => string(10) "01/01/2000"
        }
        
        array(3) { 
            
            [0]=> string(3) "PHP" 
            
            [1]=> string(10) "Javascript" 
            
            [2]=> string(4) "HTML" 
        
            }
        
        object(stdClass)#1 (4) { 
        
            ["nombre"]=> string(4) "Juan" 
        
            ["apellido"]=> string(5) "Perez" 
        
            ["sexo"]=> string(9) "Masculino" 
        
            ["fechaNacimiento"]=> string(10) "01/01/2000" 
        
        }
        
        object(Alumno)#9 (5) { 
            ["id":"Alumno":private]=> NULL 
            ["Nombre":"Alumno":private]=> NULL 
            ["Apellido":"Alumno":private]=> NULL 
            ["Sexo":"Alumno":private]=> NULL 
            ["FechaNacimiento":"Alumno":private]=> NULL 
        } 
        
        object(Alumno)#10 (5) { 
            ["id":"Alumno":private]=> NULL 
            ["Nombre":"Alumno":private]=> NULL 
            ["Apellido":"Alumno":private]=> NULL 
            ["Sexo":"Alumno":private]=> NULL 
            ["FechaNacimiento":"Alumno":private]=> NULL 
        } 
        
        object(Alumno)#11 (5) { 
            ["id":"Alumno":private]=> NULL 
            ["Nombre":"Alumno":private]=> NULL 
            ["Apellido":"Alumno":private]=> NULL 
            ["Sexo":"Alumno":private]=> NULL 
            ["FechaNacimiento":"Alumno":private]=> NULL 
        } 
        
        object(Alumno)#12 (5) { 
            ["id":"Alumno":private]=> NULL 
            ["Nombre":"Alumno":private]=> NULL 
            ["Apellido":"Alumno":private]=> NULL 
            ["Sexo":"Alumno":private]=> NULL 
            ["FechaNacimiento":"Alumno":private]=> NULL 
        }
        
        
        object(stdClass)#5 (6) { 
            ["id"]=> string(1) "1" 
            ["Nombre"]=> string(7) "EDUARDO" 
            ["Apellido"]=> string(16) "rodriguez pati�o" 
            ["Sexo"]=> string(1) "1" 
            ["FechaNacimiento"]=> string(10) "1989-02-11" 
            ["FechaRegistro"]=> string(10) "2014-05-26" 
        }
        
        array(4) { 
            [0]=> object(Alumno)#9 (5) 
            { 
                ["id":"Alumno":private]=> string(1) "1" 
                ["Nombre":"Alumno":private]=> string(7) "EDUARDO" 
                ["Apellido":"Alumno":private]=> string(16) "rodriguez pati�o" 
                ["Sexo":"Alumno":private]=> string(1) "1" 
                ["FechaNacimiento":"Alumno":private]=> string(10) "1989-02-11" 
            }
    
    */

?>