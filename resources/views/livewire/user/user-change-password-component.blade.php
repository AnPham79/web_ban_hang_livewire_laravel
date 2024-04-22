<div>
    <div class="container" style="padding: 30px 0px">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Change Password
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="changePassword">
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Current Password</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Current password" 
                                    class="form-control input-md" name="current_password" 
                                    wire:model="current_password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">New Password</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="New password" 
                                    class="form-control input-md" name="password" wire:model="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Confirm Password</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="confirm password" 
                                    class="form-control input-md" name="password_confirmation"
                                    wire:model="password_confirmation">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
