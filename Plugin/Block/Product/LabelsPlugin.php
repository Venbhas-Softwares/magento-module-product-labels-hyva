<?php
declare(strict_types=1);

namespace Venbhas\ProductLabelsHyva\Plugin\Block\Product;

use Venbhas\ProductLabels\Block\Product\Labels;

class LabelsPlugin
{
    /**
     * Use the Hyvä template for label rendering.
     */
    public function beforeToHtml(Labels $subject): void
    {
        $subject->setTemplate('Venbhas_ProductLabelsHyva::product/labels.phtml');
    }
}
