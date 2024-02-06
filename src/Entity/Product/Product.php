<?php

declare(strict_types=1);

namespace App\Entity\Product;

use App\Entity\ProductColor;
use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Product as BaseProduct;
use Sylius\Component\Product\Model\ProductTranslationInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_product")
 */
#[ORM\Entity]
#[ORM\Table(name: 'sylius_product')]
class Product extends BaseProduct
{
    #[ORM\Column(length: 255)]
    private ?string $color = null;

    public function __construct()
    {
        parent::__construct();
    }

    protected function createTranslation(): ProductTranslationInterface
    {
        return new ProductTranslation();
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): static
    {
        $this->color = $color;

        return $this;
    }
}
