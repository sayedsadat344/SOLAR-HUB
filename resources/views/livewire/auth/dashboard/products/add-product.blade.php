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

                        <div class="col-12">

                            <label for="product_name">Product Name <span class="text-danger">*</span>
                                :</label>
                            <input type="text" id="product_name" wire:model="productForm.name"class="form-control"
                                name="product_name" required />
                            @error('productForm.name')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror



                        </div>

                        <div class="col-12">
                            <label for="supplier">Supplier <span class="text-danger">*</span>:</label>
                            <select id="supplier" class="form-control" wire:model="productForm.supplier_id">
                                <option value="">Select...</option>
                                <option value="1">Press</option>
                                <option value="2">Internet</option>
                                <option value="3">Word of mouth</option>
                            </select>

                            @error('productForm.supplier')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="col-12">
                            <label for="category_id">Category <span class="text-danger">*</span>:</label>
                            <select id="category_id" class="form-control" wire:model="productForm.category_id">
                                <option value="">Select...</option>
                                <option value="1">Press</option>
                                <option value="2">Internet</option>
                                <option value="3">Word of mouth</option>
                            </select>

                            @error('productForm.category_id')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="price">Product Price <span class="text-danger">*</span>
                                :</label>
                            <input type="text" id="price" wire:model="productForm.price"class="form-control"
                                name="price" required />
                            @error('productForm.price')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="col-12">
                            <label for="quantity">Product quantity <span class="text-danger">*</span>
                                :</label>
                            <input type="text" id="quantity" wire:model="productForm.stock_quantity"class="form-control"
                                name="quantity" required />
                            @error('productForm.stock_quantity')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="col-12">






                            <label>Hobbies (2 minimum):</label>
                            <p style="padding: 5px;">

                            <p>

                                <label for="heard">Heard us by *:</label>
                                <select id="heard" class="form-control" required>
                                    <option value="">Choose..</option>
                                    <option value="press">Press</option>
                                    <option value="net">Internet</option>
                                    <option value="mouth">Word of mouth</option>
                                </select>

                                <label for="message">Message (20 chars min, 100 max) :</label>
                                <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup"
                                    data-parsley-minlength="20" data-parsley-maxlength="100"
                                    data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                                    data-parsley-validation-threshold="10"></textarea>

                                <br />
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
