<?php

class ForumController extends BaseController {

    /**
     * 登录
     *
     * @return Response
     */
    public function getLogin()
    {
        if (Auth::check()) {
            return Redirect::to('forum');
        }

        return View::make('index');
    }
    

    public function getBlocks()
    {
        $blocks = Block::all();
        return View::make('blocks')->withBlocks($blocks);;
    }
    
    public function getBlock($id)
    {
        
        $blocks = Block::find($id)->toJson();
        
        echo $blocks;exit;
        
        return View::make('blocks')->withBlocks($blocks);;
    }
}