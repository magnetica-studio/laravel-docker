<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * アプリケーションの全ユーザーリストを表示
     */
    public function index()
    {
        $users = DB::select('select * from users');

        return view('user', ['users' => $users]);
    }
}
