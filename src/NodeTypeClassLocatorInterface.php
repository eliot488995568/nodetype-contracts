<?php

declare(strict_types=1);

namespace RZ\Roadiz\Contracts\NodeType;

interface NodeTypeClassLocatorInterface
{
    /**
     * Get node-source entity class name without its namespace.
     *
     * @param NodeTypeInterface $nodeTypeInterface
     * @return string
     */
    public function getSourceEntityClassName(NodeTypeInterface $nodeTypeInterface): string;

    /**
     * Get repository class name without its namespace.
     *
     * @param NodeTypeInterface $nodeTypeInterface
     * @return string
     */
    public static function getRepositoryClassName(NodeTypeInterface $nodeTypeInterface): string;

    /**
     * Get fully qualified node-source entity class name.
     *
     * @return class-string
     */
    public function getSourceEntityFullQualifiedClassName(): string;

    /**
     * Get fully qualified repository class name.
     *
     * @return class-string
     */
    public static function getRepositoryFullQualifiedClassName(): string;

    /**
     * Get class namespace.
     *
     * @return string
     */
    public static function getClassNamespace(): string;
}
