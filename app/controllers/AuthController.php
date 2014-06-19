<?php

use \Redirect;

class AuthController extends BaseController {
    
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
    
    /**
     * 执行登录操作
     *
     * @return Response
     */
    public function postLogin()
    {
        //这里的key必须叫password,如果你的数据库里密码字段不叫password,
        //请修改app/models/Use.php 中的 getAuthPassword 方法，返回您的字段名即可
        $user = array(
                'user_login' => Input::get('user_login'),
                'password'  => Input::get('user_pass'),
        );
        
//         $password = Hash::make('123456');
//         $hash = '$2y$10$oYZ5fbVp1VK8nwq4qbbp5.U0PMpoZknBmihDR5nN9GtB.30ml.F4O';
        
//         if (Hash::check('123456', $hash)) {
//             echo 'success';exit;
//         }
        
        
        if (Auth::attempt($user, false)){
            
            $url = URL::action('ForumController@getBlocks');
            //echo $url;exit;
            
            return Redirect::to('forum/blocks');
            return Redirect::back()->withMessage("登录成功");
            echo $url;exit;
        } else {
            
            echo "fail";
        }
        
//         if (Auth::check()){
//             echo 'success';exit;
//         }
        
        
        
//         if (Auth::viaRemember() || Auth::attempt($user, Input::get('remember'))) {
//             return Response::json(array(
//                     'login_status' => 'success',
//                     'redirect_url' => URL::previous(),
//             ));
//         }
    
//         return Response::json(array(
//                 'login_status' => 'invalid',
//         ));
    }
}