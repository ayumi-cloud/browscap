<?php
declare(strict_types = 1);
namespace BrowscapTest\Writer\Factory;

use Browscap\Formatter\FormatterInterface;
use Browscap\Writer\Factory\CustomWriterFactory;
use Browscap\Writer\WriterCollection;
use Monolog\Logger;
use org\bovigo\vfs\vfsStream;

/**
 * Class CustomWriterFactoryTestTest
 *
 * @author     Thomas Müller <mimmi20@live.de>
 */
class CustomWriterFactoryTest extends \PHPUnit\Framework\TestCase
{
    private const STORAGE_DIR = 'storage';

    /**
     * @var \Browscap\Writer\Factory\CustomWriterFactory
     */
    private $object;

    /**
     * Sets up the fixture, for example, open a network connection.
     * This method is called before a test is executed.
     */
    public function setUp() : void
    {
        vfsStream::setup(self::STORAGE_DIR);

        $this->object = new CustomWriterFactory();
    }

    /**
     * tests creating a writer collection
     *
     * @group writer
     * @group sourcetest
     */
    public function testCreateCollectionWithDefaultParams() : void
    {
        $logger = $this->createMock(Logger::class);
        $dir    = vfsStream::url(self::STORAGE_DIR);

        self::assertInstanceOf(WriterCollection::class, $this->object->createCollection($logger, $dir));
    }

    /**
     * tests creating a writer collection
     *
     * @group writer
     * @group sourcetest
     */
    public function testCreateCollectionForCsvFile() : void
    {
        $logger = $this->createMock(Logger::class);
        $dir    = vfsStream::url(self::STORAGE_DIR);

        self::assertInstanceOf(WriterCollection::class, $this->object->createCollection($logger, $dir, null, [], FormatterInterface::TYPE_CSV));
    }

    /**
     * tests creating a writer collection
     *
     * @group writer
     * @group sourcetest
     */
    public function testCreateCollectionForAspFile() : void
    {
        $logger = $this->createMock(Logger::class);
        $dir    = vfsStream::url(self::STORAGE_DIR);

        self::assertInstanceOf(WriterCollection::class, $this->object->createCollection($logger, $dir, null, [], FormatterInterface::TYPE_ASP));
    }

    /**
     * tests creating a writer collection
     *
     * @group writer
     * @group sourcetest
     */
    public function testCreateCollectionForXmlFile() : void
    {
        $logger = $this->createMock(Logger::class);
        $dir    = vfsStream::url(self::STORAGE_DIR);

        self::assertInstanceOf(WriterCollection::class, $this->object->createCollection($logger, $dir, null, [], FormatterInterface::TYPE_XML));
    }

    /**
     * tests creating a writer collection
     *
     * @group writer
     * @group sourcetest
     */
    public function testCreateCollectionForJsonFile() : void
    {
        $logger = $this->createMock(Logger::class);
        $dir    = vfsStream::url(self::STORAGE_DIR);

        self::assertInstanceOf(WriterCollection::class, $this->object->createCollection($logger, $dir, null, [], FormatterInterface::TYPE_JSON));
    }

    /**
     * tests creating a writer collection
     *
     * @group writer
     * @group sourcetest
     */
    public function testCreateCollectionForPhpFile() : void
    {
        $logger = $this->createMock(Logger::class);
        $dir    = vfsStream::url(self::STORAGE_DIR);

        self::assertInstanceOf(WriterCollection::class, $this->object->createCollection($logger, $dir, null, [], FormatterInterface::TYPE_PHP));
    }
}
