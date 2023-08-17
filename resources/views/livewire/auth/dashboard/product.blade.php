<div class="col-md-12 col-sm-12 ">

    <div class="x_panel">
        <div class="x_title">
            <h2>Products</h2>

            <div class="text-right">
                <a href="/products/add" wire:navigate class="btn btn-outline-info btn-raised btn-sm"> <i class="fa fa-plus"></i> ADD PRODUCT</a>

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




                            @if (count($products) > 0)
                                <table id="datatable" class="table table-striped text-center" style="width:100% text-align:center;">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Supplier</th>
                                            <th>Category</th>
                                            <th>Quantity</th>
                                            <th>Unit Price</th>
                                            <th>Discription</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>


                                    <tbody>


                                        @foreach ($products as $product)

                                        <tr>
                                            <td class="text-center">{{ $loop->index + 1 }}</td>
                                            <td class="text-center"> <img src="{{asset('auth/assets/images/user.png')}}" class="img img-circle img-thumbnail" alt="Avatar" width="50px" height="50px"></td>

                                            <td class="text-center">{{ $product->name}}</td>
                                            <td class="text-center">{{ $product->supplier->name}}</td>
                                            <td class="text-center">{{$product->category->name}}</td>
                                            <td class="text-center">{{$product->stock_quantity}}</td>
                                            <td class="text-center">{{$product->price}}</td>
                                            <td class="text-center">{{$product->description}}</td>
                                            <td class="text-center">
                                                {{-- <button type="button" class="btn btn-round btn-primary btn-sm mx-1" title="Edit Category" wire:click="$dispatch('product-edit', {id:{{$product->id}} })"
                                                  data-toggle="modal"
                                                  data-target="#addEditCategory"><i class="fa fa-edit"></i> </button> --}}
                                                <button type="button" class="btn btn-round btn-danger btn-sm mx-1" title="Delete Category" wire:click="deleteProduct({{$product->id}}})"><i class="fa fa-trash"></i> </button>
                                                {{-- <button wire:click="$dispatch('confirmDelete',{{ $cat->id }},'category-deleted')">...</button> --}}
                                              </td>

                                        </tr>

                                        @endforeach


                                    </tbody>
                                </table>
                            @else
                                <div class="text-center">
                                    <div class="alert alert-info alert-dismissible " role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                        </button>
                                        <strong>NO PRODUCTS!</strong>
                                      </div>
                                </div>
                            @endif


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
