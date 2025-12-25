<?
print_r($_POST);
if(isset($_POST['sub'])){
    foreach($_POST as $k => $v){
        if($_POST[$k] == '') {
            $_POST[$k] = 0;
            $result = '';
        }
    }
    $x1 = $_POST['number_1'];
    $x2 = $_POST['number_2'];
    require_once('./lib/function.php');
switch($_POST['operations']){
                        case 'plus':
                            $result = plus($x1, $x2);
                            break;
                        case 'minus':
                            $result = minus($x1, $x2);
                            break;
                        case 'mult':
                            $result = mult($x1, $x2);
                            break;
                        case 'def':
                            {
                                $result = def($x1, $x2);
                                if($result === false) $result = "Def not to zero !Eror 404!";
                                else $result = "$x1 / $x2 = $result";
                                break;
                            }
                            
                        case 'fact':
                            $result = fact($x1);
                            if($result === false) $result = "Fuctorial number $x1 not avalible";
                            else $result = "Factorial number $x1 = $result";
                            break;
                        default :
                            echo "Error operation! 404";
                            break;
                     }  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?
        if(isset($result)) {
        echo "Result : $result";
        }
        ?>
    </p>
    <p>
        <form action="index.php" method='post' name="culc">
            <input type="text" name='number_1'>
            <select name="operations" id="">
                <?
                $operations = array('plus' => '+', 'minus' => '-', 'mult' => '*', 'def' => '/', 'fact' => '!');
                     foreach($operations as $k => $v){
                        echo "<option value='$k'>$v</option>";
                     } 
                ?>
            </select>
            <input type="text" name='number_2'>
            <input type="submit" name='sub' value='result'>
        </form>
    </p>
</body>
</html>