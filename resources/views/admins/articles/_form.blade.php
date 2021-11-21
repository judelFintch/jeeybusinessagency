{!! form_start($form) !!}
<div class="row gys">
    <div class="col-md-12">
        <div class="row mb-3">
            <div class="col-md-4">
                <div class="form-group">
                    <div class="form-control-wrap">
                        {!! form_row($form->title) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <div class="form-control-wrap">
                        {!! form_row($form->picture) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <div class="form-control-wrap">
                        {!! form_row($form->resume) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="form-control-wrap">
                        {!! form_row($form->content) !!}
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
