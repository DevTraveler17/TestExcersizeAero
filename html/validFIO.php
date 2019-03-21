<?php
setlocale(LC_CTYPE, "Russian");
$name = trim($name);
        $secondName = trim($secondName);
        $thirdName = trim($thirdName);     
        $pattern = '/^[а-яА-Яa-zA-Z]+$/iu';  
        if(preg_match($pattern ,$name) && preg_match($pattern, $secondName) && preg_match($pattern, $thirdName)) {
            $FIO = array(
                "name" => $name,
                "secondName" => $secondName,
                "thirdName" => $thirdName
            );          
        } else {
            echo '<div class="alert alert-danger" role="alert">';
            echo '<strong>Внимание!</strong> Неверные фамилия, имя или отчество';
            echo '</div>';
            echo '<br />';
            $GLOBALS["index"]++;
    } 
?>