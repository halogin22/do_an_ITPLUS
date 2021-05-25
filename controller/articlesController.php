<?php 
include_once './model/articles.php';

class articlesController extends blog
{	
	private $blog;

	function __construct()
	{
		$this->blog = new blog();
	}
	function indexblog()
	{
		if(isset($_GET['page'])){
            $page = $_GET['page'];
          }else{
            $page = 'home';
          }
        switch ($page) {
            case 'blog':
                $blol = $this->blog->indexBlogL();
                $bloc = $this->blog->indexBlogC();
                $blor = $this->blog->indexBlogR();
                include_once './view/pages/blog.php';
                break;
              case 'blog-menu':
                if(isset($_GET['id'])){
                  $id = (int)$_GET['id'];
                  $bloid = $this->blog->indexBlogID($id);
                  $bloname = $this->blog->indexBlogName($id);
                }
                include_once './view/pages/blog.php';
                break;
            case 'blog-details':
                if(isset($_GET['id'])){
                  $id = (int)$_GET['id'];
                  $blo = $this->blog->indexBlogDetail($id);
                  $menusum = $this->blog->indexBlogSumMenu();
                  $menu = $this->blog->indexBlogMenu();
                  $fe = $this->blog->featurepost();
                }
                include_once './view/pages/blog-details.php';
                break;
            default:
                # code...
                break;
        }
	}
}

?>