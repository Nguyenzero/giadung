@extends('admin.main')



@section('content')

<table class="table">
<thead>
        <th>ID</th>
        <th>Name</th>
        <th>Active</th>
        <th>Update</th>
        <th>diwdwd</th>
</thead>

<tbody>
    {!! \App\Helpers\Helper::menus($menus) !!}
</tbody>

</table>
@endsection


