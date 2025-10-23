<?php

declare(strict_types=1);

namespace RZ\Roadiz\Contracts\NodeType;

interface NodeTypeClassLocatorInterface
{
    /**
     * Get node-source entity class name without its namespace.
     *
     * @param NodeTypeInterface $nodeType
     * @return string
     */
    public function getSourceEntityClassName(NodeTypeInterface $nodeType): string;

    /**
     * Get repository class name without its namespace.
     *
     * @param NodeTypeInterface $nodeType
     * @return string
     */
    public static function getRepositoryClassName(NodeTypeInterface $nodeType): string;

    /**
     * Get fully qualified node-source entity class name.
     *
     * @param NodeTypeInterface $nodeType
     * @return class-string
     */
    public function getSourceEntityFullQualifiedClassName(NodeTypeInterface $nodeType): string;

    /**
     * Get fully qualified repository class name.
     *
     * @param NodeTypeInterface $nodeType
     * @return class-string
     */
    public function getRepositoryFullQualifiedClassName(NodeTypeInterface $nodeType): string;

    /**
     * Get class namespace.
     *
     * @return string
     */
    public function getClassNamespace(): string;

    /**
     * Get repository namespace.
     *
     * @return string
     */
    public function getRepositoryNamespace(): string;
}
