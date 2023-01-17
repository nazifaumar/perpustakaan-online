
@extends('dashboard.dashboard')
@section('content')
<div class="container content">      
    <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Number Phone</th>
      </tr>
    </thead>
    <?php $i =1; ?>
    @foreach($user as $item)
    <tbody>
      <tr>
        <th scope="row">{{$i++}}</th>
        <td class="data-title">{{$item->name}} </td>
        <td class="data-title">{{$item->email}}</td>
        <td class="data-title">{{$item->address}} </td>
        <td class="data-title">{{$item->tlp}} </td>
@endforeach 
      </tr>
    </tbody>
  </table> 
</div>
@endsection
    