<?php

namespace Drupal\first_module\Controller;

class FirstController {
    public function first() {
        return array('#markup' => 'Welcome to Drupal website');
    }
}