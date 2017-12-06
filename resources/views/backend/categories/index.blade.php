@extends('master')

@section('title', 'View All Categories')

@section('content')
<div class="container col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> List of all categories </h2>
        </div>

        @include('shared.success')

        @if ($categories->isEmpty())
            <p> There is no category.</p>
        @else
            <table class="table">
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{!! $category->name !!}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
@endsection