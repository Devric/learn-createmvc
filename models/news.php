<?

/**
 * News_Model 
 * 
 * @package 
 * @version $id$
 * @copyright 2007-2011 FunkyMunky Inc
 * @author Devric <devric.co.cc> 
 * @license PHP Version 5.0 {@link http://www.php.net/license/3_0.txt}
 */
class News_Model
{

    function __construct()
    {
    }

    private $articles = array(
        'new' => array (
            'title' => 'New Website',
            'content' => 'Welcome to the site'
        )
        , 
        'mvc' => array (
            'title' => 'PHP mvc is awsome',
            'content' => 'what you rekon, come get it'
        )
        ,
        'test' => array(
            'title' => 'testing',
            'content' => 'this is jsut a test'
        )
    );



    /**
     * Fetch article based on supplied name
     * 
     * @param mixed $articleName 
     * @access public
     * @return void
     */
    public function get_article($articleName)
    { 
        // fetch article
        $article = $this->articles[$articleName];

        return $article;
    }
}
