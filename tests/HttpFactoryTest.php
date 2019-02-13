<?php

declare(strict_types=1);

namespace Thruster\HttpFactory\Tests;

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ServerRequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UploadedFileFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;
use Thruster\HttpFactory\ZendDiactorosHttpFactory;

/**
 * Class ZendDiactorosHttpFactoryTest.
 *
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class HttpFactoryTest extends TestCase
{
    public function factoryProvider(): array
    {
        return [
            [new ZendDiactorosHttpFactory()],
        ];
    }

    /**
     * @param $httpFactory
     * @dataProvider factoryProvider
     */
    public function testUri($httpFactory): void
    {
        $this->assertInstanceOf(UriFactoryInterface::class, $httpFactory->uri());
    }

    /**
     * @param $httpFactory
     * @dataProvider factoryProvider
     */
    public function testUploadedFile($httpFactory): void
    {
        $this->assertInstanceOf(UploadedFileFactoryInterface::class, $httpFactory->uploadedFile());
    }

    /**
     * @param $httpFactory
     * @dataProvider factoryProvider
     */
    public function testServerRequest($httpFactory): void
    {
        $this->assertInstanceOf(ServerRequestFactoryInterface::class, $httpFactory->serverRequest());
    }

    /**
     * @param $httpFactory
     * @dataProvider factoryProvider
     */
    public function testStream($httpFactory): void
    {
        $this->assertInstanceOf(StreamFactoryInterface::class, $httpFactory->stream());
    }

    /**
     * @param $httpFactory
     * @dataProvider factoryProvider
     */
    public function testRequest($httpFactory): void
    {
        $this->assertInstanceOf(RequestFactoryInterface::class, $httpFactory->request());
    }

    /**
     * @param $httpFactory
     * @dataProvider factoryProvider
     */
    public function testResponse($httpFactory): void
    {
        $this->assertInstanceOf(ResponseFactoryInterface::class, $httpFactory->response());
    }
}
