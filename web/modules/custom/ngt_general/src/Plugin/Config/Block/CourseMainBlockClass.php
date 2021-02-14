<?php 

namespace Drupal\ngt_general\Plugin\Config\Block;

use Drupal\node\Entity\Node;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;
use Drupal\file\Entity\File;
use Drupal\ngt_general\Plugin\Block\CourseMainBlock;
use Drupal\user\Entity\User;
use Drupal\Core\Entity\Query\QueryInterface;
use Drupal\media\Entity\Media;
use Drupal\Core\Url;
use Drupal\image\Entity\ImageStyle;
use Drupal\Core\Datetime\DateFormatter;
use Drupal\Core\Datetime\DrupalDateTime;

/**
 * Manage config a 'CourseMainBlockClass' block
 */
class CourseMainBlockClass {
    protected $instance;
    protected $configuration;

    /**
     * @param \Drupal\ngt_general\Plugin\Block\CourseMainBlock $instance
     * @param $config
     */
    public function setConfig(CourseMainBlock &$instance, &$config){
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
     * @param \Drupal\ngt_general\Plugin\Block\CourseMainBlock $instance
     * @param $config
     */
    public function build(CourseMainBlock &$instance, $configuration){
        $config = \Drupal::config('ngt_general.adminSettingsGeneral');  
        
        $build = [
            '#theme' => 'course_main',
            '#course' => $this->getLastcouseMain(),
            '#txt_curso' => $config->get('txt_curso'),
        ];

        return $build;
    }
    
    /**
     * getLastcouseMain
     *
     * @return array
     */
    public function getLastcouseMain(){
        $nid = \Drupal::entityQuery('node')
                ->condition('type','curso')
                ->condition('status', 1)
                ->condition('field_destacado',TRUE)
                ->sort('created' , 'DESC')
                ->range(0, 1)
                ->execute();
        $node = \Drupal\node\Entity\Node::loadMultiple($nid);
        $course = $this->structureCourse($node);
        return $course;
    }

    
    /**
     * FunctionName
     *
     * @param  array $node
     * @return array
     */
    public function structureCourse($nodes) {
        $courses = [];
        foreach ($nodes as $node) {
            $date = new DrupalDateTime($node->get('field_fecha_de_inicio')->getValue()[0]['value']);
            $formatted_date = \Drupal::service('date.formatter')->format($date->getTimestamp(), 'custom', 'M d, Y');
            $course = [
                'nid' => $node->get('nid')->getValue()[0]['value'],
                'title' => $node->get('title')->getValue()[0]['value'],
                'body' => $node->get('body')->getValue()[0]['value'],
                'autor' => \Drupal::service('ngt_general.methodGeneral')->load_author($node->get('field_autor_principal')->getValue()),
                'cnt_alumnos' => $node->get('field_cantidad_de_alumnos')->getValue()[0]['value'],
                'categoria' => $node->get('field_categoria')->getValue()[0]['target_id'],
                'expertos' => \Drupal::service('ngt_general.methodGeneral')->load_author($node->get('field_coordinadores')->getValue(), 2),
                'fecha_inicio' => $formatted_date,
                'foto_portada' => [
                    'uri' => \Drupal::service('ngt_general.methodGeneral')->load_image($node->get('field_foto_portada')->getValue()[0]['target_id']),
                    'uri_313x156' => \Drupal::service('ngt_general.methodGeneral')->load_image($node->get('field_foto_portada')->getValue()[0]['target_id'],'313x156'),
                    'uri_604x476' => \Drupal::service('ngt_general.methodGeneral')->load_image($node->get('field_foto_portada')->getValue()[0]['target_id'],'604x476'),
                    'uri_374x226' => \Drupal::service('ngt_general.methodGeneral')->load_image($node->get('field_foto_portada')->getValue()[0]['target_id'],'374x226'),
                    'target_id' => $node->get('field_foto_portada')->getValue()[0]['target_id'],
                    'alt' => isset($node->get('field_foto_portada')->getValue()[0]['value']) ? $node->get('field_foto_portada')->getValue()[0]['alt'] : '',
                    'title' => isset($node->get('field_foto_portada')->getValue()[0]['value']) ? $node->get('field_foto_portada')->getValue()[0]['title'] : '',
                    'width' => $node->get('field_foto_portada')->getValue()[0]['width'],
                    'height' => $node->get('field_foto_portada')->getValue()[0]['height'],
                ],
                'horas' =>$node->get('field_horas')->getValue()[0]['value'],
                'rating' => isset($node->get('field_calificacion')->getValue()[0]['rating']) ? $node->get('field_calificacion')->getValue()[0]['rating'] :'',
                'url' => \Drupal::service('path.alias_manager')->getAliasByPath('/node/'. $node->get('nid')->getValue()[0]['value']),
            ];
            array_push($courses,$course);
        }
        
        return $courses;
    }
    
}