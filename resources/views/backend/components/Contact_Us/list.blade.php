@extends('backend.layout.app')
@section('content')
    <div class="container">
        <div class="container">
            <div class="container">
                <br>
                <h4 class="text-success text-center">User Feedback</h4><br>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">serial</th>
                            <th scope="col"> Name</th>
                            <th scope="col">Email</th>
                            <th scope="col"> Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $serial = 1;
                        @endphp
                        @foreach ($feedback as $item)
                            <tr>
                                <th scope="row">{{ $serial++ }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    <a href="{{ route('contact.view', $item->id) }}"><x-backend.svg.eye-icon /></i> </a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
