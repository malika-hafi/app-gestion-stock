 @extends('system-mgmt.achats.base')

@section('action-content')
  <div class="container">
    <div class="row">
    
      <div class="col-md-12">
        <h3>Detail </h3>
      </div>
    </div>
   
    <div class="row">
      <!-- Main content -->
    <section class="invoice col-xs-11" >
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> Ada Gestion
            <small class="pull-right">Date: {{$achats->date}}</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          De
          <address>
            <strong>AdaGestion</strong><br>
            795 Folsom Ave, Suite 600<br>
            San Francisco, CA 94107<br>
            Téléphone: (+212) 6 12 35 43 22<br>
            Email: adagestion@gmail.com
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
         A
                <address>

               @foreach ($fournisseur as $f)
                      @if($f->id == $achats->id_users)
                         <strong>{{ $f->firstname }} {{ $f->lastname }}</strong><br>
                      @endif
                      @endforeach
       
            795 Folsom Ave, Suite 600<br>
            San Francisco, CA 94107<br>
            Téléphone: (555) 539-1037<br>
              @foreach ($fournisseur as $f)
                      @if($f->id == $achats->id_users)
                         <strong>{{ $f->email }}  </strong><br>
                      @endif
                      @endforeach
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Facture 12</b><br>
          <br>
          <b>ID Ordre :</b> 4F3S8J<br>
           
          <b>Compte:</b> 968-34567
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
                    <th>Qty</th>
              <th>ProduIT</th>
              <th>Détails</th>
           
              <th>Prix</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>{{$achats->quantite}} </td>

                   @foreach ($produit as $p)
                   @if($p->id == $achats->id_produit)
               <td>{{ $p->name }}</td>
                   @endif
                   @endforeach

                       @foreach ($produit as $p)
                       @if($p->id == $achats->id_produit)
              <td>{{ $p->details }}</td>
                        @endif
                       @endforeach              
            
                      @foreach ($produit as $p)
                      @if($p->id == $achats->id_produit)
               <td>{{ $p->prix }}</td>
                      @endif
                      @endforeach
            </tr>
             
             
             
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
   
        <!-- /.col -->
        <div class="col-xs-6">
 

          <div class="table-responsive">
            <table class="table">
              <tr>
             
              </tr>
              <tr>
              
              </tr>
              <tr>
              --------------------------------------------------------------
              </tr>
         <tr>
                <th>TVA (10%)</th>
                  @foreach ($produit as $p)
                      @if($p->id == $achats->id_produit)
                           <td > {{ $p->prix   *  0.1}}  DH</td> 
                      @endif
                      @endforeach
              </tr>
              <tr>
               <P align="right"> <th align="right">Total:</th></P>

   @foreach ($produit as $p)
                      @if($p->id == $achats->id_produit)
                           <td > {{ ( $p->prix   * 0.1)* $achats->quantite}}  DH</td> 
                      @endif
                      @endforeach
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
    
          
         
             <center>  <div class="col-sm-4">
                  
            
                      
              </div></center> 
                      <div class="row no-print">
        <div class="col-xs-12">
         <button class="btn btn-primary pull-right" onclick="window.print();return false;"><i class="fa fa-download"></i> Imprimer</button>
            <!-- <form class="form-horizontal" role="form" method="POST" action="{{ route('invoice.pdf',['id' => $achats->id]) }}">
                                  {{ csrf_field() }}
          <button type="submit" class="btn btn-primary pull-right" style="margin-right: 5px;" >
            <i class="fa fa-download"></i> Generate PDF
          </button> </form> -->
        </div>
      </div>
         
      </div>

    </section>
                 
 
 </div>
  </div>
@endsection
