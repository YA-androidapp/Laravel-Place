@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>

    <hr />

    @include('map.map', ['items'=>$user->places])

    Items which you made:
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>{{ __('ID') }}</th>
                    <th>{{ __('Description') }}</th>
                    <th>{{ __('Owner') }}</th>
                    <th>{{ __('Latitude') }}</th>
                    <th>{{ __('Longitude') }}</th>
                    <th>{{ __('Created') }}</th>
                    <th>{{ __('Updated') }}</th>
                    <th>{{ __('User') }}</th>
                    <th>{{ __('Edit') }}</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($user->places as $item)
                <tr>
                    <td>
                        <a href="{{ url('place/'.$item->id) }}">{{ $item->id }}</a>
                    </td>
                    <td>{{ $item->desc }}</td>
                    <td>{{ $item->owner }}</td>
                    <td>{{ $item->lat }}</td>
                    <td>{{ $item->lng }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                    <td>{{ $item->getUserName() }}</td>
                    <td>
                        <a href="{{ url('place/'.$item->id.'/edit') }}">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
