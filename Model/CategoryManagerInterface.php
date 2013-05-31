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
use Bix\Bundle\CategoryBundle\Model\CategoryInterface;

/**
 * Interface to be implemented by category managers. This adds an additional level
 * of abstraction between your application, and the actual repository.
 *
 * All changes to users should happen through this interface.
 *
 * @package default
 * @author Andrea Biggi <andrea.biggi@gmail.com>
 **/
interface CategoryManagerInterface
{
    /**
     * Creates an empty category instance.
     *
     * @return CategoryInterface
     */
    public function createCategory();

    /**
     * Deletes a category.
     *
     * @param CategoryInterface $category
     *
     * @return void
     */
    public function deleteCategory(CategoryInterface $category);

    /**
     * Finds one Category by the given criteria.
     *
     * @param array $criteria
     *
     * @return CategoryInterface
     */
    public function findCategoryBy(array $criteria);

    /**
     * Find a Category by its Categoryname.
     *
     * @param string $slug
     *
     * @return CategoryInterface or null if Category does not exist
     */
    public function findCategoryBySlug($slug);

    /**
     * Returns a collection with all Category instances.
     *
     * @return \Traversable
     */
    public function findCategories();

    /**
     * Returns the Category's fully qualified class name.
     *
     * @return string
     */
    public function getClass();

    /**
     * Reloads a Category.
     *
     * @param CategoryInterface $Category
     *
     * @return void
     */
    public function reloadCategory(CategoryInterface $category);

    /**
     * Updates a Category.
     *
     * @param CategoryInterface $Category
     *
     * @return void
     */
    public function updateCategory(CategoryInterface $category);

    /**
     * Get the childrens of category paremeters
     * @param  CategoryInterface $category
     * @return ArrayCollection
     */
    public function getChildrensOf(CategoryInterface $category, $direct, $sortBy);
} 