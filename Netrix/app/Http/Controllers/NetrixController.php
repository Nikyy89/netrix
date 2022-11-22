<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Filesystem\Cloud;
use Illuminate\Http\Request;
use ActiveCollab\SDK\Client;
class NetrixController extends Controller
{
    public function index($client)
    {
        $authenticator_name = env("ACTIVECOLLAB_COMPANY");
        $authenticator_app_name = env("ACTIVECOLLAB_APP_NAME");
        $authenticator_email = env("ACTIVECOLLAB_MAIL");
        $authenticator_password = env("ACTIVECOLLAB_PASSWORD");


        $tasks = $client->get('project/1/tasks');
        $user = $client->get('users');
        $commments = $client->get('comment/task/1')->where('created_on', '>=', now());
        $historys = $client->get('project/1/tasks/1')->where('updated_on', '>=', now());


        return view('netrix', compact('tasks', 'user', 'commments', 'historys'));
    }
}
