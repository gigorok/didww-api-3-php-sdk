<?php

namespace Didww\Item\OrderItem;

class Did extends Base
{
    protected function getCreatableAttributesKeys()
    {
        return ['sku_id', 'qty'];
    }

    protected function getType()
    {
        return 'did_order_items';
    }
}
