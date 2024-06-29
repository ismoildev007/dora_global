<x-layouts.admin>
    <main class="main-content">

        <div class="contents">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact-breadcrumb">

                            <div class="breadcrumb-main add-contact justify-content-sm-between">
                                <div class="d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                                    <div class="d-flex align-items-center add-contact__title justify-content-center me-sm-25">
                                        <h4 class="text-capitalize fw-500 breadcrumb-title">Blog List</h4>
                                    </div>
                                    <div class="action-btn mt-sm-0 mt-15">
                                        <a href="{{ route('blog.create') }}" class="btn px-20 btn-primary">
                                            <i class="las la-plus fs-16"></i>Add New
                                        </a>
                                    </div>
                                </div>
                                <div class="breadcrumb-main__wrapper">
                                    <form action="{{ route('blog.index') }}" method="GET" class="d-flex align-items-center add-contact__form my-sm-0 my-2">
                                        <img src="/admin/img/svg/search.svg" alt="search" class="svg">
                                        <input class="form-control me-sm-2 border-0 box-shadow-none" name="search" type="search" placeholder="Search by Title" aria-label="Search" value="{{ request()->query('search') }}">
                                        <button class="btn btn-primary px-4" type="submit">Search</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mb-30">
                        <div class="card">
                            <div class="card-header color-dark fw-500">
                                Blog List
                            </div>
                            <div class="card-body">
                                <div class="userDatatable global-shadow border-light-0 w-100">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-borderless">
                                            <thead>
                                            <tr class="userDatatable-header">
                                                <th>
                                                    <div class="d-flex align-items-center">
                                                        <div class="custom-checkbox check-all">
                                                            <input class="checkbox" type="checkbox" id="check-45">
                                                            <label for="check-45">
                                                                <span class="checkbox-text userDatatable-title">Image</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title">Title</span>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title">Description</span>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title">Date</span>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title">Operations</span>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($blogs as $blog)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                                <div class="checkbox-group-wrapper">
                                                                    <div class="checkbox-group d-flex">
                                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                            <input class="checkbox" type="checkbox" id="check-grp-{{ $blog->id }}">
                                                                            <label for="check-grp-{{ $blog->id }}"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('{{ asset('storage/' . $blog->image) }}'); background-size: cover;"></a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $blog->title }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $blog->description }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $blog->date }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <ul class="mb-0 d-flex flex-wrap align-items-center">
                                                            <li>
                                                                <a href="{{ route('blog.edit', $blog->id) }}" class="edit">
                                                                    <i class="uil uil-edit"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <form action="{{ route('blog.destroy', $blog->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete?')">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn">
                                                                        <i class="uil uil-trash-alt" style="color: #aa61d3"></i>
                                                                    </button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                {{ $blogs->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <footer class="footer-wrapper">
            <div class="footer-wrapper__inside">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-copyright">
                                <p><span>© 2023</span><a href="#">Software</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-menu text-end">
                                <ul>
                                    <li>
                                        <a href="#">About</a>
                                    </li>
                                    <li>
                                        <a href="#">Team</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>
</x-layouts.admin>
