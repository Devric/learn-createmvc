<?

/**
 *  handles the retrieval and serving news article 
 */

/**
 * 
 */


class News_Controller
{
    /**
     *  Template var will hold the view 
     */
    
    public $template = 'news';

    public function main( array $getVars)
    { 
        print 'we are in news!';
        print '<br />';
        $vars = print_r($getVars, TRUE);
        print ( "the following GET vars were passed to this controller:" . '<pre>' . $vars . "</pre>" );
    }
}
