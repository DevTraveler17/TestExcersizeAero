<?php
if (isset($_POST['g-recaptcha-response'])) {
    $url_to_google_api = "https://www.google.com/recaptcha/api/siteverify";
    $secret_key = '6LeE55gUAAAAANCtGhzX05mgjMpfYbt32H9cy3_a';
    $query = $url_to_google_api . '?secret=' . $secret_key . '&response=' . $_POST['g-recaptcha-response'] . '&remoteip=' . $_SERVER['REMOTE_ADDR'];
    $data = json_decode(file_get_contents($query));
    if ($data->success) {
       exit('все верно');
    } else {
        exit('Извините но похоже вы робот \(0_0)/');
    }
} else {
    exit('Вы не прошли валидацию reCaptcha');
}
?>