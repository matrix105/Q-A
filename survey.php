<?php include("config/config.php");
$CURRENT_PAGE = "Survey";
$PAGE_TITLE = "Survey"; ?>

<!DOCTYPE html>
<html>
<!-- Head  -->
<?php include("includes/template/head.php"); ?>

<style>
    #form_survay fieldset:not(:first-of-type) {
        display: none;
    }
</style>

<body>
    <!-- Navigation  -->
    <?php include("includes/template/navigation.php"); ?>

    <!-- Page Content -->
    <div class="jumbotron" id="particles">
        <center>
            <h1>Survey Page </h1>
        </center>
    </div>
    <div class="container">
        <h1></h1>
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="card card-signin my-5">
            <div class="card-body">
                <form id="form_survay" novalidate action="action.php" method="post">
                    <fieldset>
                        <h2>Step 1: Your Details</h2>
                        <div class="form-label-group">
                            <input type="text" name="data[fname]" id="fname" class="form-control" placeholder="first name" required autofocus>
                            <label for="fname">First Name</label>
                        </div>
                        <div class="form-label-group">
                            <input type="text" name="data[lname]" id="lname" class="form-control" placeholder="last name" required >
                            <label for="lname">Last Name</label>
                        </div>
                        <div class="form-label-group">
                            <input type="text" name="data[studid]" id="studid" class="form-control" placeholder="studid" required >
                            <label for="studid">Student Number</label>
                        </div>

                        <input type="button" class="next btn btn-primary text-uppercase" value="Next" />
                    </fieldset>
                    <fieldset>
                        <h2> Step 2: Add Personnel Details</h2>
                        <div class="form-label-group">
                            <input type="text" name="data[uni]" id="uni" class="form-control" placeholder="University" required autofocus>
                            <label for="uni">University</label>
                        </div>
                        <div class="form-label-group">
                            <input type="text" name="data[unit]" id="unit" class="form-control" placeholder="unit" required >
                            <label for="unit">Unit</label>
                        </div>

                        <input type="button" name="previous" class="previous btn btn-warning text-uppercase" value="Previous" />
                        <input type="button" name="next" class="next btn btn-primary text-uppercase" value="Next" />
                    </fieldset>
                    
                    <fieldset>
                        <h2>Step 3: Contact Information</h2>
                        <div class="form-label-group">
                            <input type="number" name="data[rating]" id="rating" class="form-control" placeholder="rating" required autofocus>
                            <label for="rating">Rating</label>
                        </div>
                        <div class="form-label-group">
                            <textarea name="data[suggestion]" id="suggestion" class="form-control" placeholder="suggestion" required  rows="4"> </textarea>
                            <label for="suggestion">Suggestion or Comment</label>
                        </div>

                        <input type="button" name="previous" class="previous btn btn-warning text-uppercase" value="Previous" />
                        <input type="submit" name="submit" class="submit btn btn-success text-uppercase" value="Submit" id="submit_data" />
                    </fieldset>
                </form>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            var current = 1,
                current_step, next_step, steps;
            steps = $("fieldset").length;
            $(".next").click(function() {
                current_step = $(this).parent();
                next_step = $(this).parent().next();
                next_step.show();
                current_step.hide();
                setProgressBar(++current);
            });
            $(".previous").click(function() {
                current_step = $(this).parent();
                next_step = $(this).parent().prev();
                next_step.show();
                current_step.hide();
                setProgressBar(--current);
            });
            setProgressBar(current);
            // Change progress bar action
            function setProgressBar(curStep) {
                var percent = parseFloat(100 / steps) * curStep;
                percent = percent.toFixed();
                $(".progress-bar")
                    .css("width", percent + "%")
                    .html(percent + "%");
            }
        });
    </script>

    <?php include("includes/template/footer.php"); ?>

</body>

</html>