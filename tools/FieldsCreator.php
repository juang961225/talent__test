<?php
class FieldsCreator
{
    private $element;
    private $inputElement;
    private $labelElement = "";
    private $passwordElement;


    /**
     * this method creates any single record field
     * @param string $name name of the input
     * @param string $type input type
     * @param string $placeHolder input placeholder
     * @param string $tagClass axillary class
     * @param string $tagInput input class
     * @return string nodeHtlm field
     */
    public function inputCreator($name, $type, $placeHolder, $tagClass, $tagInput)
    {
        $label = $this->labelCreator($placeHolder,$name,$tagInput);
        $tagInput = $tagInput."__input";
        $this->inputElement = "<div class='$tagClass'>$label<input class='$tagInput' type='$type' name='$name' placeholder='  $placeHolder'/></div>";
        return $this->inputElement;
    }

    /**
     * method for creating label labels
     * @param string $content content to be carried by the label
     * @param string $for name of the input to which it is associated
     * @param string $class label class
     * @return string html label tag
     */
    private function labelCreator($content, $for, $class)
    {
        $class = $class."__label";
        $this->labelElement = "<label class='$class'  for='$for'>$content</label>";
        return $this->labelElement;
    }

    /**
     * this method creates a password input field with its label input and icon
     * @param string $name input name and for of the label
     * @param string $type the type of input
     * @param string $placeHolder the text to be displayed in the placeholder
     * @param string $tagClass axuliary class
     * @param string $tagInput input ben element class
     * @return string returns an html div with the entire password field completed
     */
    public function inputPassword($name, $type, $placeHolder, $tagClass, $tagInput)
    {

        $class = $tagInput."__input ".$tagInput."__input--pass";
        $label = $this->labelCreator($placeHolder,$name,$tagInput);
        $divTag = "<div class='login__password'>";
        $buttonTag = "<button class='login__icon'><i class='far fa-eye'></i></button>";
        $this->passwordElement =$divTag."<input class='$class' type='$type' name='$name' placeholder='  $placeHolder' >".$buttonTag."</div>";
        $this->inputElement = "<div class='$tagClass'>$label $this->passwordElement</div>";
        return $this->inputElement;
    }
}