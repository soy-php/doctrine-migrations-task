<?php

namespace Soy\DoctrineMigrations;

trait ConfigTrait
{
    /**
     * @var Config
     */
    protected $config;

    /**
     * @return string
     */
    public function getBinary()
    {
        return $this->config->getBinary();
    }

    /**
     * @param string $binary
     * @return $this
     */
    public function setBinary($binary)
    {
        $this->config->setBinary($binary);
        return $this;
    }

    /**
     * @return bool
     */
    public function isInteractionEnabled()
    {
        return $this->config->isInteractionEnabled();
    }

    /**
     * @return $this
     */
    public function enableInteraction()
    {
        $this->config->enableInteraction();
        return $this;
    }

    /**
     * @return $this
     */
    public function disableInteraction()
    {
        $this->config->disableInteraction();
        return $this;
    }

    /**
     * @return string
     */
    public function getConfiguration()
    {
        return $this->config->getConfiguration();
    }

    /**
     * @param string $configuration
     * @return $this
     */
    public function setConfiguration($configuration)
    {
        $this->config->setConfiguration($configuration);
        return $this;
    }

    /**
     * @return string
     */
    public function getDbConfiguration()
    {
        return $this->config->getDbConfiguration();
    }

    /**
     * @param string $dbConfiguration
     * @return $this
     */
    public function setDbConfiguration($dbConfiguration)
    {
        $this->config->setDbConfiguration($dbConfiguration);
        return $this;
    }

    /**
     * @return string
     */
    public function getCommandNamespace()
    {
        return $this->config->getCommandNamespace();
    }

    /**
     * @param string $commandNamespace
     * @return $this
     */
    public function setCommandNamespace($commandNamespace)
    {
        $this->config->setCommandNamespace($commandNamespace);
        return $this;
    }
}
