<?php

namespace Talk\Person\Personality\Traits;

require_once('TraitAbstract.php');

class Aggressive extends TraitAbstract{

    /**
     * @var string
     */
    public $name = 'Aggressive';

    /**
     * @var array
     */
    protected $_hellos = array(
        'Yeah what do you want?',
        "If you talk to me again I'm going to box your ears!"
    );

    /**
     * @var array
     */
    protected $_interestingThings = array(
        'What is that supposed to mean?',
        'I met someone like you once, he ended up in a coma'
    );

    /**
     * @var array
     */
    protected $_goodbyes = array(
        'Get the hell outta here!',
        "Yeah that's right, walk away!"
    );

}