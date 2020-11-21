 @extends('system-mgmt.achats.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ajoutr Article</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('achats.store') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
  
              <div class="form-group ">
                            <label for="id_produit" class="col-md-4 control-label">produit</label>

                            <div class="col-md-6">
                                 
                       <select  id="id_produit" class="form-control" name="id_produit" required>
                                 @foreach($produit as $produit)
                                  @if( $produit->quantite > 0)
                                        <option value="{{$produit->id}}">{{$produit->name}}</option>
                                   @endif
                             
     @endforeach
                                 </select>
                            </div>
                        </div>
                                    
              <div class="form-group ">
                            <label for="quantite" class="col-md-4 control-label">Quantite</label>

                            <div class="col-md-6">
                                 
                       <select  id="quantite" class="form-control" name="quantite" required>
                         
                                        <option value="1">1</option>
              
                                 </select>
                            </div>
                        </div>
               

 <div class="form-group ">
                            <label for="id_users" class="col-md-4 control-label">fournisseur</label>

                            <div class="col-md-6">
                                 
                       <select  id="id_users" class="form-control" name="id_users" required>
                                 @foreach($fournisseur as $f)
                                    @if($f->role=="fournisseur")
                                        <option value="{{$f->id}}">{{$f->username}}</option>
                                    @endif
                                 @endforeach
                                 </select>
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
