<div>
    <div class="container" style="padding: 30px 0px">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Sale Setting</div>
                    <div class="panel-body">
                        @if(session()->has('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <form action="" class="form-horizontal" wire:submit.prevent="updateSale">
                            <div class="form-group">
                                <label for="" class="control-label col-md-4">Status</label>
                                <div class="col-md-4">
                                    <select name="" id="" class="form-control" wire:model="status">
                                        <option value="0">Inactive</option>
                                        <option value="1">Active</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label col-md-4">Sale Date</label>
                                <div class="col-md-4">
                                    <input type="text" id="sale-date" placeholder="YYYY/MM/DD" class="form-control input-md" wire:model="sale_date">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label col-md-4"></label>
                                <div class="col-md-4">
                                    <button class="btn btn-success" type="submit">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(function() {
            $('#sale-date').datetimepicker({
                format: 'dd/MM/yyyy h:m:s',
            }).on('dp.change', function(ev){
                if (ev.date) {
                    @this.set('sale_date', ev.date.format('YYYY/MM/DD HH:mm:ss'));
                }
            });
        });
    </script>
@endpush
