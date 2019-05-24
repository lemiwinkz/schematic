<?php


namespace NerdsAndCompany\Schematic;


use craft\test\Craft;
use craft\test\TestSetup;
use NerdsAndCompany\Schematic\Mappers\ModelMapper;
use Yii;
use craft\console\Application;
use yii\console\Controller;
use craft\i18n\I18n;
use craft\services\Assets;
use craft\services\AssetTransforms;
use craft\services\Categories;
use craft\services\Content;
use craft\services\Elements;
use craft\services\ElementIndexes;
use craft\services\Fields;
use craft\services\Globals;
use craft\services\Matrix;
use craft\services\Path;
use craft\services\Plugins;
use craft\services\Sections;
use craft\services\Sites;
use craft\services\SystemSettings;
use craft\services\Tags;
use craft\services\UserGroups;
use craft\services\UserPermissions;
use craft\services\Volumes;
use Codeception\Module;
use Codeception\TestCase;
use NerdsAndCompany\Schematic\Schematic;

class TestModule extends Craft
{
    /**
     * @param TestCase $test
     *
     * @throws \ReflectionException
     * @throws \yii\base\Exception
     * @throws \yii\base\InvalidConfigException
     */
    public function _before(TestCase $test)
    {
        parent::_before($test);

        \Craft::$app->controller = TestSetup::getMock($test, Controller::class);
        \Craft::$app->controller->module = Schematic::getInstance();

        Schematic::$force = false;
    }
}