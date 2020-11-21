 @extends('system-mgmt.produit.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Modifier Catégorie</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('produit.update', ['id' => $produit->id]) }}">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label"> Produit</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $produit->name }}" required autofocus>

                           
                            </div>
                        </div>
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="prix" class="col-md-4 control-label">prix</label>
                        <div class="col-md-6">
                                <input id="prix" type="text" class="form-control" name="prix" value="{{ $produit->prix }}" required autofocus>

                            
                            </div>
                        </div>
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="quantite" class="col-md-4 control-label">quantité</label>
                        <div class="col-md-6">
                                <input id="quantite" type="text" class="form-control" name="quantite" value="{{ $produit->quantite}}" required autofocus>

                            
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

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="details" class="col-md-4 control-label">details</label>
                        <div class="col-md-6">
                                <input id="details" type="text" class="form-control" name="details" value="{{ $produit->details }}" required autofocus>

                            
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Modifier
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
