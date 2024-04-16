<div>
    <div class="container" style="padding: 30px 0px">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            Add new Slider
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.homeslider') }}" class="btn btn-success pull-right">
                                All Sliders
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <form action="" class="form-horizontal" enctype="multipart/form-data">
                        <div class="form-group">
                            <lable class="control-label col-md-4">
                                Title
                            </lable>
                            <div class="col-md-4">
                                <input type="text" placeholder="Title" class="form-control input-md">
                            </div>
                        </div>

                        <div class="form-group">
                            <lable class="control-label col-md-4">
                                Subtitle
                            </lable>
                            <div class="col-md-4">
                                <input type="text" placeholder="Subtitle" class="form-control input-md">
                            </div>
                        </div>

                        <div class="form-group">
                            <lable class="control-label col-md-4">
                                Price
                            </lable>
                            <div class="col-md-4">
                                <input type="text" placeholder="Price" class="form-control input-md">
                            </div>
                        </div>

                        <div class="form-group">
                            <lable class="control-label col-md-4">
                                Link
                            </lable>
                            <div class="col-md-4">
                                <input type="text" placeholder="Link" class="form-control input-md">
                            </div> 
                        </div>

                        <div class="form-group">
                            <lable class="control-label col-md-4">
                                Image
                            </lable>
                            <div class="col-md-4">
                                <input type="file" placeholder="Image" class="form-control input-file">
                            </div>
                        </div>

                        <div class="form-group">
                            <lable class="control-label col-md-4">
                                Status
                            </lable>
                            <div class="col-md-4">
                                <select name="" id="" class="form-control">
                                    <option value="0">Inactive</option>
                                    <option value="1">Active</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <lable class="control-label col-md-4">
                                Status
                            </lable>
                            <div class="col-md-4">
                                <button class="btn btn-success" type="submit">Add new</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
