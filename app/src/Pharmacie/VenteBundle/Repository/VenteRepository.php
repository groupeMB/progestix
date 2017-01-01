<?php

namespace Pharmacie\VenteBundle\Repository;

/**
 * VenteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class VenteRepository extends \Doctrine\ORM\EntityRepository
{
	public function getLastID()
	{
		$query = $this->getEntityManager()
	        ->createQuery('
	            SELECT Max(i) FROM PharmacieVenteBundle:Vente i '
	        );
        try
        {
        	return $query->getSingleScalarResult();
        }
        catch (\Doctrine\ORM\NoResultException $e) {
        	return null;
      	}
	}
}