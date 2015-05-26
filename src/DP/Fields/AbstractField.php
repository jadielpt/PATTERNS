<?php

namespace DP\Fields;

use DP\Interfaces\iFormField;

abstract class AbstractField implements iFormField
{
    protected $id;
    protected $name;
    protected $value;
    protected $class;
    protected $placeholder;


    public function getId() 
    {
        return $this->id;
    }

    public function getName() 
    {
        return $this->name;
    }

    public function getValue() 
    {
        return $this->value;
    }
    
    public function getClass()
    {
        return $this->class;
    }
    
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    public function setId($id) 
    {
        $this->id = $id;
        return $this;
    }

    public function setName($name) 
    {
        $this->name = $name;
        return $this;
    }

    public function setValue($value) 
    {
        $this->value = $value;
        return $this;
    }
    
    public function setClass($class)
    {
        $this->class = $class;
        return $this;
    }
    
    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
        return $this;
    }
    
    abstract public function getField();

}
