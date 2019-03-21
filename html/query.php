<?php
$query = 'INSERT INTO '.$table_name.' (name, secondname, thirdname, telephone, email, birthday, comment)
        values ("'.$FIO["name"].'", 
        "'.$FIO["secondName"].'", 
        "'.$FIO["thirdName"].'", 
        "'.$tel.'", 
        "'.$email.'", 
        "'.$printDate.'",
        "'.$comment.'");';
        $result = mysqli_query($connect, $query) 
        or die ("Ошибка: ".mysqli_error($connect));
?>