 @extends('system-mgmt.ventes.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ajouter Catégories</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('ventes.store') }}">
                        {{ csrf_field() }}

                         
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
                            <label for="id_users" class="col-md-4 control-label">client</label>

                            <div class="col-md-6">
                                 
                       <select  id="id_users" class="form-control" name="id_users" required>
                                 @foreach($fournisseur as $f)
                                    @if($f->role=="client")
                                        <option value="{{$f->id}}">{{$f->username}}</option>
                                    @endif
                                 @endforeach
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
                                    Create
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
