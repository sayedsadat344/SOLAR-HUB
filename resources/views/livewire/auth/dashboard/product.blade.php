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
                            <p class="text-muted font-13 m-b-30">
                                DataTables has most features enabled by default, so all you need to do to use it with
                                your own tables is to call the construction function: <code>$().DataTable();</code>
                            </p>


                            @dump($products)
                            {{-- @dump($list[1]) --}}

                            @if (count((array) $products) > 0)
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product Name</th>
                                            <th>Supplier</th>
                                            <th>Category</th>
                                            <th>Quantity</th>
                                            <th>Unit Price</th>
                                            <th>Discription</th>
                                        </tr>
                                    </thead>


                                    <tbody>


                                        @foreach ($products as $product)

                                        <tr>
                                            <td>{{ $loop->index }}</td>
                                            <td>{{ $product->name}}</td>
                                            <td>{{ $product->supplier->name}}</td>
                                            <td>{{$product->category->name}}</td>
                                            <td>{{$product->stock_quantity}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>{{$product->description}}</td>

                                        </tr>

                                        @endforeach


                                    </tbody>
                                </table>
                            @else
                                <div class="text-center">
                                    <div class="alert alert-info alert-dismissible " role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                        </button>
                                        <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
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
