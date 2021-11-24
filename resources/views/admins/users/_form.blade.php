{!! form_start($form) !!}
    <div class="row gys">
        <div class="col-md-12">
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            {!! form_row($form->name) !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            {!! form_row($form->picture) !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            {!! form_row($form->phone_number) !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            {!! form_row($form->email) !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            {!! form_row($form->password) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group mt-2">
        <button type="submit" class="btn btn-primary btn-action">
            Enregistrer
        </button>
    </div>
{!! form_end($form) !!}
