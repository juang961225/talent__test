<?php
class fildsCreater
{
    public $element = "";
    public $inputTag = "";
    public $labelTag = "";

    public function __construct($name, $type, $placeHolder,$tagClass)
    {
        $this->inputCreator($name,$type,$placeHolder,$tagClass);
        $this->labelCreater($placeHolder, $name, $tagClass);
        $tagClass = $tagClass."__wrapper";
        $this->element = "<div class='$tagClass'>$this->labelTag $this->inputTag</div>";
        echo $this->element;
    }

    public function inputCreator($name, $type, $placeHolder,$tagClass)
    {
        $tagClass = $tagClass."__input";
        $this->inputTag = "<input class='$tagClass' type='$type' name='$name' placeholder='  $placeHolder' >";
        return $this->inputTag;
    }

    private function labelCreater($content,$for,$class)
    {
        $class = $class."__label";
        $this->labelTag = "<label class='$class'  for='$for'>$content</label>";
        return $this->labelTag;
    }
}

// class InputCreater
// {
//     public $tagInput = "";

//     public function __construct($name, $type, $placeHolder,$tagClass)
//     {

//         $this->tagInput = "<input class='$tagClass' type='$type' name='$name' placeholder='$placeHolder' >";
//         echo $this->tagInput;
//     }

//     private function labelCreater($content,$for,$class)
//     {

//     }
// }