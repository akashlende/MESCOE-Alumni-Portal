<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link
      type="text/css"
      href="./assets/css/argon.css?v=1.1.0"
      rel="stylesheet"
    />
    <!-- firebase -->
    <script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-storage.js"></script>
    <title>Events</title>
  </head>
  <body>
    <div class="container" style="position: relative; top: 80px">
      <div id="addele"></div>
    </div>

    <div class="col-md-4">
      <div
        class="modal fade"
        id="modal-notification"
        tabindex="-1"
        role="dialog"
        aria-labelledby="modal-notification"
        aria-hidden="true"
      >
        <div
          class="modal-dialog modal-danger modal-dia log-centered modal-"
          role="document"
        >
          <div class="modal-content bg-gradient-primary">
            <div class="modal-header" style="border: none;">
              <h2 class="modal-title" id="modal-title-notification">
                Event Title
              </h2>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">×</span>
              </button>
            </div>

            <div class="modal-body">
              <div class=" text-center">
                <i class="ni ni-bell-55 ni-3x"></i>
              </div>

              <div class="table-responsive mx-auto p-3">
                <table class="table text-white">
                  <tr>
                    <td>
                      <h5 class="text-white">
                        <a id="sdate99"
                          ><i class="fas fa-hourglass-start"></i> Start-Date:-
                          23-04-2020</a
                        >
                      </h5>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <h5 class="text-white">
                        <a id="edate99"
                          ><i class="fas fa-hourglass-end"></i> End-Date:-
                          23-04-2020</a
                        >
                      </h5>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h5 class="text-white">
                        <a id="stime99"
                          ><i class="fas fa-user-clock"></i> Start-time:-
                          12:30pm</a
                        >
                      </h5>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h5 class="text-white">
                        <a id="dur99"
                          ><i class="fas fa-stopwatch"></i> Duration:- 2hrs</a
                        >
                      </h5>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h5 class="text-white">
                        <a id="loc99"
                          ><i class="fas fa-map-marker-alt"></i> Location:-
                          Mescoe, Seminar Hall</a
                        >
                      </h5>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                  </tr>
                </table>
              </div>
            </div>

            <div class="modal-footer" style="border: none;">
              <button type="button" id="reg1" class="btn btn-white">
                Register
              </button>
              <!-- <button type="button" class="btn btn-link text-white ml-auto"
                data-dismiss="modal">Close</button> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- firebase -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
    <script>
      // Your web app's Firebase configuration
      var firebaseConfig = {
        apiKey: "AIzaSyCBcqL0b8LqsURhdUOmmSBcntqXSI6uu7g",
        authDomain: "mescoe-alumni.firebaseapp.com",
        databaseURL: "https://mescoe-alumni.firebaseio.com",
        projectId: "mescoe-alumni",
        storageBucket: "mescoe-alumni.appspot.com",
        messagingSenderId: "332958193506",
        appId: "1:332958193506:web:b218c9102289cb36f0fe3b"
      };
      // Initialize Firebase
      firebase.initializeApp(firebaseConfig);
      const db = firebase.database().ref("events");
    </script>
    <!-- JS -->
    <script src="assets/js/eventNUpdate.js"></script>
    <!-- bootstrap JS -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <?php require "header.php" ?>
    <script>
      document.querySelector(".navbar").classList.add("bg-default");
    </script>
  </body>
</html>
