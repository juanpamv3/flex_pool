<?php include 'header.php'; ?>
      <div class="col-sm-offset-2 col-sm-8 innerContainer">
        <div class="col-sm-12 resoursesMainBlock">
          <div id="add-profile-icon">
            <span class="glyphicon glyphicon-pencil"></span>
          </div>
        </div><!-- End of categories -->

        <div class="col-sm-12 designResoursesBlock"><!-- availables resourses BOX -->
          <div class="col-sm-4" style="width: auto; padding-right: 10px;" id="sectionHeader">
            <h4>Create Profile</h4>
          </div>
          <div class="row hrContainer">
            <hr class="primaryHr"/>
          </div>
          <!-- Resourses Block -->
          <div class="col-sm-12">
            <div class="col-sm-12 resourse1">
              <div class="col-sm-3 col-md-2">
                <label for="name" class="primaryHighlight">Name</label>
              </div>
              <div class="col-sm-9">
                <input type="text" name="name" id="name">
              </div>
            </div><!-- End of Resourse -->
            <div class="col-sm-12 resourse2">
              <div class="col-sm-3 col-md-2">
                <label for="country" class="primaryHighlight">Country</label>
              </div>
              <div class="col-sm-9">
                <!--<p>CR</p>-->
                <select name="country" id="country">
                  <option value="Costa Rica">CR</option>
                  <option value="Option">Option</option>
                  <option value="Option">Option</option>
                </select>
              </div>
            </div><!-- End of Resourse -->
            <div class="col-sm-12 resourse1">
              <div class="col-sm-3 col-md-2">
                <label for="country" class="primaryHighlight">Role</label>
              </div>
              <div class="col-sm-9">
                <!--<p>CR</p>-->
                <select name="country" id="country">
                  <option value="Costa Rica">Creative Enginner</option>
                  <option value="Costa Rica">Front Enginner</option>
                  <option value="Option">Web Designer</option>
                  <option value="Option">Software Enginner</option>
                </select>
              </div>
            </div><!-- End of Resourse -->
            <div class="col-sm-12 resourse2">
              <div class="col-sm-3 col-md-2">
                <label class="primaryHighlight">Skills</label>
              </div>
              <div class="col-sm-9">
                <!--<p>UI, Graphic / Web Design, Email Template Design, Branding, Image Editing, digital Assets, HTML/CSS, Ilustration.</p>-->
                <textarea name="skills" id="skills" ></textarea>
              </div>
            </div><!-- End of Resourse -->
            <div class="col-sm-12 resourse1">
              <div class="col-sm-2 col-md-2">
                <label class="primaryHighlight">Availability</label>
              </div>
              <div class="col-sm-offset-1 col-sm-4" id="week1">
                <p>WEEK 1</p>
                <a href="#" class="circle available 1"></a>
                <a href="#" class="circle booked 2"></a>
                <a href="#" class="circle booked 3"></a>
                <a href="#" class="circle half_booked 4"></a>
                <a href="#" class="circle half_booked 5"></a>
              </div>
              <div class="col-sm-4">
                <p>AGENCY</p>
                <div class="form-group">
                  <input type="text" name="agency1" class="form-control">
                </div>
              </div>
            </div><!-- End of week1 -->
            <div class="col-sm-12 resourse2" id="week2">
              <div class="col-sm-offset-3 col-sm-4">
                <p>WEEK 2</p>
                <a href="#" class="circle booked 6"></a>
                <a href="#" class="circle booked 7"></a>
                <a href="#" class="circle booked 8"></a>
                <a href="#" class="circle available 9"></a>
                <a href="#" class="circle available 10"></a>
              </div>
              <div class="col-sm-4">
                <p>AGENCY</p>
                <div class="form-group">
                  <input type="text" name="agency2" class="form-control">
                </div>
              </div>
            </div><!-- End of week -->
            <div class="col-sm-12 resourse1" id="week3">
              <div class="col-sm-offset-3 col-sm-4">
                <p>WEEK 3</p>
                <a href="#" class="circle available 11"></a>
                <a href="#" class="circle available 12"></a>
                <a href="#" class="circle available 13"></a>
                <a href="#" class="circle available 14"></a>
                <a href="#" class="circle available 15"></a>
              </div>
              <div class="col-sm-4">
                <p>AGENCY</p>
                <div class="form-group">
                  <input type="text" name="agency3" class="form-control">
                </div>
              </div>
            </div><!-- End of week -->
            <div class="col-sm-12 resourse2" id="week4">
              <div class="col-sm-offset-3 col-sm-4">
                <p>WEEK 4</p>
                <a href="#" class="circle half_booked 16"></a>
                <a href="#" class="circle half_booked 17"></a>
                <a href="#" class="circle half_booked 18"></a>
                <a href="#" class="circle half_booked 19"></a>
                <a href="#" class="circle half_booked 20"></a>
              </div>
              <div class="col-sm-4">
                <p>AGENCY</p>
                <div class="form-group">
                  <input type="text" name="agency4" class="form-control">
                </div>
              </div>
            </div><!-- End of week -->
        </div>
        <div class="col-sm-12 buttonContainer">
          <a href="#" class="bookButton" id="availability_btn">Create Profile</a>
        </div>
      </div><!-- End of Available Resourses -->


      <div class="col-sm-12 prodigiousLogo">
          <img src="../images/prodigious_logo.svg" />
        </div><!-- End of Prodigious Logo -->
      </div><!-- End of innerContainer -->
<?php include 'footer.php'; ?>