<?php

namespace NerdsAndCompany\Schematic\DataTypes;

use Craft;
use NerdsAndCompany\Schematic\Schematic;
use NerdsAndCompany\Schematic\Interfaces\DataTypeInterface;

/**
 * Schematic Sites DataType.
 *
 * Sync Craft Setups.
 *
 * @author    Nerds & Company
 * @copyright Copyright (c) 2015-2018, Nerds & Company
 * @license   MIT
 *
 * @see      http://www.nerds.company
 */
class SiteDataType implements DataTypeInterface
{
    /**
     * Get mapper component handle.
     *
     * @return string
     */
    public function getMapperHandle(): string
    {
        return 'modelMapper';
    }

    /**
     * Get data of this type.
     *
     * @return array
     */
    public function getRecords(): array
    {
        return Craft::$app->sites->getAllSites();
    }
}
