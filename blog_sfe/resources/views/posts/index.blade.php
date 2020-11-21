
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Accueil</title>
  <!-- Tell the browser to be responsive to screen width -->

  <!-- Bootstrap 3.3.7 -->
   
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset ('adminlte/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
   
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('adminlte/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset ('adminlte/dist/css/skins/_all-skins.min.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ asset ('adminlte/bower_components/morris.js/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ asset ('adminlte/bower_components/jvectormap/jquery-jvectormap.css')}}">
  <!-- Date Picker -->
   
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset ('adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ asset ('adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="admin2.blade.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b></span>
    </a>
@include('/layouts/nav')
@include('/layouts/sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         
        <small> </small>
      </h1>
      <ol class="breadcrumb">
         
      </ol>
    </section>

@extends('layouts.app')

@section('content')
 

  @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif

  <table class="table table-bordered">

    <tr>
      <th with="80px">No</th>
      <th>Title</th>
      <th>Body</th>
      <th with="140px" class="text-center">
        <a href="{{route('posts.create')}}" class="btn btn-success btn-sm">
          <i class="glyphicon glyphicon-plus"></i>
        </a>
      </th>
    </tr>
    <?php $no=1; ?>
    @foreach ($post as $key => $value)
      <tr>
        <td>{{$no++}}</td>
        <td>{{ $value->titre_cat }}</td>
        <td>{{ $value->description }}</td>
        <td>
          <a class="btn btn-info btn-sm" href="{{route('posts.show',$value->id)}}">
              <i class="glyphicon glyphicon-th-large"></i></a>
          <a class="btn btn-primary btn-sm" href="{{route('posts.edit',$value->id)}}">
              <i class="glyphicon glyphicon-pencil"></i></a>
            {!! Form::open(['method' => 'DELETE','route' => ['posts.destroy', $value->id],'style'=>'display:inline']) !!}
              <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
            {!! Form::close() !!}
        </td>
      </tr>
    @endforeach
    
   
  </table>
  </div>

   @include('/layouts/control')
@include('/layouts/footer')
  @endsection 



