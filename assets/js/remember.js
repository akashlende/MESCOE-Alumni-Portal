function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires="+ d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
      }

      function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i <ca.length; i++) {
          var c = ca[i];
          while (c.charAt(0) == ' ') {
            c = c.substring(1);
          }
          if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
          }
        }
        return "";
      }
      window.onload=function(){
            var remember = getCookie('remember');
            if (remember == 'true') 
            {
                var email = getCookie('email');
                var password = getCookie('password');
                $('#txtEmail').val(email);
                $('#txtPassword').val(password);
                document.getElementById("remember").checked = true;
          }
        }
        document.getElementById('login-in-button').onclick=function() {
          if ($('#remember').is(':checked')) {
              var email = $('#txtEmail').val();
              var password = $('#txtPassword').val();

              // set cookies to expire in 31 days
              setCookie('email', email, 31);
              setCookie('password', password, 31);
              setCookie('remember', 'true', 31);   
          }
          else
          {
              // reset cookies
              setCookie('email', null, 0);
              setCookie('password', null, 0);
              setCookie('remember', null, 0); 
          }
     };