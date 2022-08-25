<?php

namespace Drupal\my_module\Controller;

use \Drupal\Core\StringTranslation\StringTranslationTrait;

class MyController {
    use StringTranslationTrait;
    
   public function module() {
    return array('#markup' => $this->t('My own Module')); 
} 
};
