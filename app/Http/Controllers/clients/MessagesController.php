<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\Messages;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function create(Request $request)
    {

        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
          $messageInfo=new Messages();
        $messageInfo->name = $request->username;
        $messageInfo->email = $request->email;
        $messageInfo->message = $request->message;
        if($messageInfo->save())
        {

            return back()->with('success', 'Message sent successfully.');
        }
        else
            {
            return back()->with('error', 'Failed to send message.');
            }
        // Validate the request data


        // Logic to handle the message (e.g., save to database, send email, etc.)
        // For example, you might want to save the message to a database or send an email
        // Here, we'll just simulate saving the message
        // Message::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'message' => $request->message,
        // ]);
        // Simulate sending an email
        // Mail::to('y@gmail.com')->send(new ContactFormMail($request->all()));



    }
    public function delete($id)
    {
        $message = Messages::find($id);
        if ($message) {
            $message->delete();
            return back()->with('success', 'Message deleted successfully.');
        } else {
            return back()->with('error', 'Message not found.');
        }
    }
}
