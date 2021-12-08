(function($) {

            var elementArray = document.getElementsByClassName("nic-edit");
            for (var i = 0; i < elementArray.length; ++i) {
              nicEditors.editors.push(
                new nicEditor({fullPanel : true}).panelInstance(
                  elementArray[i]
                )
              );
          }

// image reader-----------------------------------------------------//
          $('#image').on('change',function(){
            var file = event.target.files[0];
            var reader = new FileReader();
            reader.onload = function(e) {
              // console.log(e.target.result)
              $('.ShowLanguageImage').removeClass('d-none');
              $('.ShowLanguageImage img').attr('src',e.target.result);
            };
      
        reader.readAsDataURL(file);
          })
 // image reader-----------------------------------------------------//

})(jQuery);


  

