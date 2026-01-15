@extends('layouts.admin')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')

<style>

.btn-outline-green {
    color: #16a34a;
    border: 1px solid #16a34a;
    background-color: transparent;
}

.btn-outline-green:hover {
    color: #fff;
    background-color: #16a34a;
    border-color: #16a34a;
}

</style>

<div class="row g-3 mb-4">
    <div class="col-md-6">
        <div class="card p-3">
            <small class="text-muted">Total Programs</small>
            <h3 class="fw-semibold mb-0">{{ $totalPrograms }}</h3>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card p-3">
            <small class="text-muted">Total Users</small>
            <h3 class="fw-semibold mb-0">{{ $totalUsers }}</h3>
        </div>
    </div>
</div>


<!-- Recent Programs -->
<div class="card">
    <div class="card-header bg-transparent d-flex justify-content-between align-items-center">
        <span class="fw-medium">Recent Programs</span>
            <a href="{{ route('admin.programs') }}"
                class="text-decoration-none small" style="color:#16a34a;">
                    View all
            </a>
    </div>

    <div class="card-body p-0">
        @if($recentPrograms->count())
            <div class="table-responsive">
                <table class="table table-sm mb-0 align-middle">
                    <thead class="text-muted small">
                        <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Mode</th>
                            <th>Level</th>
                            <th class="text-end">Created</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recentPrograms as $program)
                        <tr>
                            <td class="fw-medium">{{ $program->name }}</td>
                            <td class="text-muted">{{ $program->category }}</td>
                            <td class="text-muted">{{ $program->mode }}</td>
                            <td class="text-muted">{{ $program->level }}</td>
                            <td class="text-end text-muted small">
                                {{ $program->created_at->format('d M Y') }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="text-center text-muted py-5">
                No programs available
            </div>
        @endif
    </div>
</div>


<!-- Quick Actions -->
<div class="row g-3 mt-4">
    <div class="col-md-6">
        <div class="card p-4 text-center">
            <p class="mb-2 fw-medium">Add New Program</p>
            <a href="{{ route('admin.programs.create') }}" class="btn btn-sm btn-outline-green">
                Create Program
            </a>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card p-4 text-center">
            <p class="mb-2 fw-medium">Manage Users</p>
            <a href="{{ route('admin.users') }}" class="btn btn-sm btn-outline-green">
                View Users
            </a>
        </div>
    </div>
</div>

@endsection