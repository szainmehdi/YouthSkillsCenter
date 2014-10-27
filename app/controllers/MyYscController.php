<?php

class MyYscController extends BaseController {

    public function index() {
        return View::make('my-ysc.index');
    }
    public function billing() {
        return View::make('my-ysc.billing');
    }
    public function updateCard() {
        dd(Input::all());
    }

}