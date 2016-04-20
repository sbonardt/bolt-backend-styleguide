<?php

namespace Bolt\Extension\Bobdenotter\BackendStyleguide;

use Bolt\Extension\SimpleExtension;
use Bolt\Menu\MenuEntry;
use Silex\ControllerCollection;

/**
 * Backen Styleguide Extension class.
 *
 * @author Bob den Otter <bob@twokings.nl>
 */
class BackendStyleguideExtension extends SimpleExtension
{


    protected function registerMenuEntries()
    {
        $menu = new MenuEntry('backend-styleguide', 'styleguide');
        $menu->setLabel('Backend Styleguide')
            ->setIcon('fa:diamond')
            ->setPermission('settings')
        ;

        return [
            $menu,
        ];
    }


    protected function registerBackendRoutes(ControllerCollection $collection)
    {
        $collection->get('/extend/styleguide', [$this, 'callbackStyleguide']);
    }

    public function callbackStyleguide()
    {
        $context = [
            'name' => 'Kenny Koala',
            'home' => 'Gum Tree Lane',
        ];
        return $this->renderTemplate('backend-styleguide.twig', $context);
    }

}
