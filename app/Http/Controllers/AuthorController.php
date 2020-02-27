<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    //purpose is to display a form to create a new method
    public function create() 
    {
        $author = new Author;
        // $author->name = 'Gaby';

        $view = view('admin.author.edit', compact('author')); //we have now created a view object
                                        //creates an associative array, 
                                        //the key is author, and the value is the value of author
                                        //same as ['author' => $author]
        return $view;
    }

    //this method's purpose is to insert new Author object into the database
    public function store(Request $request)
    {
        // dd('HERE ARE WE'); dd is a cool weird thing!!! 

        //we need to:
        //create new object author
        $author = new Author;

        //fill new author from the request
                // $request = request(); 
                    // will return object request anywhere, don't have to specifiy it inside the argument of the method
        
        //store the fillled object into the database
        $author->name = $request->input('name');
        $author->nationality = $request->input('nationality');

        $author->save(); // will do an insert, not an updates
    
        
        //post redirect-get PRG
        return redirect('author/'.$author->id.'/edit');
    }

    //to display the form to edit an existing author record
    public function edit($id)
    {
        $author = Author::findOrFail($id);
        return view('admin.author.edit', compact('author'));
    }

    //update existing author author in the database
    public function update(Request $request, $id)
    {
        //select existing object Author from the database based on the ID
        $author = Author::findOrfail($id);
        $author->name = $request->input('name');
        $author->nationality = $request->input('nationality');
        $author->save(); 
        //post redirect-get PRG
        return redirect('author/'.$author->id.'/edit');
    }


}

/// post vs put 
// http methods are just ways to tell the server what to do 
// best to use it just for updates 


