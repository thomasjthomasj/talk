<?php

namespace Talk\Person\Personality;

require_once('Traits/Aggressive.php');
require_once('Traits/Beatle.php');
require_once('Traits/Boring.php');
require_once('Traits/Friendly.php');

use Talk\Person\Personality\Traits\Aggressive;
use Talk\Person\Personality\Traits\Beatle;
use Talk\Person\Personality\Traits\Boring;
use Talk\Person\Personality\Traits\Friendly;

class Personality{

    /**
     * @var array
     */
    protected $_traits = array();

    public function __construct(){
        $this->_assignTraits();
    }

    /**
     * @throws \Exception
     * @return array
     */
    public function getTraits(){
        if(count($this->_traits)){
            return $this->_traits;
        }
        throw new \Exception('No traits set');
    }

    /**
     * @return Personality
     */
    public function sayHello(){
        $traits = $this->getTraits();
        $traits[mt_rand(0, 1)]->sayHello();
        return $this;
    }

    /**
     * @return Personality
     */
    public function saySomethingInteresting(){
        $traits = $this->getTraits();
        $traits[mt_rand(0, 1)]->saySomethingInteresting();
        return $this;
    }

    /**
     * @return Personality
     */
    public function sayGoodbye(){
        $traits = $this->getTraits();
        $traits[mt_rand(0, 1)]->sayGoodbye();
        return $this;
    }

    /**
     * @return Personality
     */
    protected function _assignTraits(){
        $traits = $this->_traitsArray();
        while(count($this->_traits) < 2){
            $rand = mt_rand(0, (count($traits) - 1));
            $trait = $traits[$rand];
            $this->_traits[$trait->name] = $trait;
        }
        sort($this->_traits);
        return $this;
    }

    /**
     * @return array
     */
    protected function _traitsArray(){
        $traits = array();
        $traits[] = new Aggressive;
        $traits[] = new Beatle;
        $traits[] = new Boring;
        $traits[] = new Friendly;

        return $traits;
    }

}