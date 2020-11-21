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
    <section class="invoice col-lg-11">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> Ada Gestion
            <small class="pull-right">Date: {{$ventes->date}}</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>
            <strong>AdaGestion</strong><br>
            795 Folsom Ave, Suite 600<br>
            San Francisco, CA 94107<br>
            Phone: (804) 123-5432<br>
            Email: adagestion@gmail.com
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          To
          <address>

               @foreach ($fournisseur as $f)
                      @if($f->id == $ventes->id_users)
                         <strong>{{ $f->firstname }} {{ $f->lastname }}</strong><br>
                      @endif
                      @endforeach
       
            795 Folsom Ave, Suite 600<br>
            San Francisco, CA 94107<br>
            Phone: (555) 539-1037<br>
              @foreach ($fournisseur as $f)
                      @if($f->id == $ventes->id_users)
                         <strong>{{ $f->email }}  </strong><br>
                      @endif
                      @endforeach
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Invoice #007612</b><br>
          <br>
          <b>Order ID:</b> 4F3S8J<br>
          <b>Payment Due:</b> 2/22/2014<br>
          <b>Account:</b> 968-34567
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
              <th>Prix</th>
              <th>Date</th>
              <th>Fournisseur</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>{{$ventes->quantite}} </td>
               @foreach ($produit as $p)
                      @if($p->id == $ventes->id_produit)
                           <td>{{ $p->name }}</td>
                      @endif
                      @endforeach
                @foreach ($produit as $p)
                      @if($p->id == $ventes->id_produit)
                           <td>{{ $p->prix }}</td>
                      @endif
                      @endforeach
              
  

              <td>{{$ventes->date}}</td>
          
     @foreach ($fournisseur as $f)
                      @if($f->id == $ventes->id_users)
                           <td>{{ $f->firstname }} {{ $f->lastname }}</td>
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
                 
                ---------------------------------------------------------------
              </tr>
              <tr>
               <P align="right"> <th align="right">Total:</th></P>

   @foreach ($produit as $p)
                      @if($p->id == $ventes->id_produit)
                           <td align="left"> {{ $p->prix   *  $ventes->quantite}}  DH</td> 
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
                        <div class="row no-print">
        <div class="col-xs-12">
         <button class="btn btn-primary pull-right" onclick="window.print();return false;"><i class="fa fa-download"></i> Imprimer</button>
           
        </div>
      </div>
                      
              </div></center> 
         
      </div>

    </section>
                 
 
 </div>
  </div>
@endsection