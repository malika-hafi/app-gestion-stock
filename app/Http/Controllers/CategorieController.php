<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Categorie;

class CategorieController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth');
    }

 
    public function index()
    {
        $categories = Categorie::paginate(20);

        return view('system-mgmt/categorie/index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('system-mgmt/categorie/create');
    }


    public function store(Request $request)
    {
        $this->validateInput($request);
         Categorie::create([
            'name' => $request['name'],
            'body' => $request['body'],
        ]);

        return redirect()->intended('system-management/categorie');
    }

 
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        $categorie = Categorie::find($id);
        
        

        return view('system-mgmt/categorie/edit', ['categorie' => $categorie]);
    }
 
     
    public function update(Request $request, $id)
    {
        $categorie = Categorie::findOrFail($id);
        $this->validateInput($request);
        $input = [
            'name' => $request['name'],
            'body' => $request['body']
        ];
        Categorie::where('id', $id)
            ->update($input);
        
        return redirect()->intended('system-management/categorie');
    }

  
    public function destroy($id)
    {
        Categorie::where('id', $id)->delete();
         return redirect()->intended('system-management/categorie');
    }

    
    public function search(Request $request) {
        $constraints = [
            'name' => $request['name'],
            'body' => $request['body']
            ];

       $categories = $this->doSearchingQuery($constraints);
       return view('system-mgmt/categorie/index', ['categories' => $categories, 'searchingVals' => $constraints]);
    }

    private function doSearchingQuery($constraints) {
        $query = categorie::query();
        $fields = array_keys($constraints);
        $index = 0;
        foreach ($constraints as $constraint) {
            if ($constraint != null) {
                $query = $query->where( $fields[$index], 'like', '%'.$constraint.'%');
            }

            $index++;
        }
        return $query->paginate(5);
    }
    private function validateInput($request) {
        $this->validate($request, [
        'name' => 'required|max:60|unique:categorie'
    ]);
    }
}
