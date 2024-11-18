<?php 
function linkCss($cssPath){
    $url=base_url("assets/").$cssPath;
    echo '<link rel="stylesheet" href="'.$url.'"/>';
}
function linkJquery($jqueryPath){
    $url=base_url("assets/").$jqueryPath;
    echo '<script src="'.$url.'"></script>';
}
function input($inputName){
    if($_SERVER['REQUEST_METHOD']=="POST" || $_SERVER['REQUEST_METHOD']=="post"){
        return trim(strip_tags($_POST[$inputName]));
    }
    else if($_SERVER['REQUEST_METHOD']=="GET" || $_SERVER['REQUEST_METHOD']=="get"){
        return trim(strip_tags($_GET[$inputName]));
    }
}
function multi_strpos($string, $check, $getResults = false){
    $result = array();
    $check = (array) $check;

    foreach ($check as $s)
    {
        $pos = strpos($string, $s);

        if ($pos !== false)
        {
        if ($getResults)
        {
            $result[$s] = $pos;
        }
        else
        {
            return $pos;          
        }
        }
    }

    return empty($result) ? false : $result;
}
function totalsunday($months,$years){                      
    $monthName = date("F", mktime(0, 0, 0, $months));
    $fromdt=date('Y-m-01 ',strtotime("First Day Of  $monthName $years")) ;
    $todt=date('Y-m-d ',strtotime("Last Day of $monthName $years"));
    $num_sundays='';                
    for ($i = 0; $i <= ((strtotime($todt) - strtotime($fromdt)) / 86400); $i++)
    {
        if(date('l',strtotime($fromdt) + ($i * 86400)) == 'Sunday')
        {
                $num_sundays++;
        }    
    }
    return $num_sundays;
}
function totalsunday_to_date($months,$years,$todt){                      
    $monthName = date("F", mktime(0, 0, 0, $months));
    $fromdt=date('Y-m-01 ',strtotime("First Day Of  $monthName $years"));
    $num_sundays='';                
    for ($i = 0; $i <= ((strtotime($todt) - strtotime($fromdt)) / 86400); $i++)
    {
        if(date('l',strtotime($fromdt) + ($i * 86400)) == 'Sunday')
        {
                $num_sundays++;
        }    
    }
    return $num_sundays;
}
?>