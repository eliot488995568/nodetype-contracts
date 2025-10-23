<?php

declare(strict_types=1);

namespace RZ\Roadiz\Contracts\NodeType;

interface TypeableFieldInterface
{
    /**
     * @return string|int Type identifier for Roadiz to Doctrine mapping
     */
    public function getType();

    public function getTypeName(): string;

    public function getDoctrineType(): string;

    public function isString(): bool;

    public function isText(): bool;

    public function isDate(): bool;

    public function isDateTime(): bool;

    public function isRichText(): bool;

    public function isMarkdown(): bool;

    public function isBool(): bool;

    public function isInteger(): bool;

    public function isDecimal(): bool;

    public function isEmail(): bool;

    public function isDocuments(): bool;

    public function isPassword(): bool;

    public function isColor(): bool;

    public function isGeoTag(): bool;

    public function isNodes(): bool;

    public function isUser(): bool;

    public function isEnum(): bool;

    public function isChildrenNodes(): bool;

    public function isCustomForms(): bool;

    public function isMultiple(): bool;

    public function isMultiGeoTag(): bool;

    public function isJson(): bool;

    public function isYaml(): bool;

    public function isCss(): bool;

    public function isManyToMany(): bool;

    public function isManyToOne(): bool;

    public function isCountry(): bool;

    public function isSingleProvider(): bool;

    public function isMultiProvider(): bool;

    public function isCollection(): bool;
}
