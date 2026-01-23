@extends('layouts.admin')

@section('title', 'Programs')
@section('page-title', 'Programs')

@section('content')
<div class="card border-0 shadow-sm">
    <div class="card-body">

        {{-- Header --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h6 class="mb-0 fw-semibold">Programs</h6>
                <small class="text-muted">Manage all learning programs</small>
            </div>
            <a href="{{ route('admin.programs.create') }}" class="btn btn-primary btn-sm px-3">
                +
            </a>
</div>

        @if($programs->count())
            <div class="table-responsive">
                <table class="table align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="text-muted fw-normal">No</th>
                            <th class="text-muted fw-normal">Program</th>
                            <th class="text-muted fw-normal">Category</th>
                            <th class="text-muted fw-normal">Mode</th>
                            <th class="text-muted fw-normal">Level</th>
                            <th class="text-muted fw-normal">Created</th>
                            <th class="text-end text-muted fw-normal">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($programs as $index => $program)
                        <tr>
                            <td class="text-muted">
                                {{ $loop->iteration }}
                            </td>

                            <td>
                                <div class="fw-medium">{{ $program->name }}</div>
                                <small class="text-muted">{{ $program->duration }}</small>
                            </td>

                            <td>
                                <small class="text-muted">{{ $program->category }}</small>
                            </td>

                            <td>
                                <small class="text-muted">{{ $program->mode }}</small>
                            </td>

                            <td>
                                <small class="text-muted">{{ $program->level }}</small>
                            </td>

                            <td>
                                <small class="text-muted">
                                    {{ $program->created_at->format('d M Y') }}
                                </small>
                            </td>

                            <td class="text-end">
    <a href="{{ route('admin.programs.edit', $program) }}"
       class="text-primary text-decoration-none me-3"
       title="Edit">
        <i class="bi bi-pencil"></i>
    </a>

    <form action="{{ route('admin.programs.destroy', $program) }}"
          method="POST"
          class="d-inline"
          onsubmit="return confirm('Delete this program?')">
        @csrf
        @method('DELETE')
        <button type="submit"
                class="btn p-0 text-danger"
                title="Delete">
            <i class="bi bi-trash"></i>
        </button>
    </form>
</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        @else
            {{-- Empty State --}}
            <div class="text-center py-5">
                <i class="bi bi-folder text-muted fs-1"></i>
                <p class="mt-3 text-muted">No programs available</p>
                <a href="{{ route('admin.programs.create') }}" class="btn btn-primary btn-sm">
                    Add your first program
                </a>
            </div>
        @endif

    </div>
</div>
@endsection
