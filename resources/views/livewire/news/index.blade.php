@section('title')
Data News - Belajar Livewire 3 di SantriKoding.com
@endsection

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">

            <!-- flash message -->
            @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
            <!-- end flash message -->

            <a href="/create" wire:navigate class="btn btn-md btn-success rounded shadow-sm border-0 mb-3">ADD NEW NEWS</a>
            <div class="card border-0 rounded shadow-sm">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Image</th>
                                <th scope="col">Date</th>
                                <th scope="col">Writer</th>
                                <th scope="col">Editor</th>
                                <th scope="col">Content</th>
                                <th scope="col" style="width: 15%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($news as $news)
                            <tr>
                                <td class="text-center">
                                    <img src="{{ asset('/storage/news/'.$news->image) }}" class="rounded" style="width: 150px">
                                </td>
                                <td>{{ $news->title }}</td>
                                <td>{!! $news->content !!}</td>
                                <td class="text-center">
                                    <a href="/edit/{{ $news->id }}" wire:navigate class="btn btn-sm btn-primary">EDIT</a>
                                    <button class="btn btn-sm btn-danger">DELETE</button>
                                </td>
                            </tr>
                            @empty
                            <div class="alert alert-danger">
                                Data News belum Tersedia.
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $news->links('vendor.pagination.bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
</div>