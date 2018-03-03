<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Authentication\Hybrid\Resource\Record;

/**
 * Interface ProviderInterface
 * @package MSBios\Authentication\Hybrid\Resource\Record
 */
interface ProviderInterface
{
    /**
     * @return string
     */
    public function getIdentifier();

    /**
     * @param string $identifier
     */
    public function setIdentifier($identifier);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param $name
     * @return $this
     */
    public function setName($name);
}
