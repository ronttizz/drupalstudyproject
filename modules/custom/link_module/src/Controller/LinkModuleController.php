<?php

namespace Drupal\link_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Link;
use Drupal\Core\Url;

class LinkModuleController extends ControllerBase {
    public function link() {

        // Go to block admin page
        $url1 = Url::fromRoute('block.admin_display');
        $link1 = Link::fromTextAndUrl(t('Go to block admin page'), $url1);
        $list[] = $link1;
    
        // Go to content admin page
        $url2 = Url::fromRoute('system.admin_content');
        $link2 = Link::fromTextAndUrl(t('Go to content admin page'), $url2);
        $list[] = $link2;

        // Go to user admin page
        $url3 = Url::fromRoute('entity.user.collection');
        $link3 = Link::fromTextAndUrl(t('Go to user admin page'), $url3);
        $list[] = $link3;

        // Go to front page
        $url4 = Url::fromRoute('<front>');
        $link4 = Link::fromTextAndUrl(t('Go to front page'), $url4);
        $list[] = $link4;

        // Go to external
        $options = [
            'attributes' => [
                'target' => '_blank',
                'title' => 'Links to external website',
            ],
        ];
        $url5 = Url::fromUri('https://www.bc.fi/', $options);
        $link5 = Link::fromTextAndUrl(t('Go to BC.fi'), $url5);
        $list[] = $link5;

        // Mount the render output

        $output['customer_links'] = [
            '#theme' => 'item_list',
            '#items' => $list,
            '#title' => $this->t('Customer links as requested:'),
        ];

        return $output;
    }
}