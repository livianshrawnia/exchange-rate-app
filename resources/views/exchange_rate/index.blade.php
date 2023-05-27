@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Exchange Rate App</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="/rate" method="POST">
            @csrf
            <div class="mb-3">
                <label for="from_currency" class="form-label">From Currency</label>
                <select class="form-control" id="from_currency" name="from_currency">
                    @foreach ($currencies as $name => $code)
                        <option value="{{ $code }}">{{ $name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="to_currency" class="form-label">To Currency</label>
                <select class="form-control" id="to_currency" name="to_currency">
                    @foreach ($currencies as $name => $code)
                        <option value="{{ $code }}">{{ $name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Fetch Exchange Rate</button>
        </form>

        <h3 class="mt-4">Exchange Rate:</h3>
        <div class="alert alert-info">
            @if ($exchangeRate)
                <p>1 {{ $exchangeRate->from_currency }} = {{ $exchangeRate->rate }} {{ $exchangeRate->to_currency }}</p>
                <p>Last Updated: {{ $exchangeRate->timestamp }}</p>
            @else
                <p>No exchange rate available.</p>
            @endif
        </div>

        <a href="/history" class="btn btn-secondary">View History</a>
    </div>
@endsection
