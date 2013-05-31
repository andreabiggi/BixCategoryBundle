<?php

namespace Bix\Bundle\CategoryBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
// use Doctrine\Common\Collections\Collection;
//use Doctrine\Common\Collections\ArrayCollection;

/**
* Storage agnostic category object
*
* @author Andrea Biggi <andrea.biggi@gmail.com>
*/
abstract class Category implements CategoryInterface
{
    
    protected $id;

    /**
     * Category displayed name.
     * @var string
     */
    protected $title;
    
    /**
     * Slugized category name.
     * @var string
     */
    protected $slug;

    /**
     * Position in categories list.
     * @var int
     */
    protected $position;
   
    /**
     * Category is enabled?
     * @var boolean
     */
    protected $isEnabled;

    /**
     * Store tree left value.
     * @var int
     */
    protected $lft;

    /**
     * Store the tree level
     * @var int
     */
    protected $lvl;

    /**
     * Store tree right value.
     * @var int
     */
    protected $rgt;

    /**
     * Store tree**root** id value
     * @var int
     */
    protected $root;

    /**
     * The parent
     * @var Category
     */
    protected $parent;

    /**
     * The children
     * @var Category
     */
    protected $children;

    public function __construct()
    {
        $this->position = 0;
        $this->isEnabled = TRUE;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
    
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }
    
    public function getSlug()
    {
        return $this->slug;
    }

    public function setLvl($lvl)
    {
        $this->lvl = $lvl;
    }

    public function getLvl()
    {
        return $this->lvl;
    }

    public function setPosition($position)
    {
        $this->position = $position;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;
    }

    public function getIsEnabled()
    {
        return $this->isEnabled;
    }

    public function setParent(Category $parent = null)
    {
        $this->parent = $parent;    
    }

    public function getParent()
    {
        return $this->parent;   
    }

    public function __toString()
    {
        $this->getTitle;
    }
}