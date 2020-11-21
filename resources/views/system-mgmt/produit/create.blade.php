@extends('system-mgmt.produit.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ajoutr Article</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('produit.store') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nom article  </label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
               

                     <div class="form-group{{ $errors->has('prix') ? ' has-error' : '' }}">
                            <label for="prix" class="col-md-4 control-label">prix   </label>

                            <div class="col-md-6">
                                <input id="prix" type="text" class="form-control" name="prix" value="{{ old('prix') }}" required autofocus>

                                @if ($errors->has('prix'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prix') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
              
        <div class="form-group{{ $errors->has('quantite') ? ' has-error' : '' }}">
                            <label for="quantite" class="col-md-4 control-label">quantite   </label>

                            <div class="col-md-6">
                                <input id="quantite" type="text" class="form-control" name="quantite" value="{{ old('quantite') }}" required autofocus>

                             
                            </div>
                        </div>

                         <div class="form-group ">
                            <label for="id_categories" class="col-md-4 control-label">catégorie</label>

                            <div class="col-md-6">
                                 
                       <select  id="id_categorie" class="form-control" name="id_categorie" required>
                                 @foreach($categorie as $categorie)
                                    
                                        <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                                   
                                 @endforeach
                                 </select>
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('details') ? ' has-error' : '' }}">
                            <label for="details" class="col-md-4 control-label">détails  </label>

                            <div class="col-md-6">
                                <input id="details" type="text" class="form-control" name="details" value="{{ old('details') }}" required autofocus>
 
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
