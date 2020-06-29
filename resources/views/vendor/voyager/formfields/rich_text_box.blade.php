<textarea class="form-control richTextBox" name="{{ $row->field }}" id="richTextBox">
    {{ old($row->field, $dataTypeContent->{$row->field} ?? '') }}
</textarea>

@push('javascript')
    <script>
        $(document).ready(function() {
            var additionalConfig = {
                selector: 'textarea.richTextBox',
            }

            $.extend(additionalConfig, {!! json_encode($options->tinymceOptions ?? '{}') !!})

            tinymce.init(window.voyagerTinyMCE.getConfig(additionalConfig));
        });
    </script>
@endpush
