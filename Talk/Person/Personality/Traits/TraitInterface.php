<?php

namespace Talk\Person\Personality\Traits;

interface TraitInterface{

    /**
     * @return string
     */
    function sayHello();

    /**
     * @return string
     */
    function sayGoodbye();

    /**
     * @return string
     */
    function saySomethingInteresting();

}