@extends('system-mgmt.produit.base')
@section('action-content')
    <!-- Main content -->
    <section class="content">
      <div class="box">
  <div class="box-header">
    <div class="row">
        <div class="col-sm-8">
          <h3 class="box-title">La liste des ariticles</h3>
        </div>
        <div class="col-sm-4">
          <a class="btn btn-primary" href="{{ route('produit.create') }}">Ajouter article</a>
        </div>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
      <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6"></div>
      </div>
 
    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-sm-12">
          <table id="example" class="table table-bordered table-hover dataTable">
            <thead>
              <tr role="row">
               
                <th> Nom article</th>
            <th>Prix</th>
                           <th>Categorie</th>
                            <th>Quantité</th>
                    <th >Details</th>
                <th >Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($produit as $produit)
                <tr>
                  
                  <td>{{ $produit->name }}</td>
                   <td>{{ $produit->prix }}</td>

                           @foreach ($categorie as $cat)
                      @if($cat->id == $produit->id_categorie)
                           <td>{{ $cat->name }}</td>
                      @endif
                      @endforeach
<td>{{ $produit->quantite }}</td>
                     <td>{{ $produit->details }}</td>
                  <td>
                    <form class="row" method="POST" action="{{ route('produit.destroy', ['id' => $produit->id]) }}" onsubmit = "return confirm('Etes-vous sur ?')">
                      <center>
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a href="{{ route('produit.edit', ['id' => $produit->id]) }}" class="btn btn-primary btn-xs glyphicon glyphicon-edit">
                       
                        </a>
                        <button type="submit" class="btn btn-danger btn-xs glyphicon glyphicon-trash">
                      
                        </button></center>
                    </form>
                  </td>
              </tr>
            @endforeach
            </tbody>
            <tfoot>
              <tr>
                
              </tr>
              

            </tfoot>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-5">
        
        </div>
        <div class="col-sm-7">
          <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
          
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.box-body -->
</div>
    </section>
    <!-- /.content -->
  </div>
@endsection