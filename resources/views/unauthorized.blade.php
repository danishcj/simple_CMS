@extends('layouts.appnomenu')

@section('content')
<div class=”title m-b-md”>
You cannot access this page! This is for only {{$role}}    <a href="{{ URL::previous() }}" class="btn btn-outline-secondary">Go Back</a
</div>
@endsection