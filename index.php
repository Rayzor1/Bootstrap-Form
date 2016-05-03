

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <title></title>
    </head>
    <body>
        <div class="container">
        <?php
        require './classes/form.php';
        $settings= array("name"=>"TestForm","id"=>"TestFormID","class"=>"form-horizontal","action"=>"/includes/test.php","method"=>"post");
        $input1= array("label"=>"Label1","labelclass"=>"control-label","divclass"=>"col-md-5", "name"=>"TestInput1","id"=>"TestInput1","type"=>"text","class"=>"form-control","value"=>"test");
        $input2= array("label"=>"Label2","labelclass"=>"control-label","divclass"=>"test col-md-5","name"=>"TestInput2","id"=>"TestInput2","type"=>"text","class"=>"form-control","value"=>"test2");
        $form = new Form();
        $form->config=$settings;
        $testvar=$form->setTest();
        
        echo $testvar;
        $inputTest=$form->createInput($input1);
        echo $inputTest;
        echo $form->setDiv('col-md-1');
        //$spacer=$form->setDiv('col-md-1');
        //echo $spacer;
        $inputTest=$form->createInput($input2);
        echo $inputTest;
        
        //echo $form;
        /* echo '<input type="text" value="this" idate="Test2" />';*/
        echo "</form>";
        
        ?>
            </div>
        <script   src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        
    </body>
</html>
