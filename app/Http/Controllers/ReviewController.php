<?php

namespace App\Http\Controllers;
use App\Models\ReviewModel;

use Illuminate\Http\Request;

class ReviewController extends Controller
{

public function addReview(Request $request)
{
    //check first that user is logged in or not using auth middleware
    if (!$request->session()->has('user')) {
        // user is not logged in, redirect back and show error message
        return redirect()->back()->withErrors(['You must log in first.']);
    } else {
        // user is logged in, add review to the reviews form
        $review = new ReviewModel();
        $review->review_content = $request->input('review_content');
        $review->review_user = $request->session()->get('user');
        $review->product_id = $request->input('product_id');
        $review->save();
        return redirect()->back()->with('success', 'Review submitted successfully!');
    }

}
}
