<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    /**
     * @throws \Exception
     */
    public function getData(Request $request)
    {
        if($request->ajax())
        {
            return DataTables::of(User::all())->toJson();
        }
        return [];
    }
}
