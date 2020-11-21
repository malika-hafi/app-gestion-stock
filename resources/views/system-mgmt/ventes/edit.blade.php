 @extends('system-mgmt.ventes.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Modifier  </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('ventes.update', ['id' => $ventes->id]) }}">
                        <input type="hidden" name="_method" value="PATCH">
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
                            <label for="id_users" class="col-md-4 control-label">client</label>

                            <div class="col-md-6">
                                 
                       <select  id="id_users" class="form-control" name="id_users" required>
                                 @foreach($fournisseur as $fournisseur)
                                    @if($fournisseur->role=="client")
                                        <option value="{{$fournisseur->id}}">{{$fournisseur->username}}</option>
                                    @endif
                                 @endforeach
                                 </select>
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('quantite') ? ' has-error' : '' }}">
                            <label for="quantite" class="col-md-4 control-label">  quantite</label>

                            <div class="col-md-6">
                                <input id="quantite" type="text" class="form-control" name="quantite" value="{{ $ventes->quantite }}" required>

                                @if ($errors->has('quantite'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('quantite') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
@if(Auth::user()->role == 'admin')                                           

                            <div class="form-group{{ $errors->has('statut') ? ' has-error' : '' }}">
                            <label for="statut" class="col-md-4 control-label">Statut</label>

                            <div class="col-md-6">
                                 
<select  id="statut"   class="form-control" name="statut" value=" {{ $ventes->statut }}" required autofocus>
                                 
                                     <option value="valider">valider</option>
                                     <option value="non valider">non valider</option>
                                
                                @if ($errors->has('statut'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('statut') }}</strong>
                                    </span>
                                @endif
                                 </select>
                            </div>
                        </div>
 @endif
       

   <div class="form-group">
                            <label class="col-md-4 control-label">date</label>
                            <div class="col-md-6">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" value="{{ $ventes->date }}" name="date" class="form-control pull-right" id="birthDate" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
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
