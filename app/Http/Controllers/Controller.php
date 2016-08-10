<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    protected function validates(Request $request, $flashMsg = '')
    {
        return $this->validate($request, $this->rules);
        // $input = $request->all();
        // $validator = \Validator::make($input, $this->rules);
        // if ($validator->fails()) {
        //     if ($flashMsg) {
        //         flash($flashMsg);
        //     }

        //     \Redirect::back()->withErrors($validator)->withInput($input)->send();
        //     abort(302);
        // }
    }
}
