<?php
class Form{
   public $config = '';
   public $count=0;
   //public $inputConfig='';
   public function setTest(){
        $config = $this->config;
        $form = "<form";
        $form .= $config['id'] ? " id=\"{$config['id']}\"" : null;
        $form .= $config['class'] ? " class=\"{$config['class']}\"" : null;
        $form .= $config['name'] ? " name=\"{$config['name']}\"" : null;
        $form .= $config['action'] ? " action=\"{$config['action']}\"" : null;
        $form .= $config['method'] ? " method=\"{$config['method']}\"" : null;
        $form .= '>';
        return $form;
   }

   public function createInput($inputConfig){
       $input = "<div class=\"form-group";
       $input .= $inputConfig['divclass'] ? " {$inputConfig['divclass']}" : null;
       $input .= "\">";
       $input .= $inputConfig['label'] ? "<label for=\"{$inputConfig['id']}\">{$inputConfig['label']}</label>" : null;
       $input .="<input";
       $input .= $inputConfig['type'] ? " type=\"{$inputConfig['type']}\"" : null;
       if($inputConfig['type']=='textarea'){
           if(isset($inputConfig['rows'])){
               $input.=" rows=\"{$inputConfig['rows']}\"";
           }else{
               $input.=" rows=\"4\"";
           }
           if(isset($inputConfig['cols'])){
               $input.=" cols=\"{$inputConfig['cols']}\"";
           }else{
               $input.=" cols=\"50\"";
           }
       }
       $input .= $inputConfig['id'] ? " id=\"{$inputConfig['id']}\"" : null;
       $input .= $inputConfig['name'] ? " name=\"{$inputConfig['name']}\"" : null;
       $input .= $inputConfig['class'] ? " class=\"{$inputConfig['class']}\"" : null;
       $input .= $inputConfig['value'] ? " value=\"{$inputConfig['value']}\"" : null;
      // $input .= $inputConfig['checked'] ? " checked" : null;
       $input.="></div>";
       return $input;
   }
   public function setDiv($class){
       $div="<div class=\"".$class."\"></div>";
       return $div;
   }
   public function getTest(){
       return "Test";
   }
}

?>
