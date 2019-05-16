<?php

if(!$_POST) {
    echo 'no data';
} else {
    if (isset($_POST['x']) and isset($_POST['y'])) {
        $x = $_POST['x'];
        $y = $_POST['y'];
        $op = $_POST['op'];
        if(!(is_numeric($x) and is_numeric($y))) {
            echo json_encode("err");
        } else {
            switch ($op) {
                case 'sum':
                    echo json_encode(sum($x, $y));
                    break;
                case 'subtraction':
                    echo json_encode(subtraction($x, $y));
                    break;
                case 'multiplication':
                    echo json_encode(multiplication($x, $y));
                    break;
                case 'division':
                    if($y == '0') {
                        echo json_encode('err');
                    } else {
                        echo json_encode(division($x, $y));
                    }
                    break;
                default: echo json_encode('err');    
            }
        } 
    } else {
        echo json_encode('err');
    }
}

function sum($x, $y){
    return ($x + $y);
}

function subtraction($x, $y){
    return ($x - $y);
}

function multiplication($x, $y){
    return ($x * $y);
}

function division($x, $y){
    return ($x / $y);
}