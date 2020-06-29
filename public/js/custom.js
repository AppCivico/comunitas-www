// debugger;
// import 'tinymce/plugins/media';
function tinymce_setup_callback(editor)
{
  tinymce.init({
    selector: 'textarea.richTextBox',
    min_height: 600,
    resize: 'vertical',
    plugins: [
      'advlist autolink lists link image charmap print preview anchor',
      'searchreplace visualblocks code fullscreen',
      'insertdatetime media table paste code help wordcount'
    ],
    file_browser_callback: function (field_name, url, type, win) {
      if (type == 'image') {
        $('#upload_file').trigger('click');
      }
    },
    toolbar: 'undo redo | formatselect | image media link' +
    'bold italic backcolor | alignleft aligncenter ' +
    'alignright alignjustify | bullist numlist outdent indent | ' +
    'removeformat | help',
    image_caption: true,
    image_title: true,
    external_plugins: {
      'paste': '/tinymce/plugins/paste/plugin.min.js',
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

  });
}
