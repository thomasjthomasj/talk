<?php

namespace Talk\Person\Personality\Traits;

require_once('TraitAbstract.php');

class Boring extends TraitAbstract{

    /**
     * @var string
     */
    public $name = 'Boring';

    /**
     * @var array
     */
    protected $_interestingThings = array(
        'The price of milk has gone up recently',
        'I swear it feels like a Sunday today'
    );

}