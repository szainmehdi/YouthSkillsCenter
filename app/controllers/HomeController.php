<?php

use Illuminate\Http\JsonResponse;

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return View::make('index');
	}
	public function privacyPolicy()
	{
		return View::make('privacy');
	}
	public function preschool()
	{
		return View::make('preschool');
	}
	public function programs()
	{
		return View::make('programs');
	}
	public function schoolAgeCare()
	{
		return View::make('school-age-care');
	}
	public function about()
	{
		return View::make('about');
	}
	public function faqs()
	{
		return View::make('faqs');
	}
	public function contact()
	{
		return View::make('contact');
	}
	public function contactSubmit()
	{
        $input = Input::only(['name', 'phone', 'email', 'msg']);
		if(count(array_filter($input)) == 4) {
			$lead = \YouthSkillsCenter\Lead::create([
				'name' => $input['name'],
				'phone' => $input['phone'],
				'email' => $input['email'],
				'message' => $input['message']
			]);
			Mail::send('emails.form-entry', $input, function(\Illuminate\Mail\Message $msg) use ($lead){
				$msg->to('hello@ysc5.com', 'Youth Skills Center')
					->replyTo($lead->email, $lead->name)
					->subject('A message from ' . $lead->name);
			});
			return JsonResponse::HTTP_OK;
		} else {
			return JsonResponse::HTTP_INTERNAL_SERVER_ERROR;
		}
	}

}
