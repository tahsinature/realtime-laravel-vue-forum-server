<?php

namespace App\Http\Controllers;

use App\Model\Like;
use App\Model\Reply;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like(Reply $reply)
    {
        // return $reply;
        $reply->like()->create([
            // "user_id" => \auth()->id(),
            "user_id" => '1',
        ]);
        return \response('Liked');
    }
    public function dislike(Reply $reply)
    {
        // $reply->like()->where(['user_id', auth()->id()])->first()->delete();
        $reply->like()->where('user_id', '1')->first()->delete();
        return \response('disLiked');
    }
}
