<div class="form-group">
        <label for="description" class="control-label col-xs-12 col-sm-3 no-padding-right">
            权限
        </label>
        <div class="col-xs-6 col-sm-6">
            @foreach($permissions as $permission)
                <div>
                    <?php echo Form::checkbox('permissions[]', $permission->id, NULL,
                            ['class' => 'ace parent', 'data-id' => $permission->id]);?>
                    <span class="lbl"> <strong>{{ $permission->display_name }}</strong></span>
                </div>
                @foreach($permission->children as $child)
                    <div style="float: left; margin-right: 10px;">
                        <?php echo Form::checkbox('permissions[]', $child->id, NULL,
                                ['class' => 'ace children' . $permission->id]);?>
                        <span class="lbl"> {{ $child->display_name }}</span>
                    </div>
                @endforeach
                <div class="clearfix"></div>
                <div class="hr hr-dotted"></div>
            @endforeach
        </div>
    </div>

    <script type="text/javascript">
        $('.parent').click(function () {
            var id = $(this).data('id');
            if ($(this).is(":checked")) {
                $('.children' + id).attr("disabled", true);
                $('.children' + id).attr("checked", false);
            } else {
                $('.children' + id).attr("disabled", false);
            }
        });
    </script>
