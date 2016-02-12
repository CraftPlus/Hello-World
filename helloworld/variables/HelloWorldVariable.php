<?php

namespace Craft;

class HelloWorldVariable
{
    /**
     * Whatever you want to output to a Twig tempate can go into a Variable method. You can have as many variable functions as you want.  From any Twig template, call it like this:
     *
     *     {{ craft.helloWorld.hello }}
     *
     */
    public function hello()
    {
        return "Hello World";
    }
}