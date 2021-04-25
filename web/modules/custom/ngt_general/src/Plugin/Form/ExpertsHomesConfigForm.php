<?php 

namespace Drupal\ngt_general\Plugin\Config\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Config\ConfigFactoryInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ExpertsHomesConfigForm extends ConfigFormBase {
    /**  
     * {@inheritdoc}  
     */  
    protected function getEditableConfigNames() {  
        return [  
            'ngt_general.adminSettingsExpertsHomes',  
        ];  
    }  

    /**  
     * {@inheritdoc}  
     */  
    public function getFormId() {  
        return 'ngt_form_experts_homes';  
    } 

    /**  
     * {@inheritdoc}  
     */  
    public function buildForm(array $form, FormStateInterface $form_state) {  
        $config = $this->config('ngt_general.adminSettingsExpertsHomes');  
        
        $form['#tree'] = true;

        $form['expert'] = [  
            '#type' => 'details',
            '#title' => t('Configuración general bloque de expertos en Home'),   
            '#open' => false,  
        ]; 

        $form['expert']['ctn'] = [  
            '#type' => 'textfield',  
            '#title' => 'Cantidad de expertos a mostrar',  
            '#description' => t('Ingrese el número de expertos a mostrar'),  
            '#default_value' => $config->get('expert')['ctn'],    
            '#required' => true
        ]; 
        
        $form['expert']['txt_title'] = [  
            '#type' => 'textarea',  
            '#title' => 'Título del bloque',  
            '#description' => t('Texto a mostrar en home, arriba del listado de expertos'),  
            '#default_value' => $config->get('expert')['title'],    
            '#required' => true
        ]; 

        $form['expert']['txt_subtitle'] = [  
            '#type' => 'textarea',  
            '#title' => t('Subtitulo'),  
            '#description' => t('Texto a mostrar debajo del t´tiulo del bloque'),  
            '#default_value' => $config->get('expert')['txt_subtitle'],    
            '#required' => true
        ]; 

        $form['expert']['active_linkl'] = [  
            '#type' => 'checkbox',
            '#title' => t('Activar enlace de ver perfiles'),   
            '#default_value' => $config->get('expert')['active_linkl'],  
        ]; 

        $form['expert']['profiles_url'] = [
            '#type' => 'url',
            '#title' => t('URL a redireccionar'),
            '#description' => t('Escriba la URL utilizada en el enlace de ver perfiles'),
            '#default_value' => $config->get('expert')['profiles_url'],
        ];


        $form['user_list'] = [  
            '#type' => 'details',
            '#title' => t('Asignación de expertos en Home'),   
            '#open' => false,  
        ]; 


        // $ctn = $config->get('expert')['ctn'];
        // for ($i=0; $i < $ctn; $i++) { 
        //     $form['user_list']['expert'][$i] = [
        //         '#title' => ('Ingrese el nombre del experto(a) o correo #' . $i + 1),
        //         '#type' => 'entity_autocomplete',
        //         '#target_type' => 'user',
        //         '#required' => TRUE,
        //         '#selection_settings' => [
        //           'include_anonymous' => FALSE,
        //           'filter' => [
        //             'role' => ['experto_coordinador'],
        //           ],
        //         ],
        //     ];
        // }

        return parent::buildForm($form, $form_state);
    } 


    /**  
     * {@inheritdoc}  
     */  
    public function submitForm(array &$form, FormStateInterface $form_state) {  
        parent::submitForm($form, $form_state);
        $this->config('ngt_general.adminSettingsExpertsHomes')
        
            ->set('expert', $form_state->getValue('expert'))  
            ->set('user_list', $form_state->getValue('user_list'))  
            ->save();  
    }  
}