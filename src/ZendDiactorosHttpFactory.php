<?php

declare(strict_types=1);

namespace Thruster\HttpFactory;

use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ServerRequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UploadedFileFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;
use Zend\Diactoros\RequestFactory;
use Zend\Diactoros\ResponseFactory;
use Zend\Diactoros\ServerRequestFactory;
use Zend\Diactoros\StreamFactory;
use Zend\Diactoros\UploadedFileFactory;
use Zend\Diactoros\UriFactory;

/**
 * Class ZendDiactorosHttpFactory.
 *
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class ZendDiactorosHttpFactory implements HttpFactoryInterface
{
    /** @var RequestFactoryInterface */
    private $requestFactory;

    /** @var ResponseFactoryInterface */
    private $responseFactory;

    /** @var ServerRequestFactoryInterface */
    private $serverRequestFactory;

    /** @var StreamFactoryInterface */
    private $streamFactor;

    /** @var UploadedFileFactoryInterface */
    private $uploadedFileFactory;

    /** @var UriFactoryInterface */
    private $uriFactory;

    public function request(): RequestFactoryInterface
    {
        if (null !== $this->requestFactory) {
            return $this->requestFactory;
        }

        $this->requestFactory = new RequestFactory();

        return $this->requestFactory;
    }

    public function response(): ResponseFactoryInterface
    {
        if (null !== $this->responseFactory) {
            return $this->responseFactory;
        }

        $this->responseFactory = new ResponseFactory();

        return $this->responseFactory;
    }

    public function serverRequest(): ServerRequestFactoryInterface
    {
        if (null !== $this->serverRequestFactory) {
            return $this->serverRequestFactory;
        }

        $this->serverRequestFactory = new ServerRequestFactory();

        return $this->serverRequestFactory;
    }

    public function stream(): StreamFactoryInterface
    {
        if (null !== $this->streamFactor) {
            return $this->streamFactor;
        }

        $this->streamFactor = new StreamFactory();

        return $this->streamFactor;
    }

    public function uploadedFile(): UploadedFileFactoryInterface
    {
        if (null !== $this->uploadedFileFactory) {
            return $this->uploadedFileFactory;
        }

        $this->uploadedFileFactory = new UploadedFileFactory();

        return $this->uploadedFileFactory;
    }

    public function uri(): UriFactoryInterface
    {
        if (null !== $this->uriFactory) {
            return $this->uriFactory;
        }

        $this->uriFactory = new UriFactory();

        return $this->uriFactory;
    }
}
