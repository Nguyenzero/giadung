@extends('admin.main')



@section('content')

<table class="table">
<thead>
        <th style=" width:50px">ID</th>
        <th>Name</th>
        <th>Active</th>
        <th>Update</th>
        <th>&nbsp;</th>
</thead>

<tbody>
    {!! \App\Helpers\Helper::menus($menus) !!}
</tbody>

</table>
@endsection


