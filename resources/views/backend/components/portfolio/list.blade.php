@extends('backend.layout.app')
@section('content')
    <div class="container">
        <br><a href="{{ route('portfolio.create') }}" class="btn btn-info">Create Portfolio</a>
        <h4 class="text-success text-center">Portfolio List</h4><br>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Serial</th>
                            <th scope="col">Type</th>
                            <th scope="col">Title</th>
                            <th scope="col">Thumbnail</th>
                            <th scope="col">Images</th>
                            <th scope="col">Location</th>
                            <th scope="col">Scope</th>
                            <th scope="col">Completion Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $serial = 1;
                        @endphp
                        @foreach ($portfolios as $portfolio)
                            <tr>
                                <th scope="row">{{ $serial++ }}</th>
                                <td>{{ $portfolio->type_name_id }}</td>
                                <td>{{ $portfolio->title }}</td>
                                <td>
                                    <img src="{{ asset($portfolio->thumbnail) }}" alt="Thumbnail"
                                        width="50">
                                </td>
                                <td>
                                    @php
                                        $images = json_decode($portfolio->images, true);
                                    @endphp
                                    @if (is_array($images))
                                        @foreach ($images as $image)
                                            <img src="{{ asset($image) }}" alt="Image" width="50">
                                        @endforeach
                                    @endif
                                </td>
                                <td>{{ $portfolio->location }}</td>
                                <td>{{ $portfolio->scope }}</td>
                                <td>{{ $portfolio->complete_date }}</td>
                                <td>{{ $portfolio->status ? 'Active' : 'Inactive' }}</td>
                                <td>
                                    {{-- <a href="{{ route('portfolio.view', $portfolio->id) }}"><x-backend.svg.eye_icon /></a> --}}
                                    <a href="{{ route('portfolio.edit', $portfolio->id) }}"
                                        class="btn btn-info"><x-backend.svg.edit_icon /></a>

                                    <a href="javascript:void(0);"
                                        onclick="confirmDelete('{{ route('portfolio.delete', $portfolio->id) }}')"
                                        class="btn btn-danger"><x-backend.svg.delete_icon /></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $portfolios->links() }}
            </div>
        </div>

    </div>

@endsection

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function confirmDelete(url) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = url; // Redirect to the delete route
        }
    });
}

</script>



