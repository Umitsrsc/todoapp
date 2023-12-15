@extends('layouts.app')
@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 my-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Görev Ekle</div>
                            <form action="/todolist" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="gorev">Görev</label>
                                    <input type="text" class="form-control" name="gorev" id="gorev">
                                </div>

                                <div class="form-group">
                                    <label for="aciklama">Açıklama</label>
                                    <textarea class="form-control" name="aciklama" id="aciklama" cols="10" rows="4"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary my-2">Ekle</button>
                            </form>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection