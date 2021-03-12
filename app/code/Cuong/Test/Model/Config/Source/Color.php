<?php


namespace Cuong\Test\Model\Config\Source;


use Magento\Framework\Option\ArrayInterface;

class Color implements ArrayInterface
{
    public function toOptionArray()
    {
        return [
            [
                'value' => null,
                'label' => __('--Please Select--')
            ],
            [
                'value' => 'yellow',
                'label' => __('Yellow')
            ],
            [
                'value' => 'red',
                'label' => __('Red')
            ],
            [
                'value' => 'gold',
                'label' => __('Gold')
            ],
        ];
    }
}