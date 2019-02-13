<?php

declare(strict_types=1);

namespace Thruster\HttpFactory;

/**
 * Interface HttpFactoryProviderInterface.
 *
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
interface HttpFactoryProviderInterface
{
    public function getHttpFactory(): HttpFactoryInterface;
}
