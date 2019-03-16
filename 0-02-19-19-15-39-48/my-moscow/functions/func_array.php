<?php
    //debug - проверить какие - либо данные
    function d($arr){
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    }

    function parse_date($date){
        //2019-02-12 string

        $date_array = explode('-', $date); 
        $months = [
            'января',
            'февраля',
            'марта',
            'апреля',
            'мая',
            'июня',
            'июля',
            'августа',
            'сентября',
            'октября',
            'ноября',
            'декабря'
        ];
        
        $month = $months[$date_array[1] - 1];
        $date_result = $date_array[2] . ' ' . $month . ' ' . $date_array[0] . ' года';
        

        return $date_result;


    }
    
    
?>