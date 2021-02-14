<?php 

namespace Drupal\ngt_inscription\Plugin\rest\resource;

use Drupal\rest\Plugin\ResourceBase;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\rest\ResourceResponse;
use Drupal\Core\Session\AccountProxyInterface;

/**
 * Provides a resource to get view modes by entity and bundle.
 *
 * @RestResource(
 *   id = "inscription_course_rest_resource",
 *   label = @Translation("Inscription to course"),
 *   uri_paths = {
 *     "canonical" = "/ngt/api/v1/inscription/reserve",
 *     "https://www.drupal.org/link-relations/create" = "/ngt/api/v1/inscription/reserve"
 *   }
 * )
 */
class InscriptionRestResource extends ResourceBase { 


    /**
     * A current user instance..
     *
     * @var \Drupal\Core\Session\AccountProxyInterface
     */
    protected $currentUser;

    /**
     * Constructs a Drupal\rest\Plugin\ResourceBase object.
     *
     * @param array $configuration
     *   A configuration array containing information about the plugin instance.
     * @param string $plugin_id
     *   The plugin_id for the plugin instance.
     * @param mixed $plugin_definition
     *   The plugin implementation definition.
     * @param array $serializer_formats
     *   The available serialization formats.
     * @param \Psr\Log\LoggerInterface $logger
     *   A logger instance.
     * @param \Drupal\Core\Session\AccountProxyInterface $current_user
     *   A current user instance.
     */
    public function __construct(
        array $configuration,
        $plugin_id,
        $plugin_definition,
        array $serializer_formats,
        LoggerInterface $logger,
        AccountProxyInterface $current_user) {
        parent::__construct($configuration, $plugin_id, $plugin_definition, $serializer_formats, $logger);
        $this->currentUser = $current_user;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
        return new static(
            $configuration,
            $plugin_id,
            $plugin_definition,
            $container->getParameter('serializer.formats'),
            $container->get('logger.factory')->get('ngt_inscription'),
            $container->get('current_user')
        );
    }

    /**
     * Responds to POST requests.
     * 
     * Calls post method 
     *
     * @param array $params 
     *  
     *
     * @return \Drupal\rest\ResourceResponse
     *   return response datafor logic class.
     */
    public function post(array $params) {
        return \Drupal::service('ngt_inscription.inscription_rest')->post($this->currentUser, $params);
    }

    /**
     * Responds to DELETE requests.
     * 
     * Calls delete method 
     *
     * @param array $params 
     *  
     *
     * @return \Drupal\rest\ResourceResponse
     *   return response datafor logic class.
     */
    public function delete(array $params) {
        return \Drupal::service('ngt_inscription.inscription_rest')->delete($this->currentUser, $params);
    }


} 