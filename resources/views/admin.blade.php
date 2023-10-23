@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Админпанель</div>
                    <div class="card-body">
                        <h2>Категории</h2>
                        <form action="{{ route('addCategory') }}" method="post" class="row g-3">
                            @csrf
                            <div class="col-12">
                                <label for="name_category" class="form-label">Названиекатегории</label>
                                <input type="text" class="form-control" id="name_category" name="name_category" required>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Добавить</button>
                            </div>
                        </form>
                        <br>
                        <form action="{{ route('delCategory') }}" method="post" class="row g-3">
                            @csrf
                            @method('DELETE')
                            <div class="col-md-4">
                                <label for="id_category" class="form-label">Выберитекатегорию</label>
                                <select id="id_category" class="form-select" name="id_category" required>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id_category }}">{{ $category->name_category }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </div>
                        </form>

                        <div>{{ session('msgForCategory') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
