<?php

namespace Soy\DoctrineMigrations;

class Config
{
    /**
     * @var string
     */
    protected $binary = './vendor/bin/doctrine-migrations';

    /**
     * @var bool
     */
    protected $interactionEnabled = false;

    /**
     * @var string
     */
    protected $configuration;

    /**
     * @var string
     */
    protected $dbConfiguration;

    /**
     * @var string
     */
    protected $commandNamespace = 'migrations:';

    /**
     * @return string
     */
    public function getDefaultArguments()
    {
        return ($this->getConfiguration() !== null ? '--configuration=' . $this->getConfiguration() . ' ' : '')
            . ($this->getDbConfiguration() !== null ? '--db-configuration=' . $this->getDbConfiguration() . ' ' : '')
            . (!$this->isInteractionEnabled() ? '-n ' : '');
    }

    /**
     * @return string
     */
    public function getBinary()
    {
        return $this->binary;
    }

    /**
     * @param string $binary
     * @return $this
     */
    public function setBinary($binary)
    {
        $this->binary = $binary;
        return $this;
    }

    /**
     * @return bool
     */
    public function isInteractionEnabled()
    {
        return $this->interactionEnabled;
    }

    /**
     * @return $this
     */
    public function enableInteraction()
    {
        $this->interactionEnabled = true;
        return $this;
    }

    /**
     * @return $this
     */
    public function disableInteraction()
    {
        $this->interactionEnabled = false;
        return $this;
    }

    /**
     * @return string
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * @param string $configuration
     * @return $this
     */
    public function setConfiguration($configuration)
    {
        $this->configuration = $configuration;
        return $this;
    }

    /**
     * @return string
     */
    public function getDbConfiguration()
    {
        return $this->dbConfiguration;
    }

    /**
     * @param string $dbConfiguration
     * @return $this
     */
    public function setDbConfiguration($dbConfiguration)
    {
        $this->dbConfiguration = $dbConfiguration;
        return $this;
    }

    /**
     * @return string
     */
    public function getCommandNamespace()
    {
        return $this->commandNamespace;
    }

    /**
     * @param string $commandNamespace
     * @return $this
     */
    public function setCommandNamespace($commandNamespace)
    {
        $this->commandNamespace = $commandNamespace;
        return $this;
    }
}
