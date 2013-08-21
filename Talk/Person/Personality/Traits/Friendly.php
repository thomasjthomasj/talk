<?php

namespace Talk\Person\Personality\Traits;

require_once('TraitAbstract.php');

class Friendly extends TraitAbstract{

    /**
     * @var string
     */
    public $name = 'Friendly';

    /**
     * @var array
     */
    protected $_hellos = array(
        'Hello there',
        'Good day to you',
        'Bonjour!'
    );

    /**
     * @var array
     */
    protected $_goodbyes = array(
        'See ya later!',
        'It was a real pleasure talking to you',
        "I've thoroughly enjoyed this conversation but I'm afraid I must be on my way. I hope we meet again"
    );

    /**
     * @var array
     */
    protected $_interestingThings = array(
        'Did you know that other than Earth, the Moon is the only natural object in space man has walked on?',
        'I bought my tie from Primark, but my shoes are Gucci',
        'My favourite book is almost definitely the Da Vinci Code'
    );

}