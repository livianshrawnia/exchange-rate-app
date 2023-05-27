@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Exchange Rate App - History</h1>

        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>From Currency</th>
                    <th>To Currency</th>
                    <th>Rate</th>
                    <th>Timestamp</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($history as $entry)
                    <tr>
                        <td>{{ $entry->from_currency }}</td>
                        <td>{{ $entry->to_currency }}</td>
                        <td>{{ $entry->rate }}</td>
                        <td>{{ $entry->timestamp }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $history->links() }}
    </div>
@endsection
