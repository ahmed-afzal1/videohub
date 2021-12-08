      $(function ($) {

        $(document).on('keyup', '#movieSearch', function () {

          let search = $(this).val();
          if (search != '') {
            $('.keyupsearch ul>li').html('').load($(this).attr('data-href'), function (response, status, xhr) {
              if (status == "success")
                $('.submit-loader').hide();
            });
          }

        });

       
        // REGISTER FORM

        $("#registerform").on('submit', function (e) {
          e.preventDefault();
          $('.signup-form button.submit-btn').prop('disabled', true);
          $('.signup-form .alert-info').show();
          $('.signup-form .alert-info p').html($('#processdata').val());
          $.ajax({
            method: "POST",
            url: $(this).prop('action'),
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {

              if (data[0] == 1) {
                window.location = data[1];
              } else {

                if ((data.errors)) {
                  $('.signup-form .alert-success').hide();
                  $('.signup-form .alert-info').hide();
                  $('.signup-form .alert-danger').show();
                  $('.signup-form .alert-danger ul').html('');
                  for (var error in data.errors) {
                    $('.signup-form .alert-danger p').html(data.errors[error]);
                  }
                  $('.signup-form button.submit-btn').prop('disabled', false);
                } else {
                  $('.signup-form .alert-info').hide();
                  $('.signup-form .alert-danger').hide();
                  $('.signup-form .alert-success').show();
                  $('.signup-form .alert-success p').html(data);
                  $('.signup-form button.submit-btn').prop('disabled', false);
                }

              }
              $('.refresh_code').click();

            }

          });

        });


        // REGISTER FORM ENDS

        // FORGOT FORM

        $("#forgotform").on('submit', function (e) {
          e.preventDefault();
          $('button.submit-btn').prop('disabled', true);
          $('.alert-info').show();
          $('.alert-info p').html($('.authdata').val());
          $.ajax({
            method: "POST",
            url: $(this).prop('action'),
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
              if ((data.errors)) {
                $('.alert-success').hide();
                $('.alert-info').hide();
                $('.alert-danger').show();
                $('.alert-danger ul').html('');
                for (var error in data.errors) {
                  $('.alert-danger p').html(data.errors[error]);
                }
              } else {
                $('.alert-info').hide();
                $('.alert-danger').hide();
                $('.alert-success').show();
                $('.alert-success p').html(data);
                $('input[type=email]').val('');
              }
              $('button.submit-btn').prop('disabled', false);
            }
          });

        });

        //  FORGOT FORM ENDS


        // ******************************** LOGIN JS  ****************************************//
        // LOGIN FORM

        $("#loginform").on('submit', function (e) {
          e.preventDefault();
          $('#loginform button.submit-btn').prop('disabled', true);
          $('#loginform .alert-info').show();
          $('#loginform .alert-info p').html($('#authdata').val());
          $.ajax({
            method: "POST",
            url: $(this).prop('action'),
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
              if ((data.errors)) {
                $('#loginform .alert-success').hide();
                $('#loginform .alert-info').hide();
                $('#loginform .alert-danger').show();
                $('#loginform .alert-danger ul').html('');
                for (var error in data.errors) {
                  $('#loginform .alert-danger p').html(data.errors[error]);
                }
              } else {
                $('#loginform .alert-info').hide();
                $('#loginform .alert-danger').hide();
                $('#loginform .alert-success').show();
                $('#loginform .alert-success p').html(lang.sss);
                window.location = data;
              }
              $('#loginform button.submit-btn').prop('disabled', false);
            }
          });

        });

        // LOGIN FORM ENDS

        // ******************************** LOGIN JS  ****************************************//
        // ******************************** USER SUBMIT FORM JS ****************************************//

        //  USER FORM SUBMIT SECTION

        $(document).on('submit', '#userform', function (e) {
          e.preventDefault();
          $('.gocover').show();
          $('button.submit-btn').prop('disabled', true);
          $.ajax({
            method: "POST",
            url: $(this).prop('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
              if ((data.errors)) {
                $('.alert-success').hide();
                $('.alert-danger').show();
                $('.alert-danger ul').html('');
                for (var error in data.errors) {
                  $('.alert-danger ul').append('<li>' + data.errors[error] + '</li>')
                }
                $('#userform input[type=text], #userform input[type=email], #userform textarea').eq(0).focus();
              } else {
                $('.alert-danger').hide();
                $('.alert-success').show();
                $('.alert-success p').html(data);
                $('#userform input[type=text], #userform input[type=email], #userform textarea').eq(0).focus();
              }
              $('.gocover').hide();
              $('button.submit-btn').prop('disabled', false);

              $('html').animate({
                scrollTop: $('body').offset().top
              }, 'slow');
            }

          });

        });

        // USER FORM SUBMIT SECTION ENDS
        // ******************************** USER SUBMIT FORM JS  ****************************************//

        //  FORM SUBMIT SECTION

        $(document).on('submit', '#contactform', function (e) {
          e.preventDefault();
          $('.gocover').show();
          $('button.submit-btn').prop('disabled', true);
          $.ajax({
            method: "POST",
            url: $(this).prop('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
              $('#contactform .spinner-grow').removeClass('d-none');
            },
            success: function (data) {
              if ((data.errors)) {
                $('.alert-success').hide();
                $('.alert-danger').show();
                $('.alert-danger ul').html('');
                for (var error in data.errors) {
                  $('#contactform .spinner-grow').addClass('d-none');
                  $('.alert-danger ul').append('<li>' + data.errors[error] + '</li>')
                }
                $('#contactform input[type=text], #contactform input[type=email], #contactform textarea').eq(0).focus();
                $('.refresh_code').trigger('click');

              } else {
                $('#contactform .spinner-grow').addClass('d-none');
                $('.alert-danger').hide();
                $('.alert-success').show();
                $('.alert-success p').html(data);
                $('#contactform input[type=text], #contactform input[type=email], #contactform textarea').eq(0).focus();
                $('#contactform input[type=text], #contactform input[type=email], #contactform textarea').val('');
                $('.refresh_code').trigger('click');

              }
              $('.gocover').hide();
              $('button.submit-btn').prop('disabled', false);
            }

          });

        });




        //**************************** GLOBAL CAPCHA****************************************

        $('.refresh_code').on("click", function () {
          $.get($(this).data('href'), function (data, status) {
            $('.codeimg').attr("src", "" + mainURL + "/assets/images/capcha_code.png?time=" + Math.random());
          });
        })

        //**************************** GLOBAL CAPCHA ENDS****************************************
        // -------------------------- Image Preview-------------------------------//
        $('#image-preview').on('change', function () {
          var file = event.target.files[0];
          var reader = new FileReader();
          reader.onload = function (e) {
            $('.image-view').attr('src', e.target.result);
          }
          reader.readAsDataURL(file);
        })



        // -------------------------- Image Preview-------------------------------//


        let ReviewInfo = $('#numberReview').html();
        let classVal = $('#rate-star').attr('class');
        // ---------------------- Review js ----------------------------------------//
        $('.ReviewClick').on('click', function () {

          $('.rating1').toggle(0, function () {
            $('#numberReview').html(ReviewInfo);
            if (classVal == 'fas fa-star text-primary') {
              $('#rate-star').addClass('text-primary');
            } else {
              $('#rate-star').removeClass('text-primary');
            }
          });

        });


        let UserInfo = $('#userInfo').val();
        $(document).on('mouseenter', '#ratingValueGet a', function () {
          let rating = $(this).attr('href').substring(1);

          $('#numberReview').html(`${rating} You`);
          $('#rate-star').addClass('text-primary');
        })


        $(document).on('click', '#ratingValueGet a', function () {
          $('.rating1').hide();

          let rating = $(this).attr('href').substring(1);
          let VideoId = $('#ThisVideoId').val();
          let reviewUrl = mainurl + '/review/get/' + rating + ',' + VideoId;

          if (UserInfo) {

            $.get(reviewUrl, function (data, status) {

              let previusRate = parseInt($('#Rating').attr('rel'));
              let NowRate = previusRate + parseInt(rating) - parseInt($('#Rating').attr('rel2'));
              let voteMember = parseInt($('.vote').html());

              if (voteMember == 0) {
                voteMember = 1;
              }
              if ($('.vote').attr('rel') == '0') {
                voteMember = voteMember + 1;
              }

              let Rate = (NowRate / voteMember).toFixed(1).replace(/\.0+$/, '');
              $('#Rating').html(Rate);
              $('.vote').attr('rel', 1);
              $('.vote').html(voteMember + ' vote');
              $.notify(data.mgs, "success");
              $('#numberReview').html('Your Rate ' + rating);
              ReviewInfo = 'Your Rate ' + rating;
              classVal = 'fas fa-star text-primary';
              $('#rate-star').addClass('text-primary');
            });

            let html = `
            <a href="#10" ${ rating >= 10 ? 'style=color:blue;' : ''} title="Give 10 stars">★</a>
            <a href="#9"  ${ rating >= 9 ? 'style=color:blue;' : '' } title="Give 9 stars">★</a>
            <a href="#8"  ${ rating >= 8 ? 'style=color:blue;' : '' } title="Give 8 stars">★</a>
            <a href="#7"  ${ rating >= 7 ? 'style=color:blue;' : '' } title="Give 7 stars">★</a>
            <a href="#6"  ${ rating >= 6 ? 'style=color:blue;' : '' } title="Give 6 stars">★</a>
            <a href="#5"  ${ rating >= 5 ? 'style=color:blue;' : '' } title="Give 5 stars">★</a>
            <a href="#4"  ${ rating >= 4 ? 'style=color:blue;' : '' } title="Give 4 stars">★</a>
            <a href="#3"  ${ rating >= 3 ? 'style=color:blue;' : '' } title="Give 3 stars">★</a>
            <a href="#2"  ${ rating >= 2 ? 'style=color:blue;' : '' } title="Give 2 stars">★</a>
            <a href="#1"  ${ rating >= 1 ? 'style=color:blue;' : '' } title="Give 1 star">★</a>
          `;
            $('.rating1').html(html);
          } else {
            window.location = mainurl + '/user/login';
          }
        })

        // ---------------------- Review js end ----------------------------------------//

        // ------------------------ Movie details page favarite js START---------------------//
        $(document).on('click', '#addFavarite', function () {
          if (UserInfo) {
            $(this).addClass('d-none');
            $('#removeFavarite').removeClass('d-none');
            $('#removeFavarite').html(' Saved');

            let favariteValues = parseInt($('.favarite_value').html());
            favariteValues = favariteValues + 1;
            $('.favarite_value').html(favariteValues);

            $.get($(this).attr('data-href'), function (data, status) {
              $.notify(data, "success");
            });
          } else {
            window.location = mainurl + '/user/login';
          }
        })

        $(document).on('click', '#removeFavarite', function () {
          if (UserInfo) {

            $(this).addClass('d-none');
            $('#addFavarite').removeClass('d-none');
            let favariteValues = parseInt($('.favarite_value').html());
            favariteValues = favariteValues - 1;

            if (favariteValues > 1) {
              favariteValues = 0;
            }
            $('.favarite_value').html(favariteValues);

            $.get($(this).attr('data-href'), function (data, status) {
              $.notify(data, "success");
            });

          } else {
            window.location = mainurl + '/user/login';
          }
        })
        // ------------------------ Movie details page favarite js END---------------------//

        // ------------------------ User Panel Favarite js ------------------------------//

        let favaritVideoCount = parseInt($('#countVideo').val());
        $(document).on('click', '#removeFavariteValue', function () {

          let div = $(this).parent().parent().prev()['prevObject'];

          $.get($(this).attr('data-href'), function (data, status) {
            favaritVideoCount = favaritVideoCount - 1;
            if (favaritVideoCount == 0) {

              $('.NoVideoParent').removeClass('d-none');
              $('.NoVideo h1').html('No Video');
            }
            div.remove();
            $.notify(data, "success");
          });
        });



        //  SUBSCRIBE FORM SUBMIT SECTION

        $(document).on('submit', '#subscribeform', function (e) {
          e.preventDefault();
          $('#sub-btn').prop('disabled', true);
          $.ajax({
            method: "POST",
            url: $(this).prop('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {

              console.log(data);
              if ((data.errors)) {
                $.notify(data.errors, "error");
              } else {
                $('#subemail').val('');
                $.notify(data, "success");
              }

              $('#sub-btn').prop('disabled', false);

              $('#subemail').val('');
            }

          });

        });

        //  SUBSCRIBE FORM SUBMIT SECTION ENDS


    // Delete Operation ------------------------------------------//

    $('#confirm-delete').on('show.bs.modal', function (e) {
      $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    });

    
    // Delete Operation End ------------------------------------------//


        //*************************** COMMENT SECTION ***************************************

        // COMMENT FORM

        $(document).on('submit', '#comment-form', function (e) {
          e.preventDefault();
          $('#comment-form button.submit-btn').prop('disabled', true);
          $.ajax({
            method: "POST",
            url: $(this).prop('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
              $('#comment-form textarea').val('');
              $('.all-comment').prepend(data);

              $('#comment-form button.submit-btn').prop('disabled', false);
            }

          });
        });

        // COMMENT FORM ENDS

        // REPLY FORM

        $(document).on('submit', '.reply-form', function (e) {
          e.preventDefault();
          var btn = $(this).find('button[type=submit]');
          btn.prop('disabled', true);
          var $this = $(this).parent();
          var text = $(this).find('textarea');
          $.ajax({
            method: "POST",
            url: $(this).prop('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
              $('#comment-form textarea').val('');
              $('button.submit-btn').prop('disabled', false);
              $this.before(data);
              $this.addClass('d-none');
              text.val('');
              btn.prop('disabled', false);
            }

          });
        });

        // REPLY FORM ENDS

        // EDIT
        $(document).on('click', '.edit', function () {
          var text = $(this).parent().parent().prev().find('p').html();
          text = $.trim(text);
          $(this).parent().parent().parent().parent().next('.edit-area').find('textarea').val(text);
          $(this).parent().parent().parent().parent().next('.edit-area').toggleClass('d-none');
        });
        // EDIT ENDS

        // UPDATE
        $(document).on('submit', '.update', function (e) {
          e.preventDefault();
          var btn = $(this).find('button[type=submit]');
          var text = $(this).parent().prev().find('.right-area .comment-body p');
          var $this = $(this).parent();
          btn.prop('disabled', true);
          $.ajax({
            method: "POST",
            url: $(this).prop('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
              text.html(data);
              $this.addClass('d-none');
              btn.prop('disabled', false);
            }
          });
        });
        // UPDATE ENDS

        // COMMENT DELETE
        $(document).on('click', '.comment-delete', function () {
          var count = parseInt($("#comment_count").html());
          count--;
          $("#comment_count").html(count);
          $(this).parent().parent().parent().parent().parent().remove();
          $.get($(this).data('href'));
        });
        // COMMENT DELETE ENDS


        // COMMENT REPLY
        $(document).on('click', '.reply', function () {
          $(this).parent().parent().parent().parent().parent().show().find('.reply-reply-area').removeClass('d-none');
          $(this).parent().parent().parent().parent().parent().show().find('.reply-reply-area .reply-form textarea').focus();

        });
        // COMMENT REPLY ENDS

        // REPLY DELETE
        $(document).on('click', '.reply-delete', function () {
          $(this).parent().parent().parent().parent().remove();
          $.get($(this).data('href'));
        });
        // REPLY DELETE ENDS

        // View Replies
        $(document).on('click', '.view-reply', function () {
          $(this).parent().parent().parent().parent().siblings('.replay-review').toggleClass('d-none');
        });
        // View Replies ENDS

        // CANCEL CLICK

        $(document).on('click', '#comment-area .remove', function () {
          $(this).parent().parent().addClass('d-none');
        });

        // CANCEL CLICK ENDS

        //*************************** COMMENT SECTION ENDS ***************************************


// *********************************** Movie Search js *************************************//

$('#movieSearch').keyup(function(){
  let movieSearchVal = $(this).val().replace(/[^\w\s]/gi, '');
  if(movieSearchVal != ''){

    $.get(`${mainurl}/get/search/movie/${movieSearchVal}`,function(data,status){
      let searchArea = '';
      
      if(data.data){
        $('.search-ajax').removeClass('d-none');
        data.data.map(function(value){
          searchArea += `
          <a href="${mainurl}/movie/details/${value.slug}">
          <li class="media">
            <img src="${mainurl}/assets/images/movie-image/${value.image.image}" class="mx-3" alt="..." width="70" height="70">
            <div class="media-body">
            <h5 class="mt-0 mb-1">${value.title}</h5>
            ${value.relase_date}
            </div>
          </li>
          </a>`;
        })
      }else{
        $('.search-ajax').addClass('d-none');
      }
      $('#view-ajax-search').html(searchArea);
    })
  }else{
    $('.search-ajax').addClass('d-none');
  }
})



// *********************************** Movie Search js *************************************//

// ****************************** Primium movie access js ***********************************//
let user = $('#userInfo').val();
let userPlan = $('#plan').val();
		
	$(document).on('click','.item-p',function(){
		if(user == 0  &&  userPlan == 0){

			$('.modal-body').html(`You don't have access to premimum content kindly purchase subscription to watch this content <a class="badge badge-danger" href="${mainurl}/user/login">Login</a>`);
			$('.modal-title').html("Alert Login");
			$('.modal').modal('show');

			
		}else if(user == 0 || userPlan == 0){
			$('.modal-body').html(`You don't have access to premimum content kindly purchase subscription to watch this content <a  class="badge badge-primary" href="${mainurl}/pricing/table">Subscription Plan</a>`);
			$('.modal-title').html("Alert Subscription Plan");
			$('.modal').modal('show');
		}
		})
// ****************************** Primium movie access js ***********************************//

   

      });