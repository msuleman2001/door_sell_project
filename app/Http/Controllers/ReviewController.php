<?php

namespace App\Http\Controllers;
use App\Models\ReviewModel;

use Illuminate\Http\Request;

class ReviewController extends Controller
{

public function addReview(Request $request)
{
        $review = new ReviewModel();
    if ($request->session()->has('user')) {
        // User is logged in, use their email and name from the session
        $review->review_email = $request->session()->get('user')->user_email;
        $review->review_user = $request->session()->get('user')->user_name;
    } else {
        // User is not logged in, use the input values
        $review->review_email = $request->input('review_email');
        $review->review_user = $request->input('review_user');
    }
        $review->review_content = $request->input('review_content');
            $review->product_id = $request->input('product_id');
        $review->save();
        return redirect()->back()->with('success', 'Review submitted successfully!');
    }

}
