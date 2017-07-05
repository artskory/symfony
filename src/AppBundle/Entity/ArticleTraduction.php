<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Translatable\Entity\MappedSuperclass\AbstractTranslation;

/**
 * @ORM\Table(name="article_traduction", indexes={
 *      @ORM\Index(name="article_traduction_idx", columns={"locale", "object_class", "field", "foreign_key"})
 * })
 * @ORM\Entity(repositoryClass="Gedmo\Translatable\Entity\Repository\TranslationRepository")
 */
class ArticleTraduction extends AbstractTranslation
{
    /**
     * All required columns are mapped through inherited superclass
     */
}