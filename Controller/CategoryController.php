<?php

namespace Bix\Bundle\CategoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormFactoryInterface;
use Bix\Bundle\CategoryBundle\Entity\RecursiveCategoryIterator;

class CategoryController extends Controller
{ 
    public function indexAction()
    {
        // All categories
        $cm = $this->get('bix_category.category_manager');
        $allCat = $cm->findCategories();

        // pizza childrens
        $pizza = $cm->findCategoryBySlug('pizza');
        $pizzaChildrens = $cm->getChildrensOf($pizza);

        // Roots categories
        $roots = $cm->getRoots();

        return $this->render('BixCategoryBundle:Category:index.html.twig', array(
            'allCat' => $allCat,
            'pizzaChildrens' => $pizzaChildrens,
            'roots' => $roots,
        ));
    }

    public function newAction()
    {
        $form = $this
                    ->get('form.factory')
                    ->create($this->get('bix_category.category_form'));


        return $this->render('BixCategoryBundle:Category:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function catMenuAction()
    {
//        $cm = $this->get('bix_category.category_manager');
//        $catList = $cm->buildCategoryList();
        
     

        return $this->render('BixCategoryBundle:Category:catMenu.html.twig', array('catList' => $catList));
    }
}
