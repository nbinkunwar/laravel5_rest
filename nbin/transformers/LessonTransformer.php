<?php
/**
 * Created by IntelliJ IDEA.
 * User: nbin
 * Date: 6/29/15
 * Time: 11:36 AM
 */

namespace Nbin\Transformers;


class LessonTransformer extends Transformer{

    /**
     * @param $lesson
     * @return array
     */
    public function transform($lesson)
    {
        return [
            'title' => $lesson['title'],
            'body' => $lesson['body'],
            'active' => (boolean) $lesson['some_bool']
        ];
    }

}