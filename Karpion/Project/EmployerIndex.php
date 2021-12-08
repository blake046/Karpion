

<?php
include_once 'Header.php';
?>

    <div class="profile">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <link
                  rel="stylesheet"
                  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
                />
                <img
                  src="https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_1280.png"
                  alt="avatar"
                  alt="John"
                  style="width: 70%"
                  style="border-radius: 50%"
                />
                <p class="name">Name of Employer</p>
                <p class="title">Occupation</p>
                <p class="title">Company</p>
                <div style="margin: 24px 0">
                  <a href="#"
                    ><i class="fa fa-globe" aria-hidden="true"></i> link to
                    website</a
                  >
                </div>

              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="card1">
              <div class="card-body">
                <div class="card1">
                  <div class="card-body">
                    <button onclick="window.location.href='talentpost.html';">
                      Search Talent
                    </button>
                  </div>
                </div>

                <div class="tab">
                  <button
                    class="tablinks"
                    onclick="openInfo(event, 'Description')"
                  >
                    Description
                  </button>
                  <button
                    class="tablinks"
                    onclick="openInfo(event, 'Eligibility')"
                  >
                    Eligibility
                  </button>
                  <button class="tablinks" onclick="openInfo(event, 'Salary')">
                    Salary
                  </button>
                  <button
                    class="tablinks"
                    onclick="openInfo(event, 'Timeline')"
                  >
                    Timeline
                  </button>
                </div>
                <div id="Description" class="tabcontent">
                  <h3>Description</h3>
                  <p>Description</p>
                </div>
                <div id="Eligibility" class="tabcontent">
                  <h3>Eligibility</h3>
                  <p>Eligibility</p>
                </div>
                <div id="Salary" class="tabcontent">
                  <h3>Salary</h3>
                  <p>Salary</p>
                </div>
                <div id="Timeline" class="tabcontent">
                  <h3>Timeline</h3>
                  <p>Timeline</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
