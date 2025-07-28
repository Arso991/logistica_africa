<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Mail\EmailContact;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'object' => 'required|string|max:255',
            'message' => 'required|string',
        ], [
            'fullname.required' => 'Le nom complet est requis.',
            'fullname.string' => 'Le nom complet doit être une chaîne de caractères.',
            'fullname.max' => 'Le nom complet ne doit pas dépasser 255 caractères.',

            'email.required' => 'L’adresse e-mail est requise.',
            'email.email' => 'Veuillez fournir une adresse e-mail valide.',
            'email.max' => 'L’adresse e-mail ne doit pas dépasser 255 caractères.',

            'object.required' => 'L’objet du message est requis.',
            'object.string' => 'L’objet du message doit être une chaîne de caractères.',
            'object.max' => 'L’objet du message ne doit pas dépasser 255 caractères.',

            'message.required' => 'Le contenu du message est requis.',
            'message.string' => 'Le contenu du message doit être une chaîne de caractères.',
        ]);

        if ($validator->fails()) {
            $firstErrorMessage = $validator->errors()->first();
            return redirect()->back()
                ->with('error', $firstErrorMessage);
        }

        try {

            $mailData = [
                'lastname' => Str::title($request->lastname),
                'firstname' => Str::title($request->firstname),
                'email' => $request->email,
                'message' => $request->message,
                'ip' => $request->ip(),
            ];

            Mail::to('kksmartcom.bj@gmail.com')->send(new EmailContact($mailData));

            Contact::create([
                'fullname' => $request->fullname,
                'email' => $request->email,
                'object' => $request->object,
                'message' => $request->message,
            ]);

            return redirect()->back()->with('success', 'Message envoyé.');
        } catch (\Exception $e) {
            Log::error('Erreur lors de l\'envoie du message : ' . $e->getMessage());
            return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'envoie du message. Veuillez reéssayer.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
