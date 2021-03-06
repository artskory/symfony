<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * ArticleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ArticleRepository extends EntityRepository
{
    public function getArticleByIdWithLeftJoin($id) {
        
        $qb = $this->createQueryBuilder('a');
        $qb->leftJoin('a.image', 'i')
                ->addSelect('i')
                ->leftJoin('a.commentaires', 'c')
                ->addSelect('c')
                ->leftJoin('a.tags', 't')
                ->addSelect('t')
                ->where('a.id = ?1')
                ->setParameter(1, $id)
                ->orderBy('a.date', 'DESC');
        
        $query = $qb->getQuery();
        
        $article = $query->getOneOrNullResult();
        
        return $article;
    }
    public function getArticleBySlugWithLeftJoin($slug) {
        
        $qb = $this->createQueryBuilder('a');
        $qb->leftJoin('a.image', 'i')
                ->addSelect('i')
                ->leftJoin('a.commentaires', 'c')
                ->addSelect('c')
                ->leftJoin('a.tags', 't')
                ->addSelect('t')
                ->where('a.slug = ?1')
                ->setParameter(1, $slug)
                ->orderBy('a.date', 'DESC');
        
        $query = $qb->getQuery();
        $query->setHint(\Gedmo\Translatable\TranslatableListener::HINT_INNER_JOIN, true);
        $article = $query->getOneOrNullResult();
        
        return $article;
    }
    
    public function getArticleWithLeftJoinWithPagination($offset, $limit) {
        
        $qb = $this->createQueryBuilder('a');
        $qb->leftJoin('a.image', 'i')
                ->addSelect('i')
                ->leftJoin('a.tags', 't')
                ->addSelect('t')
                ->orderBy('a.date', 'DESC')
                ->setFirstResult($offset)
                ->setMaxResults($limit);
        
        $query = $qb->getQuery();
        
//        $articles = $query->getArrayResult();
//        
//        return $articles;
        
        return new Paginator($query);
    }
    
    public function getArticlesWithLeftJoin() {
        
        $qb = $this->createQueryBuilder('a');
        $qb->leftJoin('a.image', 'i')
                ->addSelect('i')
                ->leftJoin('a.commentaires', 'c')
                ->addSelect('c')
                ->leftJoin('a.tags', 't')
                ->addSelect('t')
                ->where('a.publication = 1')
                ->orderBy('a.date', 'DESC');
        
        $query = $qb->getQuery();
        
        $article = $query->getResult();
        
        return $article;
    }
    
    public function getArticlesByTagWithLeftJoin($id) {
        
        $qb = $this->createQueryBuilder('a');
        $qb->leftJoin('a.image', 'i')
                ->addSelect('i')
                ->leftJoin('a.tags', 't')
                ->addSelect('t')
                ->where('t.id = ?1')
                ->setParameter(1, $id)
                ->andwhere('a.publication = 1')
                ->orderBy('a.date', 'DESC');
        
    return    $query = $qb->getQuery();
        
      //  $article = $query->getResult();
        
     //   return $article;
    }
    
    public function getCountArticlesByTagWithLeftJoin($id) {
        
        $qb = $this->createQueryBuilder('a');
        $qb->select('COUNT(a)')
               
                ->leftJoin('a.tags', 't')
              
                ->where('t.id = ?1')
                ->setParameter(1, $id)
                ->andwhere('a.publication = 1')
               ;
        
        $query = $qb->getQuery();
        
        $article = $query->getSingleScalarResult();
        
        return $article;
    }
    
    public function getFooterArticles($nb) {
        
        $qb = $this->createQueryBuilder('a');
        $qb
                ->orderBy('a.date', 'DESC')
                ->where('a.publication = true')
                ->setMaxResults($nb)
                ;
        
        $query = $qb->getQuery();
        
        $article = $query->getResult();
        
        return $article;
    }
    
    public function getYears($limit = 5) {
        if ((int) $limit) {
            return $this->createQueryBuilder('a')
                ->select('SUBSTRING(a.date,1,4)')
                ->distinct()
                ->orderBy('a.date', 'DESC')
                ->setMaxResults($limit)
                ->getQuery()
                ->getResult();
        }
        return null;
    }
    
    public function getArchiveArticles($year) {
        
        $qb = $this->createQueryBuilder('a');
        $qb->   orderBy('a.date', 'DESC')
                ->where('a.publication = true')
                ;
        
        $query = $qb->getQuery();
        
        $article = $query->getResult();
        
        return $article;
    }
    
    public function getArticlesByYear($year) {
        $debut = $year . '-01-01';
        $fin = $year . '-12-31';
        $qb = $this->createQueryBuilder('a')
                ->leftJoin('a.image', 'i')
                ->addSelect('i')
                ->leftJoin('a.tags', 't')
                ->addSelect('t')
                ->where('a.date >= ?1 AND a.date<= ?2')
                ->setParameter(1, $debut)
                ->setParameter(2, $fin)
                ->andWhere('a.publication = 1')
                ->orderBy('a.date', 'DESC');

        $query = $qb->getQuery();

        return $query->getArrayResult();
    }
}
