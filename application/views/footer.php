<footer>
    Arif Nurdiansyah
</footer>
<script type="text/javascript">
$(document).ready(function() {
  $(".autocomplete").select2();
});
    tinymce.init({
  selector: '#wysiwig',
  height: 500,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code'
  ],
  toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  content_css: '//www.tinymce.com/css/codepen.min.css'
});
</script>

</body>
</html>