<?php

namespace Drupal\DT35\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * {@inheritDoc}
 */
class DT35ConfigForm extends ConfigFormBase {

  /**
   * {@inheritDoc}
   */
  public function getEditableConfigNames() {
    return ['dt35.settings'];
  }

  /**
   * {@inheritDoc}
   */
  public function getFormId() {
    return 'dt35_config_form';
  }

  /**
   * {@inheritDoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildForm($form, $form_state);
    $config = $this->config('dt35.settings');

    $form['morning_msg'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Morning message'),
      '#title_display' => 'before',
      '#default_value' => $config->get('morning_msg'),
    ];

    $form['noon_msg'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Afternoon message'),
      '#title_display' => 'before',
      '#default_value' => $config->get('noon_msg'),
    ];

    $form['evening_msg'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Evening message'),
      '#title_display' => 'before',
      '#default_value' => $config->get('evening_msg'),
    ];

    $form['night_msg'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Night message'),
      '#title_display' => 'before',
      '#default_value' => $config->get('night_msg'),
    ];

    return $form;
  }

  /**
   * {@inheritDoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $config = $this->config('dt35.settings');
    $values = $form_state->getValues();
    foreach ($values as $key => $value) {
      $config->set($key, $value);
    }
    $config->save();
    $this->messenger()->addMessage('Configuration Saved');
  }

}
