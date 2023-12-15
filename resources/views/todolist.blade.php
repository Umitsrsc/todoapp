@extends('layouts.app')
@section('content')
<div class="container">
  <h2>Yapılacaklar Listesi</h2>            
  <table class="table table-hover table table-striped">
    <thead>
      <tr>
        <th>Görev</th>
        <th>Açıklama</th>
        <th>Durum</th>
      </tr>
    </thead>
    <tbody>
        @foreach($todos as $todo)
        <tr>
            <td>{{$todo->gorev}}</td>
            <td>{{$todo->aciklama}}</td>
            <td>{{$todo->status? 'tamamlandı':'tamalanmadı'}}</td>
      </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection
