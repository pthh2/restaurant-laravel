@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="list-group">
                <a href="/management/category" class="list-group-item list-group-item-action"> <i class="fa-solid fa-list"></i> Category</a> 
                <a href="/management/menu" class="list-group-item list-group-item-action"> <i class="fa-solid fa-bowl-food"></i> Menu</a> 
                <a class="list-group-item list-group-item-action"> <i class="fa-solid fa-chair"></i> Table</a> 
                <a class="list-group-item list-group-item-action"> <i class="fa-solid fa-users"></i> User</a> 
            </div>
        </div>
        <div class="col-md-8"></div>
   </div>

</div>
@endsection