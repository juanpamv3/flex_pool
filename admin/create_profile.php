<?php include 'header.php'; ?>
      <div class="col-sm-offset-2 col-sm-8 innerContainer">
        <div class="col-sm-12 resoursesMainBlock">
          <h1>Staff Allocation | Status</h1>

        </div><!-- End of categories -->

        <div class="col-sm-12"><!-- availables resourses BOX -->
          <div class="col-sm-4" style="width: auto; padding-right: 10px;" id="sectionHeader">
            <h4>Create Profile</h4>
          </div>
          <div class="row hrContainer">
            <hr class="primaryHr"/>
          </div>
  
            <div class="col-xs-12" id="form">
              <form action="">
                <div class="form-group col-md-6">
                  <label for="name">Name:</label> 
                  <input type="text"  id="name" name="name" class="form-control">
                  <label for="country">Country:</label> 
                  <input type="text" id="country" name="country" class="form-control">
                  <label for="category">Category:</label> 
                  <select class="form-control" id="category" name="category">
                    <option>Design</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="position">Position:</label> 
                  <input type="text" id="position" name="position" class="form-control">
                  <label for="skills">Skills:</label> 
                  <textarea class="form-control" id="skills" name="skills" rows="4"></textarea>
                </div>
                <div class="col-sm-12 buttonContainer">
                  <a href="#" class="bookButton">Create Profile</a>
                </div>
              </form>
            </div>

      </div><!-- End of Available Resourses -->
        <div class="col-sm-12 prodigiousLogo">
          <img src="../images/prodigious_logo.svg" />
        </div><!-- End of Prodigious Logo -->
      </div><!-- End of innerContainer -->
<?php include 'footer.php'; ?>