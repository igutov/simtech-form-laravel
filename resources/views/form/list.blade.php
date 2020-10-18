@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">{{ __('Список:') }}</div>

                    <div class="card-body">
                        <div class="list-group">
                            @forelse ($data as $item)
                                <a href="{{ route('form.edit', $item->id) }}"
                                    class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">{{ $item->text }}</h5>
                                        <small>Создано {{ $item->created_at }}</small>
                                    </div>
                                    <p class="mb-1">{{ $item->message }}</p>
                                    <p class="mb-1">{{ $item->select }}</p>
                                    <p class="mb-1">{{ $item->radio }}</p>
                                    <small>{{ $item->email }}</small>
                                </a>
                            @empty
                                <p>Тут пока ничего нет</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
