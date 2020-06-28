<?php
// Copyright (c) Microsoft Corporation.
// Licensed under the MIT License.

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model;
use App\TokenStore\TokenCache;

class MailsController extends Controller
{

  public function home()
  {
    $viewData = $this->loadViewData();

    // Get the access token from the cache
    $tokenCache = new TokenCache();
    $accessToken = $tokenCache->getAccessToken();

    // Create a Graph client
    $graph = new Graph();
    $graph->setAccessToken($accessToken);

    $queryParams = array();

    // Append query parameters to the '/me/events' url
    $getEventsUrl = '/sites/9b8c08f5-c223-4e1f-a9d9-df3b37ea3876/lists/ede25979-d6c9-45b0-a99d-bdff756e815c/items'.http_build_query($queryParams);

    $events = $graph->createRequest('GET', $getEventsUrl)
      ->setReturnType(Model\Event::class)
      ->execute();

      $viewData['events'] = $events;
      return view('mails', $viewData);

  }
}