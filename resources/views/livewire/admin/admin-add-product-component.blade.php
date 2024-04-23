<div>
    <div class="container" style="padding: 30px 0px">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            Add new product
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.products') }}" class="btn btn-success pull-right">All Products</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel-body">
                @if(session()->has('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addProduct">
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">Product name</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="Product Name" class="form-control input-md" wire:model="name" wire:keyup="generateslug"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">Product slug</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="Product Name" class="form-control input-md" wire:model="slug"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">Short Description</label>
                        <div class="col-md-4">
                            <textarea class="form-control" placeholder="Short Description" wire:model="short_description"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">Description</label>
                        <div class="col-md-4">
                            <textarea class="form-control" placeholder="Short Description" wire:model="description"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">Regular Price</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="Product Name" class="form-control input-md" wire:model="regular_price"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">Sale Price</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="Product Name" class="form-control input-md" wire:model="sale_price"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">SKU</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="Product Name" class="form-control input-md" wire:model="SKU"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">Stock</label>
                        <div class="col-md-4">
                            <select class="form-control" wire:model="stock_status">
                                <option value="in_stock">In Stock</option>
                                <option value="out_of_stock">Out Of Stock</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">Featured</label>
                        <div class="col-md-4">
                            <select class="form-control" wire:model="featured">
                                <option value="0">No</option>
                                <option value="1">yes</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">Quantity</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="Product Name" class="form-control input-md" wire:model="quantity"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">Product Image</label>
                        <div class="col-md-4">
                            <input type="file" placeholder="Product Name" class="form-control input-md" wire:model="image"/>
                            @if($image)
                                <img src="{{ $image->temporaryUrl() }}" style="width:120px" alt="">
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">Product Gallery</label>
                        <div class="col-md-4">
                            <input type="file" name="images" placeholder="Product Name" class="form-control input-md" wire:model="images" multiple />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">Category</label>
                        <div class="col-md-4">
                            <select class="form-control" wire:model="category_id">
                                <option value="">Select Category</option>
                                @foreach($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">Product Image</label>
                        <div class="col-md-4">
                            <button class="btn btn-success" type="Submit">Insert Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
