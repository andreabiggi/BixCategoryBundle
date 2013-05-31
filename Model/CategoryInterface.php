<?php
/**
 * Interface for Agnostic Class Category
 *
 * @package default
 * @author Andrea Biggi
 **/

namespace Bix\Bundle\CategoryBundle\Model;

interface CategoryInterface 

{
    public function getId();

    public function setTitle($title);

    public function getTitle();

    public function setSlug($slug);

    public function getSlug();

    public function setPosition($position);

    public function getPosition();

    public function setIsEnabled($isEnabled);
    
    public function getIsEnabled();

    public function setParent(Category $parent = null);

    public function getParent();
} // END interface CategoryInterface