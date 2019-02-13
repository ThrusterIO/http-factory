<?php

declare(strict_types=1);

namespace Thruster\HttpFactory;

use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ServerRequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UploadedFileFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;

/**
 * Class HttpFactoryInterface.
 *
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
interface HttpFactoryInterface
{
    public function request(): RequestFactoryInterface;

    public function response(): ResponseFactoryInterface;

    public function serverRequest(): ServerRequestFactoryInterface;

    public function stream(): StreamFactoryInterface;

    public function uploadedFile(): UploadedFileFactoryInterface;

    public function uri(): UriFactoryInterface;
}
