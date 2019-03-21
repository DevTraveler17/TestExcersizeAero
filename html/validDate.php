<?php
$validDate = date_create($printDate);
           $max_date = date_create(date("Y-m-d"));         
           $min_date = date_modify(date_create(date("Y-m-d")), '-100 year');

               if($min_date<$validDate && $max_date>$validDate){ }else{
                    echo '<div class="alert alert-danger" role="alert">';
                    echo '<strong>Внимание!</strong> Неверная дата';
                    echo '</div>';
                    echo '<br />';
                   $GLOBALS["index"]++;
               }
?>