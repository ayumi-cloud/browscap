<?php
declare(strict_types = 1);
namespace Browscap\Filter;

use Browscap\Data\Division;
use Browscap\Data\PropertyHolder;
use Browscap\Writer\WriterInterface;

/**
 * Class FullFilter
 *
 * @author     Thomas Müller <mimmi20@live.de>
 */
class CustomFilter implements FilterInterface
{
    /**
     * @var array
     */
    private $fields = [];

    /**
     * @var \Browscap\Data\PropertyHolder
     */
    private $propertyHolder;

    /**
     * @param \Browscap\Data\PropertyHolder $propertyHolder
     * @param array                         $fields
     */
    public function __construct(PropertyHolder $propertyHolder, array $fields)
    {
        $this->fields         = $fields;
        $this->propertyHolder = $propertyHolder;
    }

    /**
     * returns the Type of the filter
     *
     * @return string
     */
    public function getType() : string
    {
        return FilterInterface::TYPE_CUSTOM;
    }

    /**
     * checks if a division should be in the output
     *
     * @param \Browscap\Data\Division $division
     *
     * @return bool
     */
    public function isOutput(Division $division) : bool
    {
        return true;
    }

    /**
     * checks if a section should be in the output
     *
     * @param bool[] $section
     *
     * @return bool
     */
    public function isOutputSection(array $section) : bool
    {
        return true;
    }

    /**
     * checks if a property should be in the output
     *
     * @param string                                $property
     * @param \Browscap\Writer\WriterInterface|null $writer
     *
     * @return bool
     */
    public function isOutputProperty(string $property, ?WriterInterface $writer = null) : bool
    {
        if (!$this->propertyHolder->isOutputProperty($property, $writer)) {
            return false;
        }

        return in_array($property, $this->fields);
    }
}
