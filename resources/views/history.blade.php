@extends('layouts.default-page', ['name' => 'Geschiedenis'])

@section('content')
    <div class="flex flex-col">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <messages-table></messages-table>
        </div>
    </div>
@endsection