<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Duration;
use App\Mail\DataForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form/list', [
            'data' => Form::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form/form_create', [
            'duration' => Duration::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'heading' => 'required|max:140',
            'message' => 'required|max:255',
        ]);

        $data = new Form;
        $data->email = $request->input('email');
        $data->heading = $request->input('heading');
        $data->message = $request->input('message');
        $data->gender = $request->input('gender');
        $data->durations_id = $request->input('duration');
        $data->save();

        Mail::to($data->email)->send(new DataForm($data));

        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        return view('form/edit_data', [
            'data' => Form::where('id', $form->id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        $data = Form::where('id', $form->id)->first();
        $data->email = $request->input('email');
        $data->text = $request->input('text');
        $data->message = $request->input('message');
        $data->select = $request->input('select');
        $data->radio = $request->input('radio');
        $data->save();

        return redirect('/form');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        $data = Form::where('id', $form->id)->first();
        $data->delete();

        return back()->withInput();
    }
}
