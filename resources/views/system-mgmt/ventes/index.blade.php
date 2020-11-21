 @extends('system-mgmt.ventes.base')
@section('action-content')
<style type="text/css">
 
.bouton
{
background-image: url("images/input.png"); 
width: 20px;
height: 10px;
}
</style>
    <!-- Main content -->
        <section class="content">
      <div class="box">
  <div class="box-header">
    <div class="row">
        <div class="col-sm-4">
          <h3 class="box-title">Liste des ventes   </h3>
        </div>
        <div class="col-sm-4">
         
        </div>
        <div class="col-sm-4">
       
        </div>

    </div>
  </div>
 
    
      
  
 
  <!-- /.box-header -->
  <div class="box-body">
      <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6"></div>
      </div>
 
      <div class="box-header">
    <div class="row">
                <div class="col-sm-8">
             
                </div>
              <div class="col-sm-4">
                <a class="btn btn-primary" href="{{ route('ventes.create') }}"> Ajouter vente  </a>

              </div>
       
    </div>
  </div>
    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-sm-12">
          <table id="example" class="table table-bordered table-hover dataTable" >
            <thead>
              <tr >
                <th>  produit  </th>
                <th>    client</th>
                 <th>   quantite</th>
                  <th>   date</th>
                  <th>Statut</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($ventes as $ventes)

                <tr>


   @foreach ($produit as $p)
                      @if($p->id == $ventes->id_produit)
                           <td>{{ $p->name }}</td>
                      @endif
                      @endforeach

     @foreach ($fournisseur as $f)
                      @if($f->id == $ventes->id_users)
                           <td>{{ $f->username }}</td>
                      @endif
                      @endforeach
         

                  <td>{{ $ventes->quantite }}</td>
                  <td>{{ $ventes->date }}</td>
                  <td>{{ $ventes->statut }}</td>
                  <td>
                    <form class="row" method="POST" action="{{ route('ventes.destroy', ['id' => $ventes->id]) }}" onsubmit = "return confirm('Etes-vous sur ?')">
                            <center>
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a href="{{ route('ventes.edit', ['id' => $ventes->id]) }}" class="btn btn-primary btn-xs glyphicon glyphicon-edit">   </a>
                          <a href="{{ route('ventes.show', ['id' => $ventes->id]) }}" class="btn btn-info  btn-xs glyphicon glyphicon glyphicon-comment">
                     </a>
                        <button type="submit" class="btn btn-danger btn-xs glyphicon glyphicon-trash">
                      
                        </button></center>
 
                    </form>
                  </td>
              </tr>
            @endforeach
            </tbody>
            <tfoot>
         
            </tfoot>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-5">
        
        <div class="col-sm-7">
          
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