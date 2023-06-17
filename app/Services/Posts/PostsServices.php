<?php

namespace App\Services\Posts;

use App\Models\Posts;
use App\Models\Tags;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\RepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use DB;
use Auth;

class PostsServices extends Controller {

    public function store($data) {
       return Posts::created($data->all());
    }

    public function update($id,$data) {
        $student = Posts::find($id);
        $student->name = $data->input('title');
        $student->email = $data->input('content');
        $student->update();
        return;
    }

    public function storeTagsForPosts($tags_id,$article_id) {
        foreach($tags_id as $tag_id) {
            Tags::create(['tag_id'=>$tag_id,'post_id'=>$article_id]);
        }
        return;
    }

    public function getTagsWhereArticalId($id) {
        return Tags::where('post_id',$id)->get();
    }

    public function updateTagsOfPosts($tags_id,$post_id)
    {
        $article = Tags::findOrFail($post_id);
        $article->GetTags()->sync($tags_id);
    }

    public function getPostsByTagId($tagId)
    {
        $tags = Posts::where('tag_id',$tagId)->get();
        $allTagsId = [];
        foreach ($tags as $tag) {
            $allTagsId[] = $tag->article_id;
        }
        return $this->articles->whereIn('id',$allTagsId)->paginate(10);
    }

}
