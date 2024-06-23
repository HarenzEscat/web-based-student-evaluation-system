@extends('layout.app')

@section('styles')
    <style>
        body {
            background-color: #e91e63;
            color: #fff;
        }
        .container {
            background-color: #d81b60;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-control {
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }
        .list-group-item {
            background-color: rgba(0, 0, 0, 0.2);
            border: none;
        }
    </style>
@endsection

@section('content')
@csrf
<div class="container mt-5">
    <h1 class="text-center text-white">List of Teachers</h1>
    @auth
    <div class="search-box my-3">
        <select id="teacher-select" class="form-control">
            <option value="">Search Teacher (by name)</option>
            @foreach ($teachers as $teacher)
                <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
            @endforeach
        </select>
    </div>
    @endauth
    <ul class="list-group">
        @forelse ($teachers as $teacher)
        <li class="list-group-item d-flex justify-content-between align-items-center text-white mb-2">
            <span>{{ $teacher->name }}</span>
            @auth
            <button class="btn btn-primary evaluate-btn" data-teacher-id="{{ $teacher->id }}">Evaluate</button>
            @endauth
        </li>
        @empty
        <li class="list-group-item text-white">No teachers found.</li>
        @endforelse
    </ul>
</div>

<!-- Modal for Evaluation -->
<div class="modal fade" id="evaluationModal" tabindex="-1" role="dialog" aria-labelledby="evaluationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="evaluationModalLabel">Evaluate Teacher</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="evaluationForm">
                    <input type="hidden" id="teacherId" name="teacherId">
                    <div class="form-group">
                        <label for="evaluationScore">Score</label>
                        <input type="number" class="form-control" id="evaluationScore" name="score" min="1" max="10" required>
                    </div>
                    <div class="form-group">
                        <label for="evaluationComment">Comment</label>
                        <textarea class="form-control" id="evaluationComment" name="comment" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Evaluation</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.evaluate-btn').click(function() {
                var teacherId = $(this).data('teacher-id');
                $('#teacherId').val(teacherId);
                $('#evaluationModal').modal('show');
            });

            $('#evaluationForm').submit(function(event) {
                event.preventDefault();
                // You can add AJAX call here to submit evaluation data
                $('#evaluationModal').modal('hide');
                // Optionally, you can update UI to reflect evaluation submission
            });
        });
    </script>
@endsection
