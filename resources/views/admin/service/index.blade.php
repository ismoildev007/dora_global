<x-layouts.admin>
    <main class="main-content">
        <div class="contents">
            <div class="container-fluid">
                <!-- Breadcrumb and header -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact-breadcrumb">

                            <div class="breadcrumb-main add-contact justify-content-sm-between">
                                <div class="d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                                    <div class="d-flex align-items-center add-contact__title justify-content-center me-sm-25">
                                        <h4 class="text-capitalize fw-500 breadcrumb-title">Service List</h4>
                                    </div>
                                    <div class="action-btn mt-sm-0 mt-15">
                                        <a href="{{ route('service.create') }}" class="btn px-20 btn-primary">
                                            <i class="las la-plus fs-16"></i>Add New
                                        </a>
                                    </div>
                                </div>
                                <div class="breadcrumb-main__wrapper">
                                    <form action="/" class="d-flex align-items-center add-contact__form my-sm-0 my-2">
                                        <img src="/admin/img/svg/search.svg" alt="search" class="svg">
                                        <input class="form-control me-sm-2 border-0 box-shadow-none" type="search" placeholder="Search by Name" aria-label="Search">
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Action buttons and search form -->
                <div class="row">
                    <div class="col-lg-12 mb-30">
                        <div class="card">
                            <div class="card-header color-dark fw-500">
                                Service List
                            </div>
                            <div class="card-body">
                                <!-- Table of services -->
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
                                                    <span class="userDatatable-title">Category</span>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title">Operations</span>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($services as $service)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                                <div class="checkbox-group-wrapper">
                                                                    <div class="checkbox-group d-flex">
                                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                            <input class="checkbox" type="checkbox" id="check-grp-{{ $service->id }}">
                                                                            <label for="check-grp-{{ $service->id }}"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('{{ asset('storage/' . $service->image) }}'); background-size: cover;"></a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $service->title }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $service->description }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $service->category->name }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <ul class="mb-0 d-flex flex-wrap align-items-center">
                                                            <li>
                                                                <a href="{{ route('service.show', $service->id) }}" class="view" style="margin-right: 25px;">
                                                                    <i class="uil uil-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('service.edit', $service->id) }}" class="edit">
                                                                    <i class="uil uil-edit"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <form action="{{ route('service.destroy', $service->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete?')">
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

                                <!-- Pagination -->
                                {{ $services->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layouts.admin>
