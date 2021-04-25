<?php 

namespace Drupal\ngt_general\Plugin\Config\Block;

use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;
use Drupal\ngt_general\Plugin\Block\ExpertHomeBlock;

/**
 * Manage config a 'ExpertHomeBlockClass' block
 */
class ExpertHomeBlockClass {
    protected $instance;
    protected $configuration;

    /**
     * @param \Drupal\ngt_general\Plugin\Block\ExpertHomeBlock $instance
     * @param $config
     */
    public function setConfig(ExpertHomeBlock &$instance, &$config){
        $this->instance = &$instance;
        $this->configuration = &$config;
    }

    /**
     * {@inheritdoc}
     */
    public function defaultConfiguration() {
        return [];
    }

    /**
     * @param \Drupal\ngt_general\Plugin\Block\ExpertHomeBlock $instance
     * @param $config
     */
    public function build(ExpertHomeBlock &$instance, $configuration){
        // $config = \Drupal::config('ngt_general.adminSettingsExpert');  

        // $build = [
        //     '#theme' => 'benefit_home',
        //     '#benefit_1' => $config->get('beneficio_1'),
        //     '#benefit_2' => $config->get('beneficio_2'),
        //     '#benefit_3' => $config->get('beneficio_3'),
        // ];

        return $build;
    }

}