<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Form Project</title>
  </head>
  <body>
    <div class = "container">
          <form name="project form" method = "post" action = "#" id="projectform" class="form">
                  <!-- First name and last name boxes on the first row -->
                  <div class = "form-group row">
                    <div class = "col">  
                      <label for = "fname">First Name</label>
                      <input type = "text" class = "form-control" name ="firstname" id = "fname">
                    </div>
                    <div class = "col">
                      <label for = "lname">Last Name</label>
                      <input type = "text" class = "form-control" name ="lastname" id = "lname">
                    </div>
                  </div>
                
                  <!-- Address box on 1 row-->
                  <div class = "form-group">
                      <label for = "address">Address</label>
                      <input type = "text" class = "form-control" name = "address" id = "add">
                  </div>


                  <!-- city, state, and zip on 1 row-->
                <div class = "row">
                  <div class = "form-group col-md-6">
                      <label for = "cty">City</label>
                      <input type = "text" class = "form-control" name = "city" id = "cty">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="statenames">State</label>
                      <select id="statenames" name="state" class="form-select">
                        <option value="illinois">Illinois</option>  
                        <option value="indiana">Indiana</option>
                        <option value="michigan" selected>Michigan</option>
                        <option value="ohio">Ohio</option>
                        <option value="wisconsin">Wisconsin</option>
                        
                      </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="zip">Zip</label>
                    <input type="text" class="form-control" name="zipcode" id="zip">
                </div>
            </div>

            <!--Gender buttons-->
            <div class="col-2">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="optionmale" value="male">
                    <label class="form-check-label" for="optionmale">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="optionfemale" value="female">
                    <label class="form-check-label" for="optionfemale">Female</label>
                </div>   
            </div>
            
            <!--Submit button-->
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
  </body>
</html>