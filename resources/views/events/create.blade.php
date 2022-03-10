@extends('layouts.main')

@section('title', 'Criar evento')

@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie seu evento</h1>
        
        <form action="{{route('events.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Imagem do Evento:</label>
                <input type="file" id="image" name="image" class="form-control-file">
            </div>
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
            </div>
            <div class="form-group">
                <label for="date">Data do evento:</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="form-group">
                <label for="description">Descrição:</label>
                <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
            </div>
            <div class="form-group">
                <label for="city">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Cidade do evento">
            </div>
            <div class="form-group">
                <label for="private">Evento privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="items">Adicione itens de infraestrutura:</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="items" value="Cadeira">Cadeiras
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="items" value="Palco">Palco
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="items" value="Cerveja Grátis">Cerveja Grátis
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="items" value="Open Food">Open Food
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="items" value="Brindes">Brindes
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Criar Evento">
        </form>
    </div>
@endsection 