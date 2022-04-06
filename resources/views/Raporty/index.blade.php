@extends('layouts.app')

@section('content')

<!-- Portfolio Section-->
<section class="masthead page-section portfolio" id="portfolio">
<div class="container">
@if(session()->has('message'))
<div class="alert alert-warning alert-dismissible fade show">
{{session()->get('message')}}
<button type="button" class="close" data-dimiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif 
<!-- Portfolio Section Heading-->
<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Lista Raportów</h2>
  <!-- Icon Divider-->
  <div class="divider-custom">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
      <div class="divider-custom-line"></div>
  </div>
  <table style="margin:auto; justify-content:center;" class="table table-hover table-dark tabelka">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nazwa</th>
      <th scope="col">Zakres</th>
      <th scope="col">Akcje</th>
    </tr>
  </thead>
  <tbody> 
@foreach($lista as $list)
<tr>
  <th scope="row">{{ $list->id}}</th>
  <th scope="row">{{ $list->nazwa}}</th>
  <th scope="row">{{ $list->zakres}}</th>
  <td><form method="get" action="{{route('raporty.show', ['id' => $list->id])}}"> <!-- po raporty.show ...  -->
    <button type="submit" class="btn btn-primary">Wyświetl</td>
  </form>
</tr>
  @endforeach
</tbody>
</table>
<div>
<br>
<br>
</div>
  <!-- Portfolio Section Heading-->
  <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Raporty</h2>
  <!-- Icon Divider-->
  <div class="divider-custom">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
      <div class="divider-custom-line"></div>
  </div>
  <table style="margin:auto; justify-content:center;" class="table table-hover table-dark tabelka">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Report_ID</th>
      <th scope="col">Call_time</th>
      <th scope="col">Caller_ID</th>
      <th scope="col">Destination</th>
      <th scope="col">Status</th>
      <th scope="col">Ringing</th>
      <th scope="col">Talking</th>
      <th scope="col">Totals</th>
      <th scope="col">Cost</th>
      <th scope="col">Reason</th>
      <th scope="col">Play</th>
      <th scope="col">Active</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($raport as $raporty)
<tr>
<th scope="row">{{ $raporty->id}}</th>
<td>{{ $raporty->report_id}}</td>
<td>{{ $raporty->call_time}}</td>
<td>{{ $raporty->caller_id}}</td>
<td>{{ $raporty->destination}}</td>
<td>{{ $raporty->status}}</td>
<td>{{ $raporty->ringing}}</td>
<td>{{ $raporty->talking}}</td>
<td>{{ $raporty->totals}}</td>
<td>{{ $raporty->cost}}</td>
<td>{{ $raporty->reason}}</td>
<td>{{ $raporty->play}}</td>
<td>{{ $raporty->active}}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</section>
      
@endsection