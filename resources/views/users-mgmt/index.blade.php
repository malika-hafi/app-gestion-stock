@extends('users-mgmt.base')
@section('action-content')
    <!-- Main content -->
    <section class="content">
      <div class="box">
  <div class="box-header">
    <div class="row">
        <div class="col-sm-8">
          <h3 class="box-title">Liste des utilisateurs</h3>
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
              <tr>
                <th >User Name </th>
                <th >Email</th>
                <th>First Name</th>
                <th>Last Name</th>
                  <th>role</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
            @if(Auth::user()->role == 'admin')
                <tr>
                  <td class="sorting_1">{{ $user->username }}</td>
                  <td>{{ $user->email }}</td>
                  <td class="hidden-xs">{{ $user->firstname }}</td>
                  <td class="hidden-xs">{{ $user->lastname }}</td>
                  <td class="hidden-xs">{{ $user->role }}</td>
                  <td>
                    <form class="row" method="POST" action="{{ route('user-management.destroy', ['id' => $user->id]) }}" onsubmit = "return confirm(' Etes-vous sur ?')">
                      <center>
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a href="{{ route('user-management.edit', ['id' => $user->id]) }}" class="btn btn-primary btn-xs glyphicon glyphicon-edit">
                       
                        </a>
                        
                         <button type="submit" class="btn btn-danger btn-xs glyphicon glyphicon-trash">
                        
                        </button></center>
                     
                    </form>
                  </td>
              </tr>
              @endif
            @if($user->role != 'admin' && $user->id == Auth::user()->id)
                <tr>
                  <td class="sorting_1">{{ $user->username }}</td>
                  <td>{{ $user->email }}</td>
                  <td class="hidden-xs">{{ $user->firstname }}</td>
                  <td class="hidden-xs">{{ $user->lastname }}</td>
                  <td class="hidden-xs">{{ $user->role }}</td>
                  <td>
                    <form class="row" method="POST" action="{{ route('user-management.destroy', ['id' => $user->id]) }}" onsubmit = "return confirm(' Etes-vous sur ?')">
                      <center>
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a href="{{ route('user-management.edit', ['id' => $user->id]) }}" class="btn btn-primary btn-xs glyphicon glyphicon-edit">
                       
                        </a>
                        
                         </center>
                     
                    </form>
                  </td>
              </tr>
              @endif
            @endforeach
            </tbody>
           <tfoot>
              <tr>
                <tr>
            </tr>
              </tr>
            </tfoot>
          </table>

  <!-- /.box-header -->
  <div class="box-body">
      <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6"></div>
      </div>
   
</div>
    </section>
    <!-- /.content -->
  </div>

@endsection