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

    public function getAllData()
    {
       return  $this->postsRepository->all();
    }

    public function getDataById($id)
    {
        return  $this->postsRepository->find($id);
    }

    public function insertData($data)
    {
        return  $this->postsRepository->create($data->all());
    }

    public function updateDataById($id,$data)
    {
        return  $this->postsRepository->update($id,$data);
    }

    public function deleteDataById($id)
    {
        return  $this->postsRepository->delete($id);
    }

}
