<div class="col-md-12 col-sm-12 ">

    <div class="x_panel">
        <div class="x_title">
            <h2>Add Products</h2>

            <div class="text-right">
                <a href="/products" wire:navigate class="btn btn-outline-info btn-raised btn-sm"> <i
                        class="fa fa-plus"></i> RETURN BACK</a>

            </div>

            <div class="clearfix"></div>
        </div>


        <div class="x_panel">
            <div class="x_title">



                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>

                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <form id="demo-form">

                    @csrf

                    <div class="row">
                        <div class="col-md-8 col-sm-12">

                            <div class="row">

                                <div class="col-12">

                                    <label for="product_name">Product Name <span class="text-danger">*</span>
                                        :</label>
                                    <input type="text" id="product_name"
                                        wire:model="productForm.name"class="form-control" name="product_name"
                                        required />
                                    @error('productForm.name')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror



                                </div>

                                <div class="col-12">
                                    <label for="supplier">Supplier <span class="text-danger">*</span>:</label>
                                    <select id="supplier" class="form-control" wire:model="productForm.supplier_id">
                                        <option value="">Select...</option>
                                        @foreach ($suppliers as $sup )
                                        <option value="{{$sup->id}}">{{$sup->name}}</option>

                                        @endforeach
                                    </select>

                                    @error('productForm.supplier_id')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="col-12">
                                    <label for="category_id">Category <span class="text-danger">*</span>:</label>
                                    <select id="category_id" class="form-control" wire:model="productForm.category_id">
                                        <option value="">Select...</option>

                                        @foreach ($categories as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>

                                        @endforeach


                                    </select>

                                    @error('productForm.category_id')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="price">Product Price <span class="text-danger">*</span>
                                        :</label>
                                    <input type="text" id="price"
                                        wire:model="productForm.price"class="form-control" name="price" required />
                                    @error('productForm.price')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="col-12">
                                    <label for="quantity">Product quantity <span class="text-danger">*</span>
                                        :</label>
                                    <input type="text" id="quantity"
                                        wire:model="productForm.stock_quantity"class="form-control" name="quantity"
                                        required />
                                    @error('productForm.stock_quantity')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="col-12">

                                        <label for="description">Description:</label>
                                        <textarea id="description"  wire:model="productForm.description" class="form-control" name="description" data-parsley-trigger="keyup"
                                            data-parsley-minlength="20" data-parsley-maxlength="100"
                                            data-parsley-minlength-description="Come on! You need to enter at least a 20 caracters long comment.."
                                            data-parsley-validation-threshold="10"></textarea>

                                        <br />
                                </div>









                            </div>

                        </div>
                        <div class="col-md-4 col-sm-12 profile_details">


                            <div class="col-12 p-0">
                                <label for="heard ">Product Image *:</label>
                            </div>

                            <div class="well profile_view">



                                <div class="row">
                                    <div class="col-md-12 mt-1">



                                        <div class="m-1">
                                            <input type="file" class="form-control" wire:model="productForm.image">

                                            @error('image')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-md-12 my-2">
                                        <div class="text-center">

                                            @if ($productForm->image)

                                            <img class="img-responsive img-thumbnail"
                                            src="{{ $productForm->image->temporaryUrl() }}" alt="Avatar"
                                            width="250px" height="250px">
                                            @else
                                            <img class="img-responsive img-thumbnail"
                                            src="{{ asset('auth/assets/images/picture.jpg') }}" alt="Avatar"
                                            width="250px" height="250px">
                                        @endif


                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class=" profile-bottom text-center">
                                            <div class=" col-sm-6 emphasis">
                                                <p class="ratings">
                                                    <a>4.0</a>
                                                    <a href="#"><span class="fa fa-star"></span></a>
                                                    <a href="#"><span class="fa fa-star"></span></a>
                                                    <a href="#"><span class="fa fa-star"></span></a>
                                                    <a href="#"><span class="fa fa-star"></span></a>
                                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                                </p>
                                            </div>
                                            <div class=" col-sm-6 emphasis">
                                                <button type="button" class="btn btn-success btn-sm"> <i
                                                        class="fa fa-user">
                                                    </i> <i class="fa fa-comments-o"></i> </button>
                                                <button type="button" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-user"> </i> View Profile
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>



                        </div>

                        <div class="col-12">
                            <span class="btn btn-primary" wire:click="saveProduct">Save Product</span>
                        </div>
                    </div>

                </form>






            </div>
        </div>

    </div>

</div>
