<?php

class CommentController extends BaseController {

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
}