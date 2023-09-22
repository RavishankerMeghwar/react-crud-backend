@extends('admin.layout.master')

@section('css')
@endsection

@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div>
            <h2 class="main-content-title tx-24 mg-b-5">Insurance</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Insurance</li>
            </ol>
        </div>

        <div>
            {{--  <button class="btn btn-white btn-rounded">
					<i class="fe fe-download"></i> Import
			</button>  --}}
            {{-- <button class="btn btn-primary btn-with-icon btn-rounded btnGeneralLabel" data-bs-target="#neworder" --}}
            {{-- data-bs-toggle="modal"><i class="fe fe-plus"></i> New Supplier</button> --}}
        </div>
    </div>
    <!-- End Page Header -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered border-bottom" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-20p">Title</th>
                                    <th class="wd-25p">Insurance Type</th>
                                    <th class="wd-20p">Insurance Icon</th>
                                    {{-- <th class="wd-15p">Age</th> --}}
                                    {{-- <th class="wd-20p">Salary</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($insurances as $insurance)
                                    <tr>
                                        <td>{{$insurance->title}}</td>
                                        <td>{{$insurance->type}}</td>
                                        <td>Icon</td>
                                    </tr>
                                @empty
                                    <tr class="background-body-color">
                                        <td class="text-center" colspan="11">
                                            No Data Available
                                        </td>
                                    </tr>
                                @endforelse
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
@endsection

@section('js')
    {{-- <script>
        $(document).ready(function() {
            // Initialize DataTable
            var dataTable = $('#orders').DataTable();

            // Event listener for tab links
            $('.nav.panel-tabs li a').on('click', function(e) {
                e.preventDefault();

                // Remove active class from all tab links
                $('.nav.panel-tabs li a').removeClass('active');

                // Add active class to the clicked tab link
                $(this).addClass('active');

                // Get the filter value from the clicked tab
                var filterValue = $(this).text();

                // Check if the "All Orders" tab is clicked
                if (filterValue === 'All Orders') {
                    dataTable.search('').columns().search('').draw();
                } else {
                    // Apply the filter to the "Status" column
                    dataTable.column(8).search(filterValue).draw();
                }
            });

            // Delete row button click event
            $(document).on('click', '.delete-row', function() {
                var deleteBtn = $(this);
                var confirmation = confirm('Are you sure you want to delete this row?');

                if (confirmation) {
                    deleteBtn.closest('tr').remove();
                }
            });

        });
    </script> --}}
@endsection
