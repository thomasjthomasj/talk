<?php

namespace Talk\Person\Personality\Traits;

require_once('TraitInterface.php');

abstract class TraitAbstract implements TraitInterface{

    /**
     * @var array
     */
    protected $_hellos = array(
        'Hello'
    );

    /**
     * @var array
     */
    protected $_goodbyes = array(
        'Goodbye'
    );

    /**
     * @var array
     */
    protected $_interestingThings = array();

    /**
     * @return TraitAbstract
     */
    public function sayHello(){
        echo $this->_saySomethingFrom($this->_hellos);
        return $this;
    }

    /**
     * @return TraitAbstract
     */
    public function saySomethingInteresting(){
        echo $this->_saySomethingFrom($this->_interestingThings);
        return $this;
    }

    /**
     * @return void
     */
    public function sayGoodbye(){
        echo $this->_saySomethingFrom($this->_goodbyes);
        exit;
    }

    /**
     * @param array $array
     * @throws \Exception
     * @return string
     */
    protected function _saySomethingFrom(array $array){

        if(!count($array)){
            throw new \Exception(__CLASS__ . '::' . __METHOD__ . ' - array is empty!');
        }
        $rand = mt_rand(0, (count($array) -1));
        return $array[$rand] . PHP_EOL;

    }

}