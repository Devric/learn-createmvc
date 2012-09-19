<?php

/**
 * Views for news
 */


class View_Model
{

    /**
     *  var to template 
     */
    private $data = array();
    
    /**
     * render status of view
     */
    private $render = FALSE;
    
    /**
     * Accept a template to load
     */

    function __construct($template)
    {
    	// compose file name
        $file = SERVER_ROOT . '/views/' . strtolower($template) . '.php';

        if (file_exists($file)) {

            /**
             * trigger render to include file when this model is destroyed
             * if we render it now, we wouldn't be able to assign var to view
             */
            $this->render = $file;
        }
    }
    
    /**
     * Receives assignments from controller and stores in local data array
     * 
     * @param mixed $var 
     * @param mixed $val 
     * @access public
     * @return void
     */
    public function assign($var, $val)
    { 
        $this->data[$var] = $val;
    }

    public function __destruct()
    { 

        // parse data to local var, to render it to view
        $data = $this->data;

        // render view
        include($this->render);
    }

}
