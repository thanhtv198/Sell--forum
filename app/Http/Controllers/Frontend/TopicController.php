<?php

namespace App\Http\Controllers\Frontend;

use App\Contracts\Repositories\TopicRepository;
use App\Http\Controllers\Controller;
use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    protected $repository;

    public function __construct(TopicRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Get posts of topic by topic id
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getPostByTopicId($slug)
    {
        $posts = $this->repository->getPostById($slug);

        $topicSidebar = $slug;

        $topicName = $this->repository->getNameById($slug);
       
        return view('frontend.topic.index', compact('posts', 'topicName', 'topicSidebar'));
    }
}
