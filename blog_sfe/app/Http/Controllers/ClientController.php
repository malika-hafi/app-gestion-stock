 <?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\client;
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
          $post = client::all();
        return view('client.afficherClients',compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
          'id_clients'=>'required',
          'nom'=>'required',
           'email'=>'required|string|max:255',
          'password'=>'required',
             'tel'=>'required',
        ]);
        categorie::create($request->all());
        return redirect()->route('client.index')->with('success','Post created success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post = categorie::find($id);
      return view('client.show',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = categorie::find($id);
        return view('client.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
           'id_clients'=>'required',
          'nom'=>'required',
           'email'=>'required|string|max:255',
          'password'=>'required',
             'tel'=>'required',
        ]);
        categorie::find($id)->update($request->all());
        return redirect()->route('client.afficherClients')->with('success','Post update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        categorie::find($id)->delete();
        return redirect()->route('client.afficherClients')->with('success','Post deleted success');
    }
}
