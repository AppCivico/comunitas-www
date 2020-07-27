<textarea class="form-control richTextBox" name="{{ $row->field }}" id="richtext{{ $row->field }}">
    {{ old($row->field, $dataTypeContent->{$row->field} ?? '') }}
</textarea>

@push('javascript')
    <script>
        $(document).ready(function() {
            var additionalConfig = {
              selector: 'textarea.richTextBox[name="{{ $row->field }}"]',

              height: 500,
              menubar: false,
              fontsize_formats: "9.989px 16px 18px 22.781px 32.437px 46.184px",
              textcolor_map: [
                "000000", "Black",
                "797979", "Gray",
                "FFFFFF", "White",
                "6C41A0", "Purple",
                "05D7BD", "Green",
                "F5CB38", "Yellow"
              ],
              skin_url: $('meta[name="assets-path"]').attr('content') + '?path=js/skins/voyager',
              plugins: 'print preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern help code textcolor',
              file_browser_callback: function (field_name, url, type, win) {
                $('#upload_file').trigger('click');
              },

              // plugins: [
              //   'media advlist autolink lists link image charmap print preview anchor',
              //   'searchreplace visualblocks code fullscreen',
              //   'insertdatetime media table paste code help wordcount'
              // ],
              toolbar: 'formatselect | bold italic strikethrough | fontsizeselect | forecolor backcolor | link image media | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | ltr rtl | removeformat | code',
              external_plugins: {
                'print': '/tinymce/plugins/print/plugin.min.js',
                'preview': '/tinymce/plugins/preview/plugin.min.js',
                'searchreplace': '/tinymce/plugins/searchreplace/plugin.min.js',
                'directionality': '/tinymce/plugins/directionality/plugin.min.js',
                'visualchars': '/tinymce/plugins/visualchars/plugin.min.js',
                'visualblocks': '/tinymce/plugins/visualblocks/plugin.min.js',
                'autolink': '/tinymce/plugins/autolink/plugin.min.js',
                'fullscreen': '/tinymce/plugins/fullscreen/plugin.min.js',
                'media': '/tinymce/plugins/media/plugin.min.js',
                'template': '/tinymce/plugins/template/plugin.min.js',
                'codesample': '/tinymce/plugins/codesample/plugin.min.js',
                'charmap': '/tinymce/plugins/charmap/plugin.min.js',
                'pagebreak': '/tinymce/plugins/pagebreak/plugin.min.js',
                'hr': '/tinymce/plugins/hr/plugin.min.js',
                'anchor': '/tinymce/plugins/anchor/plugin.min.js',
                'nonbreaking': '/tinymce/plugins/nonbreaking/plugin.min.js',
                'insertdatetime': '/tinymce/plugins/insertdatetime/plugin.min.js',
                'toc': '/tinymce/plugins/toc/plugin.min.js',
                'advlist': '/tinymce/plugins/advlist/plugin.min.js',
                'wordcount': '/tinymce/plugins/wordcount/plugin.min.js',
                'imagetools': '/tinymce/plugins/imagetools/plugin.min.js',
                'textpattern': '/tinymce/plugins/textpattern/plugin.min.js',
                'help': '/tinymce/plugins/help/plugin.min.js',
              }
            }

          $.extend(additionalConfig, {!! json_encode($options->tinymceOptions ?? '{}') !!})

          tinymce.init(window.voyagerTinyMCE.getConfig(additionalConfig));
        });
    </script>
@endpush
