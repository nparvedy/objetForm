<?php 

    namespace Tuto;

    class CssForm extends \Tuto\Form {

        public function surround($html){
            return "<div class=\"form-label\">{$html}</div>";
        }

        public function input($name){
            return $this->surround(
                '<label>' . $name . '</label>
                <input type="text" name="' . $name . '" value="' . $this->getValue($name) . '" class="form-input-text">'
            );
        }

        public function submit(){
            return $this->surround('<button type="submit" class="form-button">Envoyer</button>');
        }

    }