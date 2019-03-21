<?php
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        }else{
            echo '<div class="alert alert-danger" role="alert">';
            echo '<strong>Внимание!</strong> Неверный Email';
            echo '</div>';
            echo '<br />';
           $GLOBALS["index"]++;
        }
?>