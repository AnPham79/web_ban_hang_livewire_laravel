<div>
    <div class="container" style="padding: 30px 0xp">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Manage Home Categories
                    </div>
                </div>
                <div class="panel-body">
                    <form action="" class="form-horizontal" wire:submit.prevent="updateHomeCategory">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ session::get('message') }}</div>
                        @endif
                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">
                                Choose Categories
                            </label>
                            <div class="col-md-4" wire:ignore>
                                <select id="" class="sel_categories" name="categories[]" multiple="multiple" wire:model="selected_categories">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">
                                No Of Product
                            </label>
                            <div class="col-md-4">
                                <input type="text" class="form-control input-md" wire:model="numberofproducts">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-4">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.sel_categories').select2();
            $('.sel_categories').on('change', function(e) {
                var data = $('.sel_categories').select2('val');
                @this.set('selected_categories', data);
            });
        });
    </script>
@endpush
