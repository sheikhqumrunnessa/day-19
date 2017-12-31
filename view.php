<?php
require_once 'vendor/autoload.php';
//require_once 'app/classes/Example.php';
//require_once 'app/classes/Student.php';
//require_once 'app/classes/Demo.php';
use App\classes\Demo;
    Demo::subtraction();
use App\classes\Student;
   Student::addition();


use App\classes\Example;
if(isset($_POST['btn'])) {
        $result = Example::wordCharacterCount($_POST);
}
$result=[];
$result['word_length']=' ';
$result['string_length']=' ';

//require_once 'app/classes/Example.php';
//if(isset($_POST['btn'])){
//
//    $example=new App\classes\Example();
//    $result=$example->wordCharacterCount($_POST);
//}


?>
<form action="" method="post">
    <table>
        <tr>
            <th>Enter Your String</th>
            <td><input type="text" name="given_string"size="50"></td>
        </tr>
        <tr>
            <th>Total Number of Word</th>
            <td><input type="text" value="<?php echo $result['word_length'];?>"></td>
        </tr>
        <tr>
            <th>Total Number of Character</th>
            <td><input type="text" value="<?php echo $result['string_length'];?>"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="SubmiT"></td>
        </tr>
    </table>

</form>