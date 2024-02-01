@extends('layouts.master')
@section('content')
    <div class="content-wrapper" style="min-height: 1302.4px;">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-sm-right">
                            <a href="" class="btn btn-info">
                                <i class="fas fa-plus"></i> Nouveau filier
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="card">
                            <div class="card-header col-md-12">
                                <div class="d-flex justify-content-between">
                                    <div class="btn-group mr-3">
                                        {{-- <button {{ $filier->nom }}
                                        </button>on type="button" class="btn btn-default dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa-solid fa-filter text-dark pr-2 border-right"></i>
                                            <input type="hidden" name="filierId" id="filierId"
                                                value="{{ $filier->id }}"> --}}
                                           
                                        <div class="dropdown-menu">
                                            {{-- @foreach ($filiers as $filier)
                                                <a class="dropdown-item"
                                                    href="{{ route('filiers.tasks', ['projetId' => $filier->id]) }}">{{ $filier->nom }}</a>
                                            @endforeach --}}
                                        </div>
                                    </div>


                                    <div class=" p-0">
                                        <div class="input-group input-group-sm">
                                            <input type="text" name="search-input" id="search-input" class="form-control"
                                                placeholder="Recherche">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body table-responsive p-0">
                                @include('filier.table')
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- get modal delete tasks --}}
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script>
        $(document).ready(function() {
            function fetchData(page, searchValue, projetId) {
                // Choose either requestUrl or requestUr2
                var requestUrl = "{{ url('filiers') }}/tasks/" + projetId + "?page=" + page + "&searchValue=" +
                    searchValue;

                console.log("Request URL:", requestUrl);

                $.ajax({
                    url: requestUrl,
                    success: function(data) {

                        if (data == 'false') {
                            // No results found, display a message
                            $('tbody').html(
                                '<tr> <td colspan = "3" class = "text-center" > Aucune tâche trouvée. < /td> </tr>'
                                );
                        } else {
                            $('tbody').html('');
                            $('tbody').html(data);
                        }

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error("AJAX Error:", textStatus, errorThrown);
                    }
                });
            }

            $('body').on('click', '.pagination a', function(event) {
                event.preventDefault();

                var page = $(this).attr('href').split('page=')[1];
                var searchValue = $('#search-input').val();
                var filierId = $('#filierId').val();

                fetchData(page, searchValue, 1);
            });

            $('body').on('keyup', '#search-input', function() {

                var page = 1;
                var searchValue = $('#search-input').val();
                var filierId = $('#filierId').val();

                console.log(searchValue);
                fetchData(page, searchValue, 1);
            });
        });
    </script> --}}


    {{-- <script>
        function deleteTask(taskId) {
            document.getElementById('deleteForm').action = "{{ route('tasks.destroy', ':taskId') }}".replace(':taskId',
                taskId);
        }
    </script> --}}
@endsection