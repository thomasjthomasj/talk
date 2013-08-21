<?php

namespace Talk\Person\Feature;

require_once('FeatureAbstract.php');

class Hair extends FeatureAbstract{

    /**
     * @var array
     */
    protected $_possibleColours = array(
        'blonde',
        'brown',
        'red',
        'white',
        'black',
        'grey'
    );

}