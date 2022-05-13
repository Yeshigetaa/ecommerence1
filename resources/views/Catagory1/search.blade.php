@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('Catagory1 Detail') }}
 </div>
 <div class="card-body">
 id : {{ $Catagory1->id }}
 <br>
 <br>
 Catagory1 : {{ $Catagory1->name }}
 <br>
 </div>
 </div>
 </div>
 </div>
</div>
<div class="container ">
 <div class="col-md-8">
 <a class="btn btnsuccess" href="{{ route('Catagory1/list') }}" role="button"> {{ __('Back') }}</a>
 </div>
</div>
@endsection