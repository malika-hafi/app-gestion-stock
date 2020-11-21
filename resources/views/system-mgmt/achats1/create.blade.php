 @extends('system-mgmt.achats1.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ajoutr Article</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('achats1.store') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
  
              <div class="form-group ">
                            <label for="id_produit" class="col-md-4 control-label">produit</label>

                            <div class="col-md-6">
                                 
                       <select  id="id_produit" class="form-control" name="id_produit" required>
                                 @foreach($produit as $produit)
                                    
                                        <option value="{{$produit->id}}">{{$produit->name}}</option>
                                   
                                 @endforeach
                                 </select>
                            </div>
                        </div>
               

 <div class="form-group ">
                            <label for="id_users" class="col-md-4 control-label">fournisseur</label>

                            <div class="col-md-6">
                                 
                       <select  id="id_users" class="form-control" name="id_users" required>
                        <option value="{{Auth::user()->id}}">{{Auth::user()->username}}</option>
                                 </select>
                            </div>
                        </div>
              

                         <div class="form-group{{ $errors->has('quantite') ? ' has-error' : '' }}">
                            <label for="quantite" class="col-md-4 control-label">quantite </label>

                            <div class="col-md-6">
                                <input id="quantite" type="text" class="form-control" name="quantite" value="{{ old('quantite') }}" required autofocus>
 
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                            <label for="date" class="col-md-4 control-label">date  </label>

                            <div class="col-md-6">
                                <input id="date" type="text" class="form-control" name="date" value="{{ old('date') }}" required autofocus>
 
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Ajouter
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
