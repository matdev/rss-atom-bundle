<?php

namespace Debril\RssBundle\Protocol;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-01-26 at 23:48:58.
 */
class ItemTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Item
     */
    protected $object;

    const title = "Hello World";

    const id = 1;

    const link = 'http://example.com/rss';

    const summary = 'Lorem Ipsum...';

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Item;

        $this->object->setTitle(self::title);
        $this->object->setId(self::id);
        $this->object->setLink(self::link);
        $this->object->setSummary(self::summary);
        $this->object->setUpdated(new \DateTime);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    /**
     * @covers Debril\RssBundle\Protocol\Item::getTitle
     * @todo   Implement testGetTitle().
     */
    public function testGetTitle()
    {
        $this->assertEquals(self::title, $this->object->getTitle());
    }

    /**
     * @covers Debril\RssBundle\Protocol\Item::setTitle
     * @todo   Implement testSetTitle().
     */
    public function testSetTitle()
    {
        $newTitle = "A brand new title";

        $this->object->setTitle($newTitle);
        $this->assertEquals($newTitle, $this->object->getTitle());
    }

    /**
     * @covers Debril\RssBundle\Protocol\Item::getId
     * @todo   Implement testGetId().
     */
    public function testGetId()
    {
        $this->assertEquals(self::id, $this->object->getId());
    }

    /**
     * @covers Debril\RssBundle\Protocol\Item::setId
     * @todo   Implement testSetId().
     */
    public function testSetId()
    {
        $newId = 2;
        $this->object->setId($newId);

        $this->assertEquals($newId, $this->object->getId());
    }

    /**
     * @covers Debril\RssBundle\Protocol\Item::getSummary
     * @todo   Implement testGetSummary().
     */
    public function testGetSummary()
    {
        $this->assertEquals(self::summary, $this->object->getSummary());
    }

    /**
     * @covers Debril\RssBundle\Protocol\Item::setSummary
     * @todo   Implement testSetSummary().
     */
    public function testSetSummary()
    {
        $newSummary = 'a brand new summary';

        $this->object->setSummary($newSummary);
        $this->assertEquals($newSummary, $this->object->getSummary());
    }

    /**
     * @covers Debril\RssBundle\Protocol\Item::getUpdated
     * @todo   Implement testGetUpdated().
     */
    public function testGetUpdated()
    {
        $this->assertInstanceOf("\DateTime", $this->object->getUpdated());
    }

    /**
     * @covers Debril\RssBundle\Protocol\Item::setUpdated
     * @todo   Implement testSetUpdated().
     */
    public function testSetUpdated()
    {
        $date = \DateTime::createFromFormat('j-M-Y', '15-Feb-2013');

        $this->object->setUpdated($date);

        $this->assertEquals($date, $this->object->getUpdated());
    }

    /**
     * @covers Debril\RssBundle\Protocol\Item::getLink
     * @todo   Implement testGetLink().
     */
    public function testGetLink()
    {
        $this->assertEquals(self::link, $this->object->getLink());
    }

    /**
     * @covers Debril\RssBundle\Protocol\Item::setLink
     * @todo   Implement testSetLink().
     */
    public function testSetLink()
    {
        $newLink = 'http://example.com/atom';

        $this->object->setLink($newLink);

        $this->assertEquals($newLink, $this->object->getLink());
    }

}