<footer>
    Arif Nurdiansyah
</footer>
<script type="text/javascript">
$(document).ready(function() {
  $(".autocomplete").select2();
});
 tinymce.init({
		selector:"#wysiwyg",
		
		plugins: [
					'advlist autolink lists link image charmap print preview hr anchor pagebreak',
					'searchreplace wordcount visualblocks visualchars code fullscreen',
					'insertdatetime media nonbreaking save table contextmenu directionality',
					'emoticons template paste textcolor colorpicker textpattern imagetools codesample'
				  ],
		toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | imageupload',
		toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
		image_advtab: true,
        setup: function(editor) {
            var inp = $('<input id="tinymce-uploader" type="file" name="pic" accept="image/*" style="display:none">');
            $(editor.getElement()).parent().append(inp);

            inp.on("change",function(){
                var input = inp.get(0);
                var file = input.files[0];
                var fr = new FileReader();
                fr.onload = function() {
                    var img = new Image();
                    img.src = fr.result;
                    editor.insertContent('<img src="'+img.src+'"/>');
                    inp.val('');
                }
                fr.readAsDataURL(file);
            });

            editor.addButton( 'imageupload', {
                text:"IMAGE",
                icon: false,
                onclick: function(e) {
                    inp.trigger('click');
                }
            });
        }
    });
</script>

</body>
</html>