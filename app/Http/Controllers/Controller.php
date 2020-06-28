<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


public function loadViewData()
{
    $viewData = [];

    // Check for flash errors
    if (session('error')) {
        $viewData['error'] = session('error');
        $viewData['errorDetail'] = session('errorDetail');
    }

    // Check for logged on user
    if (session('userName'))
    {
        $viewData['id'] = session('id');
        $viewData['userName'] = session('userName');
        $viewData['jobTitle'] = session('jobTitle');
        $viewData['mail'] = session('mail');
        $viewData['mobilePhone'] = session('mobilePhone');
        $viewData['userPrincipalName'] = session('userPrincipalName');
        $viewData['userEmail'] = session('userEmail');
        $viewData['userImage'] = session('userImage');

    }

    return $viewData;
}
}
