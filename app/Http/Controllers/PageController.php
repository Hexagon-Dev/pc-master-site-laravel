<?php

namespace App\Http\Controllers;

use App\Models\FeedbackModel;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function price() {
        return view('price');
    }

    public function question() {
        return view('question');
    }

    public function feedback() {
        $feedbacks = new FeedbackModel();

        return view('feedback', ['feedbacks' => $feedbacks->all()]);
    }

    public function feedback_check(Request $request) {
        $valid = $request->validate([
            'name' => 'required|min:2|max:20',
            'mark' => 'required',
            'feedback' => 'required|min:10|max:500'
        ]);

        $feedback = new FeedbackModel();
        $feedback->name = $request->input('name');
        $feedback->mark = $request->input('mark');
        $feedback->feedback = $request->input('feedback');

        $feedback->save();

        return redirect('/feedback');
    }

    public function contact() {
        return view('contact');
    }
}
