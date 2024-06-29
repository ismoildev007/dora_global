<x-layouts.admin>
    <main class="main-content">

        <div class="contents">

            <div class="container-fluid">
                <!-- Breadcrumb and header -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex align-items-center user-member__title mb-30 mt-30">
                            <h4 class="text-capitalize">Brend List</h4>
                        </div>
                    </div>
                </div>

                <!-- Add New Brend Button -->
                <div class="row">
                    <div class="col-lg-12 mb-30">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('brend.create') }}" class="btn btn-primary px-20">
                                <i class="las la-plus fs-16"></i>Add New
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Brend List Table -->
                <div class="row">
                    <div class="col-lg-12 mb-30">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-borderless">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($brends as $brend)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $brend->title }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/' . $brend->image) }}" alt="{{ $brend->title }}" style="max-width: 100px;">
                                                </td>
                                                <td>
                                                    <a href="{{ route('brend.edit', $brend->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                                    <form action="{{ route('brend.destroy', $brend->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </main>
</x-layouts.admin>
