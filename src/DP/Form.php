<?php

namespace DP;

use DP\Interfaces\Renderable;
use DP\Interfaces\iFormField;

class Form implements Renderable
{
    protected $fields = array();
    protected $action;
    protected $method = "POST";
    
    public function __construct($action = "", $method = "POST")
    {
        $this->action = $action;
        $this->method = in_array(strtoupper($method), ["GET", "POST"]) ? $method : "POST";
    }


    public function addField(iFormField $field)
    {
        $this->fields[] = $field;
    }
    
    public function render()
    {
        echo "<form action=\"{$this->action}\" method=\"{$this->method}\">";
        foreach($this->fields as $field) {
            echo $field->getField();
        }
        echo "</form>";
    }
}
