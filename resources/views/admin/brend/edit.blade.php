<x-layouts.admin>
    <main class="main-content">

        <div class="contents">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex align-items-center user-member__title mb-30 mt-30">
                            <h4 class="text-capitalize">Edit Brend</h4>
                        </div>
                    </div>
                </div>

                <!-- Form for editing a Brend -->
                <div class="card mb-50">
                    <div class="row justify-content-center">
                        <div class="col-md-5 col-10">
                            <div class="mt-40 mb-50">
                                <form action="{{ route('brend.update', $brend->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group mb-25">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" value="{{ $brend->title }}" required>
                                    </div>
                                    <div class="form-group mb-25">
                                        <label for="image">Image</label>
                                        <input type="file" class="form-control" id="image" name="image">
                                        <img src="{{ asset('storage/' . $brend->image) }}" alt="{{ $brend->title }}" style="max-width: 100px; margin-top: 10px;">
                                    </div>
                                    <div class="button-group d-flex pt-25 justify-content-md-end justify-content-start">
                                        <button type="submit" class="btn btn-primary btn-default btn-squared text-capitalize radius-md shadow2 btn-sm">Update</button>
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
