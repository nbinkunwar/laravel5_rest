<?php
/**
 * Created by IntelliJ IDEA.
 * User: nbin
 * Date: 6/29/15
 * Time: 11:36 AM
 */

namespace Nbin\Transformers;


class TagTransformer extends Transformer{

    /**
     * @param $lesson
     * @return array
     */
    public function transform($tag)
    {
        return [
            'name' => $tag['name'],

        ];
    }

}