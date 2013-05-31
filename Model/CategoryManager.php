<?php

/*
 * This file is part of the BixCategoryBundle package.
 *
 * (c) Andrea Biggi <http://andreabiggi.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bix\Bundle\CategoryBundle\Model;

/**
 * undocumented class
 *
 * @package default
 * @author 
 **/
abstract class CategoryManager implements CategoryManagerInterface
{
    /**
     * Returns an empty category instance
     *
     * @return CategoryInterface
     */
    public function createCategory()
    {
        $class = $this->getClass();
        $category = new $class;

        return $category;
    }

    public function findCategoryBySlug($slug)
    {
        return $this->findCategoryBy(array('slug' => $slug));
    }

}