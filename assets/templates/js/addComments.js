
                  function showReplyForm(e, id){
                      var element = document.getElementById("reply-form-" + id );
                      
                      element.style.display = (element.style.display == "block") ? "none" : "block";
                  }
                  function call_reply(id){
            	            var comment = $('#reply-form-' + id).serialize();
            	            $.ajax({
            	                type: 'POST',
            	                url: "assets/write_comment.php",
            	                data: comment,
            	                success: function(data){
            	                       var media = $("<div class='media'></div>")
                                      var imgLink = $("<a class='pull-left' href='#'></a>")
                                      var img = $("<img src='assets/templates/images/user.png' class='media-object' alt=''>");
                                      media.append(imgLink.append(img));
                                      
                                      var body = $("<div class='media-body'>");
                                      var cloud = $("<div class='media_cloud'></div>");
                                      var heading = $("<h6 class='media-heading'></h6>");
                                      heading.append($("<a href='#'>" + $("#reply_name-" + id).val() + "</a>"));
                                      var date = new Date();
                                      var Year = date.getFullYear();
                                        var Month = date.getMonth();
                                        var Day = date.getDate();
                                        var Hour = date.getHours();
                                        var Minutes = date.getMinutes();
                                        var Seconds = date.getSeconds();
                                      heading.append($("<small>" + Year + "-" + (Month + 1) + "-" + Day + " " + Hour + ":" + Minutes + ":" + Seconds + "</small>"));
                                      var content = $("<p>" + $("#reply_message-" + id).val() + "</p>");
                                      
                                      cloud.append(heading).append(content);
                                      body.append(cloud);
                                      media.append(body);
                                      
                                      $("#" + id + ".media-body").first().append(media); //Где-то здесь ошибка!!!!!!
                                      $("#reply-form-" + id).hide();
            	                },
            	                error: function(){
            	                    alert("error");
            	                }
            	            });
            		}
                  $(document).ready(function(){
                      $.ajax({
                          url: "assets/getComments.php",
                          dataType: "json",
                          data: "id=" + [[*id]],
                          success: function(data, textStatus){
                              data = data.reverse();
                              var replies = [];
                              var numbOfReplies = 0;
                            $.each(data, function(index, value){
                                var media = $("<div class='media' id='" + value.id + "'></div>")
                                  var imgLink = $("<a class='pull-left' href='#'></a>")
                                  var img = $("<img src='assets/templates/images/user.png' class='media-object' alt=''>");
                                  media.append(imgLink.append(img));
                                  
                                  var body = $("<div class='media-body'>");
                                  var cloud = $("<div class='media_cloud'></div>");
                                  var heading = $("<h6 class='media-heading'></h6>");
                                  heading.append($("<a href='#'>" + value.name + "</a>"));
                                  heading.append($("<small>" + value.date + "</small>"));
                                  var formHTML = $('<form style="display:none" id="reply-form-' + value.id + '" class="form-contact-3 form-tab form-light centered" role="form" method="post" action="javascript:void(null);" onsubmit="call_reply(' + value.id + ')" data-toggle="validator"></form>');
                                  
                                  var fieldset = $("<fieldset></fieldset>");
                                  for(var i = 0; i < 3; i++){
                                      var container = $('<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding"></div>');
                                        container.append($('<div class="form-group form-input no-margin"></div>').append($('<div class="help-block with-errors"></div>')));
                                      fieldset.append(container);
                                  }
                                  
                                  formHTML.append(fieldset);
                                  formHTML.append($("<input type='hidden' name='reply_id' value='" + value.id + "'>"));
                                  formHTML.append($("<input type='hidden' name='page_id' value='" + [[*id]] + "'>"));
                                  formHTML.append($("<input type='hidden' name='pagetitle' value='[[*pagetitle]]'>"));
                                  formHTML.find(".no-padding:first-child .form-group").append('<input required data-name="Name" name="name" id="reply_name-' + value.id + '" data-type="input" type="text" placeholder="Ваше имя">');
                                  formHTML.find(".no-padding:nth-child(2) .form-group").append('<textarea required data-name="Message" name="comment" id="reply_message-' + value.id + '" type="text" placeholder="Сообщение">');
                                  formHTML.find(".no-padding:last-child .form-group" ).append('<button type="submit" class="btn btn-lg btn-default btn-animation-right no-margin form-input">Отправить<span class="icon-arrow-1-right"></span></button>');
                                  var content = $("<p>" + value.comment + "<a href='#' onclick='showReplyForm(event, " + value.id + ")' class='reply_link'><span class='icon-back-7'></span></a></p>");
                                  content.append(formHTML);
                                  cloud.append(heading).append(content);
                                  body.append(cloud);
                                  media.append(body);
                                  if(value.reply_id == null || value.reply_id == 0){
                                      $("#comment-title").after(media);
                                  }else{
                                      replies[numbOfReplies] = value;
                                      numbOfReplies = numbOfReplies + 1;
                                  }
                            })
                            replies = replies.reverse();
                            $.each(replies, function(index, value){ // If the comment has a reply, append it to the correspondent comment
                                var media = $("<div class='media'></div>");
                                  var imgLink = $("<a class='pull-left' href='#'></a>");
                                  var img = $("<img src='assets/templates/images/user.png' class='media-object' alt=''>");
                                  media.append(imgLink.append(img));
                                  
                                  var body = $("<div class='media-body'>");
                                  var cloud = $("<div class='media_cloud'></div>");
                                  var heading = $("<h6 class='media-heading'></h6>");
                                  heading.append($("<a href='#'>" + value.name + "</a>"));
                                  heading.append($("<small>" + value.date + "</small>"));
                                  var content = $("<p>" + value.comment + "</p>");
                                  cloud.append(heading).append(content);
                                  body.append(cloud);
                                  media.append(body);
                                $("#" + value.reply_id).find(".media-body").first().append(media);
                            })
                            $("#num-com").text(data.length);
                            if((data.length == 1) || (data.length % 10 == 1)){
                                $("#word").text("комментарий");
                            }else if(((data.length >= 2) && (data.length <= 4)) ||
                                        ((data.length % 20 >= 2) && (data.length % 20 <= 4))){
                                $("#word").text("комментария");
                            }else if(((data.length >= 5) && (data.length <= 20)) || (data.length % 20 == 0)){
                                $("#word").text("комментарев");
                            }
                            $("#comments").append(data.length);
                          },
                          
                          error: function (jqXHR, exception) {
                                var msg = '';
                                if (jqXHR.status === 0) {
                                    msg = 'Not connect.\n Verify Network.';
                                } else if (jqXHR.status == 404) {
                                    msg = 'Requested page not found. [404]';
                                } else if (jqXHR.status == 500) {
                                    msg = 'Internal Server Error [500].';
                                } else if (exception === 'parsererror') {
                                    msg = 'Requested JSON parse failed.';
                                } else if (exception === 'timeout') {
                                    msg = 'Time out error.';
                                } else if (exception === 'abort') {
                                    msg = 'Ajax request aborted.';
                                } else {
                                    msg = 'Uncaught Error.\n' + jqXHR.responseText;
                                }
                                alert(msg);
                            }
                      })
                  })