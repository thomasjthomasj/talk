<?php

namespace Talk\Person\Feature;

abstract class FeatureAbstract{

    /**
     * @var string
     */
    public $colour;

    /**
     * @var array
     */
    protected $_possibleColours = array();

    public function __construct(){
        if(count($this->_possibleColours)){
            $rand = mt_rand(0, (count($this->_possibleColours) - 1));
            $colour = $this->_possibleColours[$rand];
            $this->setColour($colour);
        }else{
            throw new \Exception('No possible colours set');
        }
    }

    /**
     * @param $colour
     * @return Feature
     */
    public function setColour($colour){
        $this->colour = $colour;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getColour(){
        return $this->colour;
    }

}