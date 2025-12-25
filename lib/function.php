<?
function plus ($x,$y){
    
    return $x + $y;
}
function minus ($x,$y){
    return $x - $y;
}
function mult ($x,$y){
    return $x * $y;
}
function def ($x,$y){
    if($y == 0) return false;
    else return $x / $y;
}
function fact($x) {
    if($x == 0) return 1;
    if($x < 0) return false;
    $f = 1;
    for($i = 1; $i <= $x; $i ++){
        $f = $f * $i;
    }
     return $f;
}
?>