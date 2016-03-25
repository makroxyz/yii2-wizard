<?php

namespace makroxyz\wizard;

use yii\base\Event;

/**
 * Wizard event class.
 * This is the event raised by the wizard.
 */
class WizardEvent extends Event
{
    public $step;
    public $saved;

    public function __construct($step = null, $saved = null, $config = [])
    {
        $this->step = $step;
        $this->saved = $saved;
        parent::__construct($config);
    }
}