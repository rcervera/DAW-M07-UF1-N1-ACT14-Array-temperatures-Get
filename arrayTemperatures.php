<?php

$temperatures = array(
68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78,
68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83);


if(isset($_GET['tipus'])) {
    $tipus=$_GET['tipus'];
   
	switch($tipus){
    case 'caluros':
        //rsort ordena de major a menor
        echo  "Les 5 temperatures màximes més <strong>caluroses</strong> han estat: <br>";
        rsort($temperatures);
        for($i=1;$i<=5;$i++){
            $maximes[]=$temperatures[$i];
        }
        foreach($maximes as $key => $value){
                echo $value."<br>";
        }

        
    break;
    case 'fred':
        //rsort es una funcion y ordena de mayor a menor
        echo "Les 5 temperatures màximes més <strong>fredes</strong> han estat: <br>";
        sort($temperatures);
        for($i=1;$i<=5;$i++){
            $primeres[]=$temperatures[$i];
        }
        foreach($primeres as $key => $value){
                echo $value."<br>";
        }
    break;

    default: echo "El paràmetre és incorrecte!";

	} 

}




?>