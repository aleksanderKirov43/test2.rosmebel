document.addEventListener("DOMContentLoaded", function () {
        var forms = document.querySelectorAll("#form1");
      
        forms.forEach(function (form) {
          form.addEventListener("submit", function (event) {
            event.preventDefault();
      
            var xhr = new XMLHttpRequest();
            var url = form.getAttribute("action");
            xhr.open("POST", url, true);
            xhr.onreadystatechange = function () {
              if (xhr.readyState === 4) {
                console.log("Server response status:", xhr.status);
                if (xhr.status === 200) {
                  var response = xhr.responseText.trim();
                  if (response === "success") {
                    alert(
                      "Спасибо! Ваш запрос был успешно отправлен. Скоро мы с Вами свяжемся!"
                    );
                    form.reset();
                    modalClose();

                  } else {
                    alert("При отправке запроса произошла ошибка: " + response);
                  }
                } else {
                  alert(
                    "Произошла ошибка при отправке запроса. Пожалуйста, попробуйте снова."
                  );
                }
              }
            };
      
            var formData = new FormData(form);
             xhr.send(formData);
          });
        });
      });