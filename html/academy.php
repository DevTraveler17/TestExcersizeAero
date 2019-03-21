<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../css/bootstrap-reboot.css">
    <link rel="stylesheet" href="../css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    
<?php
if (isset($_POST['g-recaptcha-response'])) {
  $url_to_google_api = "https://www.google.com/recaptcha/api/siteverify";
    $secret_key = '6LeE55gUAAAAANCtGhzX05mgjMpfYbt32H9cy3_a';
    $query = $url_to_google_api . '?secret=' . $secret_key . '&response=' . $_POST['g-recaptcha-response'] . '&remoteip=' . $_SERVER['REMOTE_ADDR'];
    $data = json_decode(file_get_contents($query));
    if ($data->success) {

        //if capthcha is valid
        require_once 'connection.php';
        $connect = mysqli_connect($host, $user, $password, $database) 
            or die("error connect database: " . mysqli_error($connect));


        setlocale(LC_ALL, "rus");
        require_once 'init.php';
        require_once 'validEmail.php';           
        require_once 'validDate.php';           
        require_once 'validFIO.php';
        require_once 'validTel.php';

        $comment = mysqli_real_escape_string($connect, $comment);
        $comment = htmlspecialchars($comment);
        if($GLOBALS["index"] == 0) {
        require_once 'query.php';
        echo'<div class="alert alert-success" role="alert">Данные успешно занесены в таблицу</div>';
        }
        mysqli_close($connect);

    } else {
        exit('Извините но похоже вы робот \(0_0)/');
    }
} else {
    exit('Вы не прошли валидацию reCaptcha');
}
?>
</body>
</html>