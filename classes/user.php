<?php

require('interfaces/UserInterface.php');

class user implements UserInterface
{
    private $request;

    public function __construct() {
        $this->getRequest($_REQUEST);
    }


    /**
     * Retrieve variables sent by the user
     * @param $request
     */
    public function getRequest($request)
    {
        $this -> request = $request;
    }

    /**
     *display the different variables
     */
    public function parseRequest()
    {
        return $this->request;
    }
}