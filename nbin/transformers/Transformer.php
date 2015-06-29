<?php
/**
 * Created by IntelliJ IDEA.
 * User: nbin
 * Date: 6/29/15
 * Time: 11:33 AM
 */

namespace Nbin\Transformers;


abstract class Transformer {

    /**
     * @param array $items
     * @return array
     */
    public function transformCollection(array $items)
    {
        return array_map([$this, 'transform'],$items);
    }

    public abstract function transform($item);

}