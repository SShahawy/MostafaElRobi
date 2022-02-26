<div class="modal fade" id="js-modal-add-location" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-center">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Add Location</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger alert-dismissable d-none" id="js-div-alert">
                    <p>Error message</p>
                </div>

                <div class="form-group row alert alert-success d-none" id="js-div-notification">
                    <div class="col-sm-10">
                        <label id="js-label-verified-address"></label>
                        <input type="hidden" id="js-hidden-confirm-address" value="" />
                        <input type="hidden" id="js-hidden-confirm-city" value="" />
                        <input type="hidden" id="js-hidden-confirm-state" value="" />
                        <input type="hidden" id="js-hidden-confirm-zip" value="" />
                    </div>
                    <div class="col-sm-2">
                        <button type="button" class="btn btn-primary btn-block" id="js-btn-save-address">Fill</button>
                    </div>
                </div>

                @foreach ([
                        'location_name' => 'Name',
                        'address' => 'Address',
                        'city' => 'City',
                        'state' => 'State',
                        'zip' => 'Zip',
                        ] as $key => $value)
                    <div class="form-group row" id="js-div-{!! $key !!}">
                        {!! Form::label($key, $value.' : ', ['class' => 'col-sm-4 col-form-label text-right font-weight-bold required', ]) !!}
                        <div class="col-sm-7">
                            @if ($key == 'state')
                                {!! Form::select($key, ['' => '--- Select State ---'], NULL, ['class' => 'form-control', ]) !!}
                            @else
                                {!! Form::text($key, NULL, ['class' => 'form-control', ]) !!}
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="modal-footer">
                <div class="modal-button-default">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="js-btn-save-new-location">Verify</button>
                </div>
            </div>
        </div>
    </div>
</div>
