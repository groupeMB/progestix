namespace Gestion\StockBundle\Service;

use Doctrine\ORM\EntityManager;

class BaseDD{

	private $em;

	public function __construct($em)
    {
        $this->em = $em;
    }

    public function getAllCategorie(){
	    $em = $this->getDoctrine()->getManager();
	    $categs = $em->getRepository('GestionStockBundle:Categorie')->findAll();

	    $res = array();
	    foreach ($categs as $key => $categ) {
	        $res[$key] = $categ->getContent();
	    }

	    return $res;
    }
}