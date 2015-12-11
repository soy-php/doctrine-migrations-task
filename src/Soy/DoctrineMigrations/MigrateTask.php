<?php

namespace Soy\DoctrineMigrations;

use League\CLImate\CLImate;
use Soy\Task\CliTask;

class MigrateTask extends CliTask
{
    use ConfigTrait;

    /**
     * @param CLImate $climate
     * @param Config $config
     */
    public function __construct(CLImate $climate, Config $config)
    {
        parent::__construct($climate);
        $this->config = $config;
    }

    /**
     * @return string
     */
    public function getCommand()
    {
        return $this->getBinary() . ' ' . $this->getCommandNamespace() . 'migrate '
            . $this->config->getDefaultArguments();
    }
}
