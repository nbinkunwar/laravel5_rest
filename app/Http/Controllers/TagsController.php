<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Tag;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Nbin\Transformers\TagTransformer;

/**
 * Class TagsController
 * @package App\Http\Controllers
 */
class TagsController extends ApiController
{

    /**
     * @var TagTransformer
     */
    protected $tagTransformer;

    /**
     * @param TagTransformer $tagTransformer
     */
    function __construct(TagTransformer $tagTransformer)
    {
        $this->tagTransformer = $tagTransformer;
    }

    /**
     * Display a listing of the resource.
     *
     * @param null $lessonId
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function index($lessonId = null)
    {
        $tags = $this->getTags($lessonId);
        return $this->respond([
            'data' => $this->tagTransformer->transformCollection($tags->toArray())
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }


    /**
     * @param $lessonId
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getTags($lessonId)
    {
        $tags = $lessonId ? Lesson::find($lessonId)->tags : Tag::all();
        return $tags;
    }
}
