<?

/**
 * News_Controller 
 * handles the retrieval and serving news article 
 * 
 * @package 
 * @version $id$
 * @copyright 2007-2011 FunkyMunky Inc
 * @author Devric <devric.co.cc> 
 * @license PHP Version 5.0 {@link http://www.php.net/license/3_0.txt}
 */
class News_Controller
{
    /**
     *  Template var will hold the view 
     */
    
    public $template = 'news';

    public function main( array $getVars)
    { 

        $newsModel = new News_Model;

        // get article from model
        $article = $newsModel->get_article( $getVars['article'] );

        // create new view and use a template
        $view = new View_Model($this->template);

        $view->assign('title', $article['title']);
        $view->assign('content', $article['content']);
    }
}
