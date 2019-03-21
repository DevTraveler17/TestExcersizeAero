<?php
if (isset($_POST['g-recaptcha-response'])) {
    $url_to_google_api = "https://www.google.com/recaptcha/api/siteverify";
    $secret_key = '';
    $query = $url_to_google_api . '?secret=' . $secret_key . '&response=' . $_POST['g-recaptcha-response'] . '&remoteip=' . $_SERVER['REMOTE_ADDR'];
    $data = json_decode(file_get_contents($query));
    if ($data->success) {
        $email = $_POST["Email"];
        $index = 0;
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert(\"E-mail адрес указан верно.\");</script>";
            $index++;
        }else{
            echo "<script>alert(\"E-mail адрес '$email' указан неверно.\");</script>";
        }
       //валидация даты рождения
       
           $validDate =$_POST["Birthday"];
           $validDate =date_create($validDate);
           $max_date = date_create(date("Y-m-d"));
           $min_date = date_modify(date_create(date("Y-m-d")), '-100 year');
               if($min_date<$validDate && $max_date>$validDate){
                   echo "<script>alert(\"Дата корректна\");</script>";
               }else{
                   echo "<script>alert(\"Дата указана неверно\");</script>";
               }
    } else {
        exit('Извините но похоже вы робот \(0_0)/');
    }
} else {
    exit('Вы не прошли валидацию reCaptcha');
}
?>