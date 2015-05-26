<?php

namespace DP\Fields;

use DP\Fields\AbstractField;

class Input extends AbstractField
{
    protected $type;
    
    public function __construct($type = "text")
    {
        $this->type = $type;
    }
    
    public function getType()
    {
        return $this->type;
    }
    
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
    
    public function getField() 
    {
        $field = '<input type="' . $this->type . '" ';
        $field .= 'id="' . $this->id . '" ';
        $field .= 'name="' . $this->name . '" ';
        $field .= 'class="' . $this->class . '" ';
        $field .= 'value="' . $this->value . '" ';
        $field .= 'placeholder="' . $this->placeholder . '" ';
        $field .= "/>";
        
        return $field;
    }
}
