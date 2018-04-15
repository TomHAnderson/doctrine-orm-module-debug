<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Db\Entity;

class IndexController extends AbstractActionController
{
    private $objectManager;

    public function __construct($objectManager)
    {
        $this->objectManager = $objectManager;
    }

    public function indexAction()
    {
        $this->objectManager->getRepository(Entity\Artist::class)
            ->findAll();

        return new ViewModel();
    }
}
