<?php include("config/config.php");
require_once("class/class-question.php");
$CURRENT_PAGE = "Survey";
$PAGE_TITLE = "Survey"; ?>

<!DOCTYPE html>
<html>
<!-- Head  -->
<?php include("includes/template/head.php"); ?>
1
<style>
    #form_survay fieldset:not(:first-of-type) {
        display: none;
    }
</style>

<?php
function nextStep()
{
    echo '<input type="button" class="next btn btn-primary text-uppercase" value="Next" />';
}

function prevStep()
{
    echo '<input type="button" name="previous" class="previous btn btn-warning text-uppercase" value="Previous" />
    ';
}

?>


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
                        <?php $x = new Question(1, 'I can see how this unit contributes to my overall programme of study.');
                        $x->build();
                        ?>
                        <?php nextStep(); ?>
                    </fieldset>

                    <fieldset>
                        <?php $x = new Question(2, 'The teaching was effective in helping me learn.');
                        $x->build();
                        ?>

                        <?php prevStep(); ?>
                        <?php nextStep(); ?>
                    </fieldset>
                    <fieldset>
                        <?php $x = new Question(3, 'I found the online resources (e.g. those available by Moodle, lecture notes etc.) supported my learning.');
                        $x->build();
                        ?>

                        <?php prevStep(); ?>
                        <?php nextStep(); ?>
                    </fieldset>
                    <fieldset>
                        <?php $x = new Question(4, 'Overall, I am satisfied with the quality of the unit.');
                        $x->build();
                        ?>

                        <?php prevStep(); ?>
                        <?php nextStep(); ?>
                    </fieldset>
                    <fieldset>
                        <?php $x = new Question(5, 'What aspects of the in-person and online teaching worked well on this unit?');
                        $x->build_text();
                        ?>

                        <?php prevStep(); ?>
                        <?php nextStep(); ?>
                    </fieldset>
                    <fieldset>
                        <?php $x = new Question(6, 'What aspects of the in-person and online teaching worked well on this unit?');
                        $x->build_text();
                        ?>

                        <?php prevStep(); ?>
                        <?php nextStep(); ?>
                    </fieldset>

                    <fieldset>
                    <?php $x = new Question(7, 'Any other comments or Suggestion?');
                        $x->build_text();
                        ?>

                        <?php prevStep(); ?>
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
    <script>
        var slider = document.getElementById("quest1");
        var output = document.getElementById("val1");
        output.innerHTML = slider.value;

        slider.oninput = function() {
            output.innerHTML = this.value;
        }
    </script>

    <?php include("includes/template/footer.php"); ?>

</body>

</html>