<?php
namespace App\Http\Controllers\APi\Posts;

use App\Http\Controllers\Controller;
use App\Repository\Eloquent\PostsRepository;
use App\Repository\PostsRepositoryInterface;

class PostsController extends Controller {

    private  $postsRepository;

    public function __construct(PostsRepositoryInterface   $postsRepository)
    {
        $this->postsRepository = $postsRepository;
    }

    public function index()
    {
       return  $this->postsRepository->index();
    }

    public function show($id)
    {
        return  $this->postsRepository->find($id);
    }

    public function store($data)
    {
        $this->postsRepository->store($data->all());
        return response()->json(['message' => 'Insert successfully']);
    }

    public function update(String $id,$data)
    {
        dd($id);
        $this->postsRepository->update($id,$data->all());
        return response()->json(['message' => 'Update successfully']);
    }

    public function destroy($id)
    {
        $this->postsRepository->delete($id);
        return response()->json(['message' => 'Delete successfully']);
    }

}
