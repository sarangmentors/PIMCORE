<?php

namespace Symfony\Config\Pimcore\Documents;

require_once __DIR__.\DIRECTORY_SEPARATOR.'TypeDefinitions'.\DIRECTORY_SEPARATOR.'MapConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TypeDefinitionsConfig 
{
    private $map;
    private $_usedProperties = [];

    public function map(array $value = []): \Symfony\Config\Pimcore\Documents\TypeDefinitions\MapConfig
    {
        $this->_usedProperties['map'] = true;

        return $this->map[] = new \Symfony\Config\Pimcore\Documents\TypeDefinitions\MapConfig($value);
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('map', $value)) {
            $this->_usedProperties['map'] = true;
            $this->map = array_map(function ($v) { return new \Symfony\Config\Pimcore\Documents\TypeDefinitions\MapConfig($v); }, $value['map']);
            unset($value['map']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['map'])) {
            $output['map'] = array_map(function ($v) { return $v->toArray(); }, $this->map);
        }

        return $output;
    }

}
