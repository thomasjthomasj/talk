<?php

namespace Talk\Person\Personality\Traits;

require_once('TraitAbstract.php');

class Beatle extends TraitAbstract{

    /**
     * @var string
     */
    public $name = 'Beatle';

    /**
     * @var array
     */
    protected $_hellos = array(
        'Hello hello!',
        'Good morning! Good morning!',
        'Goodday sunshine',
        'Hey Bungalow Bill'
    );

    /**
     * @var array
     */
    protected $_interestingThings = array(
        "Flew in from Miami Beach, B. O. A. C, didn't get to bed last night",
        "Half of what I say is meaningless",
        "When I get to the bottom I go back to the top of the slide",
        "Words are flowing out like endless rain into a paper cup"
    );

    /**
     * @var array
     */
    protected $_goodbyes = array(
        "I don't want to spoil the party so I'll go",
        'Goodnight',
        "I don't know why you say goodbye, I say hello"
    );

}