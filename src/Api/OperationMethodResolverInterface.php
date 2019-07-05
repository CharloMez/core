<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Core\Api;

use ApiPlatform\Core\Exception\RuntimeException;

/**
 * Resolves the uppercased HTTP method associated with an operation.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
interface OperationMethodResolverInterface
{
    /**
     * Resolves the uppercased HTTP method associated with a collection operation.
     *
     * @param string $resourceClass
     * @param string $operationName
     *
     * @return string
     *
     * @throws RuntimeException
     */
    public function getCollectionOperationMethod(string $resourceClass, string $operationName): string;

    /**
     * Resolves the uppercased HTTP method associated with an item operation.
     *
     * @param string $resourceClass
     * @param string $operationName
     *
     * @return string
     *
     * @throws RuntimeException
     */
    public function getItemOperationMethod(string $resourceClass, string $operationName): string;
}
