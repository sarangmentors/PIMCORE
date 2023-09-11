<?php

namespace Symfony\Config\Pimcore\ConfigLocation;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SystemSettings'.\DIRECTORY_SEPARATOR.'WriteTargetConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SystemSettings'.\DIRECTORY_SEPARATOR.'ReadTargetConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SystemSettingsConfig 
{
    private $writeTarget;
    private $readTarget;
    private $_usedProperties = [];

    /**
     * @default {"type":"symfony-config","options":{"directory":"\/Users\/saranggangapurkar\/Documents\/projects\/my-project\/var\/config\/system_settings"}}
    */
    public function writeTarget(array $value = []): \Symfony\Config\Pimcore\ConfigLocation\SystemSettings\WriteTargetConfig
    {
        if (null === $this->writeTarget) {
            $this->_usedProperties['writeTarget'] = true;
            $this->writeTarget = new \Symfony\Config\Pimcore\ConfigLocation\SystemSettings\WriteTargetConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "writeTarget()" has already been initialized. You cannot pass values the second time you call writeTarget().');
        }

        return $this->writeTarget;
    }

    /**
     * @default {"type":null,"options":{"directory":null}}
    */
    public function readTarget(array $value = []): \Symfony\Config\Pimcore\ConfigLocation\SystemSettings\ReadTargetConfig
    {
        if (null === $this->readTarget) {
            $this->_usedProperties['readTarget'] = true;
            $this->readTarget = new \Symfony\Config\Pimcore\ConfigLocation\SystemSettings\ReadTargetConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "readTarget()" has already been initialized. You cannot pass values the second time you call readTarget().');
        }

        return $this->readTarget;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('write_target', $value)) {
            $this->_usedProperties['writeTarget'] = true;
            $this->writeTarget = new \Symfony\Config\Pimcore\ConfigLocation\SystemSettings\WriteTargetConfig($value['write_target']);
            unset($value['write_target']);
        }

        if (array_key_exists('read_target', $value)) {
            $this->_usedProperties['readTarget'] = true;
            $this->readTarget = new \Symfony\Config\Pimcore\ConfigLocation\SystemSettings\ReadTargetConfig($value['read_target']);
            unset($value['read_target']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['writeTarget'])) {
            $output['write_target'] = $this->writeTarget->toArray();
        }
        if (isset($this->_usedProperties['readTarget'])) {
            $output['read_target'] = $this->readTarget->toArray();
        }

        return $output;
    }

}
