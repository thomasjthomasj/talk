<?php

namespace Talk\Person;

require_once('Feature/Hair.php');
require_once('Feature/Eyes.php');
require_once('Personality/Personality.php');

use Talk\Person\Feature\Eyes;
use Talk\Person\Feature\Hair;
use Talk\Person\Personality\Personality;

class Person{

    /**
     * @var Hair
     */
    public $hair;

    /**
     * @var Eyes
     */
    public $eyes;

    /**
     * @var string
     */
    public $name;

    /**
     * @var Personality
     */
    protected $_personality;

    /**
     * @var bool
     */
    protected $_saidHello = false;

    /**
     * @var bool
     */
    protected $_introduced = false;

    /**
     * @var string
     */
    protected $_mood = 'bad';

    public function __construct(){

        $hair = new Hair;
        $eyes = new Eyes;
        $personality = new Personality;

        $this->setHair($hair);
        $this->setEyes($eyes);
        $this->setPersonality($personality);
        $this->setMood();
        $this->_setName();
    }

    /**
     * @param $hair
     * @return Person
     */
    public function setHair(Hair $hair){
        $this->hair = $hair;
        return $this;
    }

    /**
     * @return Hair
     */
    public function getHair(){
        return $this->hair;
    }

    /**
     * @param $eyes
     * @return Person
     */
    public function setEyes(Eyes $eyes){
        $this->eyes = $eyes;
        return $this;
    }

    /**
     * @return Feature\Eyes
     */
    public function getEyes(){
        return $this->eyes;
    }

    /**
     * @param $personality
     * @return Person
     */
    public function setPersonality(Personality $personality){
        $this->_personality = $personality;
        return $this;
    }

    /**
     * @param null $mood
     * @return Person
     */
    public function setMood($mood = null){
        $bool = mt_rand(0, 9);
        if($mood){
            $this->_mood = $mood;
        }elseif($bool){
            $this->_mood = 'good';
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getMood(){
        return $this->_mood;
    }

    /**
     * @return Person
     */
    public function sayHello(){
        if($this->_saidHello){
            echo 'I already said hello!' . PHP_EOL;
        }else{
            $this->_personality->sayHello();
            $this->_saidHello = true;
        }
        return $this;
    }

    /**
     * @return Person
     */
    public function saySomethingInteresting(){
        if(!$this->_saidHello){
            $this->sayHello();
        }
        if(!$this->_introduced){
            $this->talkAboutYourself();
            $this->_introduced = true;
        }else{
            $this->_personality->saySomethingInteresting();
        }
        return $this;
    }

    /**
     * @return Person
     */
    public function sayGoodbye(){
        $this->_personality->sayGoodbye();
        return $this;
    }

    /**
     * @return Person
     */
    public function howAmI(){
        if(!$this->_saidHello){
            $this->sayHello();
        }
        $response = "I'm " . $this->getMood();
        $response .= ($this->getMood() != 'bad') ? ', thanks for asking!' : '.';
        echo $response . PHP_EOL;
        return $this;
    }

    /**
     * @return Person
     */
    public function talkAboutYourself(){
        if(!$this->_saidHello){
            $this->sayHello();
        }
        echo 'My name is ' . $this->name . '. I have ' . $this->eyes->getColour() . ' eyes and ' . $this->hair->getColour() . ' hair' . PHP_EOL;
        return $this;
    }

    /**
     * @return Person
     */
    protected function _setName(){

        $rand = mt_rand(0, 4);

        switch($rand){
            case 0 :
                $this->name = 'Randy';
                break;
            case 1 :
                $this->name = 'Mandy';
                break;
            case 2 :
                $this->name = 'Sandy';
                break;
            case 3 :
                $this->name = 'Andy';
                break;
            default :
                $this->name = 'Ralph';
        }

        return $this;
    }

}