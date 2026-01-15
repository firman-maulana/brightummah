@extends('layouts.admin')

@section('title', 'Users')
@section('page-title', 'Users')

@section('content')
<div class="card border-0 shadow-sm">
    <div class="card-header bg-white d-flex justify-content-between align-items-center">
        <h6 class="mb-0 fw-semibold">Registered Users</h6>
        <span class="text-muted small">{{ $users->total() }} users</span>
    </div>

    <div class="card-body p-0">
        @if($users->count())
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th width="50">#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th width="130">Registered</th>
                            <th width="90">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $index => $user)
                        <tr>
                            <td class="text-muted">
                                {{ $users->firstItem() + $index }}
                            </td>
                            <td class="fw-medium">
                                {{ $user->name }}
                            </td>
                            <td class="text-muted small">
                                {{ $user->email }}
                            </td>
                            <td class="text-muted small">
                                {{ $user->created_at->format('d M Y') }}
                            </td>
                            <td>
                                <span class="badge bg-success-subtle text-success">
                                    Active
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="p-3 border-top">
                {{ $users->links() }}
            </div>
        @else
            <div class="text-center py-5 text-muted">
                <i class="bi bi-people fs-3"></i>
                <p class="mt-2 mb-0">No users found</p>
            </div>
        @endif
    </div>
</div>
@endsection
