<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function showAll()
    {

        $messages = Message::all()->sortByDesc('created_at');


        return view('messages', ['messages' => $messages]);
    }
    public function create(Request $request)
    {


        $message = new Message();

        $message->title = $request->title;
        $message->content = $request->content;

        $message->save();


        return redirect('/messages');
    }
    public function details($id)
    {

        $message = Message::findOrFail($id);


        return view('messageDetails', ['message' => $message]);
    }
    public function delete($id)
    {


        $result = Message::findOrFail($id)->delete();


        return redirect('/messages');
    }
    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $data = Message::findOrFail($id);
        $data->title = $request->title;
        $data->content = $request->content;
        $data->save();

        return redirect('/messages');
    }
}
