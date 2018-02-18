<?php
/**
 * Created by PhpStorm.
 * User: dimon
 * Date: 18.02.18
 * Time: 11:49
 */

namespace App\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function mainMenu(FactoryInterface $factory, array $options = [])
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Home', array('route' => 'data'));

        // access services from the container!
        //$em = $this->container->get('doctrine')->getManager();
        // findMostRecent and Blog are just imaginary examples
        //$blog = $em->getRepository('AppBundle:Blog')->findMostRecent();

        $menu->addChild('Latest Blog Post', array('route' => 'data'));

        // create another menu item
        $menu->addChild('About Me', array('route' => 'data'));
        // you can also add sub level's to your menu's as follows
        $menu['About Me']->addChild('Edit profile', array('route' => 'data'));

        // ... add more children

        return $menu;
    }
}