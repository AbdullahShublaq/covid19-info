<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Mail\SendMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Kreait\Firebase\Factory;

class FirebaseController extends Controller
{
    //
    public function storeSubscribe(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|string|max:30',
            'email' => 'required|email|max:30'
        ]);

        $database = $this->database();
        $postRef = $database->getReference('subscribes')->push($attributes);

        return back()->with('success', 'Thanks for Subscribe');
    }

    private function database()
    {
        $serviceAccountPath = base_path() . '/storage/covid19-251c1-firebase-adminsdk-wfq7h-db41040012.json';
        $factory = (new Factory)
            ->withServiceAccount($serviceAccountPath)
            ->withDatabaseUri('https://covid19-251c1-default-rtdb.firebaseio.com/');

        $database = $factory->createDatabase();

        return $database;
    }

    public function send_message(Request $request)
    {
        $attributes = $request->validate([
            'message' => 'required',
        ]);

        $database = $this->database();
        $db = $database->getReference('subscribes');

        $subscribers = $db->getValue();

        foreach ($subscribers as $subscriber) {
//            Mail::to($subscriber['email'])
//                ->send(
//                    new SendMessage($subscriber['name'], $attributes['message'])
//                );
//            dispatch(new SendEmailJob($subscriber, $attributes['message']));
            SendEmailJob::dispatchAfterResponse($subscriber, $attributes['message']);
        }

        return back()->with('success', 'Messages Sent Successfully');
    }
}
