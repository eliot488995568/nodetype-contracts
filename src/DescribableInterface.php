<?php

declare(strict_types=1);

namespace RZ\Roadiz\Contracts\NodeType;

interface DescribableInterface
{
    public function getDescription(): ?string;

    /**
     * @return string Human interface label
     */
    public function getLabel(): string;

    public function getName(): string;

    public function isVisible(): bool;
}
