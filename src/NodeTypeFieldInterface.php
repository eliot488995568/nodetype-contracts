<?php

declare(strict_types=1);

namespace RZ\Roadiz\Contracts\NodeType;

interface NodeTypeFieldInterface extends TypeableFieldInterface, DescribableInterface, SearchableInterface
{
    public function getPlaceholder(): ?string;

    public function getDefaultValues(): ?string;

    public function getDefaultValuesAsArray(): array;

    /**
     * @return string Camel case field name
     */
    public function getVarName(): string;

    /**
     * @return string Camel case getter method name
     */
    public function getGetterName(): string;

    /**
     * @return string Camel case setter method name
     */
    public function getSetterName(): string;

    public function getGroupName(): ?string;

    public function getGroupNameCanonical(): ?string;

    public function isExpanded(): bool;

    public function getNodeTypeName(): string;

    public function getMinLength(): ?int;

    public function getMaxLength(): ?int;

    public function isIndexed(): bool;

    /**
     * Is node type field virtual, it's just an association, no doctrine field created.
     */
    public function isVirtual(): bool;

    /**
     * Tells if current field should sync its values between translations.
     */
    public function isUniversal(): bool;

    /**
     * Tells if current field should be required or not.
     */
    public function isRequired(): bool;
}
