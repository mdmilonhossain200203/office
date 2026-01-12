<?php

namespace App\Http\Controllers;

use App\Models\PhoneBook;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use function PHPUnit\Framework\returnSelf;

class PhoneBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = PhoneBook::all();
       // dd($contacts);
        return view('phone_book.index', compact('contacts'));

      // $allcontact= PhoneBook::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('phone_book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->all();
            PhoneBook::create([
                'name' => $request->input('name'),
                'phone_number' => $request->input('phone_number'),
            ]);
            return redirect('/phonebook')->with('success', 'Contact added successfully!');

    }

    /**
     * Display the specified resource.
     */





    
    public function show(PhoneBook $phoneBook,$id)
    {

        $contacts = PhoneBook::find($id);
       // dd($contacts);


        return view('phone_book.show', compact('contacts'));
    }

    /**
     * Show the form for editing the specified resource.
     */






    public function edit(PhoneBook $phoneBook, $id)

    {
        $contacts = PhoneBook::find($id);
        //dd($contacts);
        return view('phone_book.edit', compact('contacts'));
    }

    /**
     * Update the specified resource in storage.
     */







    public function update(Request $request, PhoneBook $phoneBook , $id)
    {

        $contacts = PhoneBook::find($id);
        $contacts->update($request->all());
         return redirect()->route('phonebook.index');

        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PhoneBook $phoneBook)
    {
        //
    }
}
