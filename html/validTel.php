<?php
$tel = trim($tel);
        if(iconv_strlen($tel) == 10) {
            if(ctype_digit($tel)) {
             
            } else {
                echo '<div class="alert alert-danger" role="alert">';
                    echo '<strong>Внимание!</strong> Неверный телефон';
                    echo '</div>';
                    echo '<br />';
                $GLOBALS["index"]++;
            }
        } else {
            echo '<div class="alert alert-danger" role="alert">';
                    echo '<strong>Внимание!</strong> Неверный телефон';
                    echo '</div>';
                    echo '<br />';
                    $GLOBALS["index"]++;
        }
?>