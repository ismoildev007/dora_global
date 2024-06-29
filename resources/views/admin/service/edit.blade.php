<x-layouts.admin>
    <main class="main-content">
        <div class="contents">
            <div class="container-fluid">
                <!-- Breadcrumb and header -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex align-items-center user-member__title mb-30 mt-30">
                            <h4 class="text-capitalize">Edit Service</h4>
                        </div>
                    </div>
                </div>

                <!-- Form for editing a service -->
                <div class="card mb-50">
                    <div class="row justify-content-center">
                        <div class="col-md-5 col-10">
                            <div class="mt-40 mb-50">
                                <form action="{{ route('service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group mb-25">
                                        <label for="category_id">Category</label>
                                        <select name="category_id" class="form-control" id="category_id">
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" @if($category->id == $service->category_id) selected @endif>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div                                    <div class="form-group mb-25">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" value="{{ $service->title }}" required>
                                    </div>
                                    <div class="form-group mb-25">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" id="description" name="description">{{ $service->description }}</textarea>
                                    </div>
                                    <div class="form-group mb-25">
                                        <label for="image">Current Image</label>
                                        <img src="{{ asset('storage/' . $service->image) }}" alt="Current Image" style="max-width: 200px; height: auto;">
                                        <input type="file" class="form-control mt-2" id="image" name="image">
                                    </div>
                                    <div class="button-group d-flex pt-25 justify-content-md-end justify-content-start">
                                        <button class="btn btn-primary btn-default btn-squared text-capitalize radius-md shadow2 btn-sm">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layouts.admin>
