<div class="col-md-12 col-sm-12 ">

    {{-- <div class="row">
        <div class="col-md-2">
            @if (session()->has('message'))
            <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 1000)" x-show="show" class="alert alert-success">
                <p class="m-0">{{ session('message') }}</p>
            </div>
        @endif
        </div>
    </div> --}}





    {{-- <div>
        @livewire('auth.dashboard.shared.notification-sweet-alert')
    </div> --}}



    <div class="x_panel">
        <div class="x_title">
            <h2>Categories</h2>

            <div class="text-right">

                <button type="button" class="btn btn-outline-info btn-raised btn-sm" data-toggle="modal"
                    data-target="#addEditCategory"> <i class="fa fa-plus"></i> ADD CATEGORY</button>

            </div>

            <div class="clearfix"></div>
        </div>


        <div class="x_panel">
            <div class="x_title">
                <h2>List</h2>





                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">



                            @if (count($categories) > 0)
                                <table id="datatable" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category Name</th>
                                            <th>Category Description</th>
                                            <th>Last Updated</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>


                                    <tbody>


                                        @foreach ($categories as $cat)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $cat->name }}</td>
                                                <td>{{ $cat->description }}</td>
                                                <td>{{ $cat->updated_at->format('D, M j, Y') }}</td>
                                                <td>
                                                  <button type="button" class="btn btn-round btn-primary btn-sm mx-1" title="Edit Category" wire:click="$dispatch('category-edit', {id:{{$cat->id}} })"
                                                    data-toggle="modal"
                                                    data-target="#addEditCategory"><i class="fa fa-edit"></i> </button>
                                                  <button type="button" class="btn btn-round btn-danger btn-sm mx-1" title="Delete Category" wire:click="$dispatch('confirmDelete', { targetEvent: 'category-deleted',id:{{$cat->id}} })"><i class="fa fa-trash"></i> </button>
                                                  {{-- <button wire:click="$dispatch('confirmDelete',{{ $cat->id }},'category-deleted')">...</button> --}}
                                                </td>

                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            @else
                                <div class="text-center">
                                    <div class="alert alert-info alert-dismissible " role="alert">
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-label="Close"><span aria-hidden="true">×</span>
                                        </button>
                                        <strong>NO CATEGORY!</strong> .
                                    </div>
                                </div>
                            @endif

                            {{ $categories->links() }}

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button> --}}

    <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="addEditCategory" wire:ignore.self>
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel2">Add Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">


                    <form id="demo-form">

                        @csrf
                        <div class="row">

                            <div class="col-12">

                                <label for="name">Category Name <span class="text-danger">*</span>
                                    :</label>
                                <input type="text" id="name" wire:model="name"class="form-control"
                                    name="name" />
                                @error('name')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror



                            </div>

                            <div class="col-12">

                                <label for="description">Category Description
                                    :</label>
                                <input type="text" id="description" wire:model="description"class="form-control"
                                    name="description" required />



                            </div>

                            <div class="col-12 mt-2">
                                <hr>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="resetInputFields">Close</button>
                                <span class="btn btn-primary" wire:click="submit">{{ $operationType == 'add'?'Save':'Update' }}</span>
                            </div>








                        </div>

                    </form>

                </div>
                {{-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" wire:click="saveCategory">Save changes</button>
          </div> --}}

            </div>
        </div>
    </div>

</div>
