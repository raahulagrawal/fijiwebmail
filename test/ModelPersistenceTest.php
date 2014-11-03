<?php
/**
 * Test case for Fiji\App\Model persistence
 * @author gabe@fijiwebdesign.com\
 * @example Using PHPUnit in vendor/
 *          php ./vendor/phpunit/phpunit/phpunit.php --verbose test/ModelPersistenceTest.php
 *          Using PHPUnit installed globally
 *            phpunit --verbose test/ModelPersistenceTest.php
 */

// autoload phpunit, ZendFramework and FijiFramework classes
require_once __DIR__ . '/../lib/Autoload.php';

// mocks Factory, Service and Models
require_once __DIR__ . '/bootstrap/Mocks.php';

/**
 * Test the Model Persistence in storage
 * @group model
 */
class ModelPersistenceTest extends PHPUnit_Framework_TestCase
{

    /**
     * Clean up the storage
     */
    public function setUp()
    {
        $Service = new Service;
        $Service->clearStorage();
    }

    /**
     * Test Saving a Model
     * @dataProvider provider
     */
    public function testSave($className1, $className2)
    {
        $Model1 = Factory::createModel($className1);
        $Model2 = Factory::createModel($className2);

        $ModelMock2 = $Model1->ModelMock2; // for simplicity

        // Model1 needs data to save
        $Model1->public = 'test1';

        // set the public property
        $ModelMock2->public = 'test2';
        // save $Model1 to save the reference as well
        $Model1->save(); // should save our reference

        // test that it was saved
        $Model3 = Factory::createModel($className1)
            ->findById($Model1->id);
        $ModelMock3 = $Model3->ModelMock2; // trigger the lazy load of ref

        $this->assertEquals($Model1, $Model3);

        // assert same storage namespace
        $this->assertEquals($ModelMock2->getObjectName(), $Model2->getObjectName());

        // assert $Model2 is NOT the same data $ModelMock2 (control)
        $this->assertNotEquals($ModelMock2->public, $Model2->public);

        // find the same Model in storage
        $Model2->find(array('public' => 'test2'));

        // assert $Model2 is the same data as $ModelMock2
        $this->assertEquals($ModelMock2->public, $Model2->public);

        // find non-existent model in storage
        // @note we shouldn't use the same model instance for two different datasets in practice. 
        //  Though it should work.
        $Model2->find(array('public' => '__none__'));

        // assert $Model2 is NOT the same data as $ModelMock2
        $this->assertNotEquals($ModelMock2->public, $Model2->public);
    }

    /**
     * Test Updating a Model
     * @dataProvider provider
     */
    public function testUpdate($className1, $className2)
    {
        $Model1 = Factory::createModel($className1);
        $Model2 = Factory::createModel($className2);

        // Model1 needs data to save
        $Model1->public = 'test1';
        $Model1->save();

        // update model
        $Model1->public = 'updated';
        $Model1->save();

        // find same model in db
        $Model = Factory::createModel(get_class($Model1))
            ->findById($Model1->id);

        $this->assertEquals('updated', $Model1->public);

        $Model3 = Factory::createModel(get_class($Model1))
            ->findById($Model1->id)
            ->setData(array('public' => 'updated2')) // update the data
            ->save();

        $Model = Factory::createModel(get_class($Model1))
            ->findById($Model1->id);

        $this->assertEquals('updated2', $Model->public);

    }

    public function provider()
    {
        return array(
            array('ModelMock1', 'ModelMock2')
        );
    }
}
