@extends('layouts.app')
@section('content')
<div class="container pb-2">
 <a class="btn btnsuccess" href="{{ route('Catagory1/register') }}" role="button"> {{ __('New Catagory1') }}
</a>
</div>
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('Catagory1 List') }}
 </div>
 <div class="card-body">
 <table class="table table-striped table-bordered ">
 <thead class="thead-inverse">
 <tr>
 <th>
 id
 </th>
<th>
name
 </th>

 </tr>
 </thead>
 <tbody>
 @foreach($Catagory1 as $Catagory1)
 <tr>
 <td> {{ $Catagory1->id }}</td>
 <td> {{ $Catagory1->name }}</td>

 
 <td>
 <a class="btn btn-xs btninfo" title="Detail" href="/Catagory1/search/{{ $Catagory1->id }}">Details</a>
 <a class="btn btn-xs btnsuccess" title="Edit" href="/Catagory1/edit/{{$Catagory1->id }}">Edit</a>
 <a class="btn btn-xs btndanger" title="Delete" href="/Catagory1/delete/{{ $Catagory1->id }}">Delete</a>
 </td>
 </tr>
@endforeach
 </tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection