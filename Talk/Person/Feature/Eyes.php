<?php

namespace Talk\Person\Feature;

require_once('FeatureAbstract.php');

class Eyes extends FeatureAbstract{

    /**
     * @var array
     */
    protected $_possibleColours = array(
        'blue',
        'brown',
        'green',
        'grey',
        'hazel'
    );

}