@extends('layouts.admin')

@section('content')

<div class="col-12">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Responsive Table</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Rols</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        @if ($item->is_role == 1)
                           <td>{{ 'admin' }}</td>
                           @else
                           <td>{{ 'error' }}</td>
                        @endif
                        <td>
                            <button class="btn btn-sm btn-primary" id="click" data-id="{{ $item->id }}" data-type="user">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


<div style="padding-bottom: 400px"></div>
@endsection