<?php
class Question
{
    public int $num;
    public string $title;

    function __construct(int $num, string $title)
    {
        $this->title = $title;
        $this->num = $num;
    }

    function build()
    {
        echo '<h2>Question ' . $this->num . ':' . $this->title . '</h2>';
        echo '<div class="form-label-group">';
        echo '<p for="quest' . $this->num . '">Value: <span id="val' . $this->num . '"></span></p>';
        echo '<div class="slidecontainer">';
        echo  '<input type="range" class="slider" min="1" max="10" value="5" name="data[quest' . $this->num . ']" id="quest' . $this->num . '" placeholder="Question ' . $this->num . '" required autofocus>
        ';
        echo '</div>';
        echo '</div>';
    }

    function build_text()
    {
        echo '<h2>Question ' . $this->num . ':' . $this->title . '</h2>';
        echo '<div class="form-label-group">';
        echo  '<textarea name="data[quest' . $this->num . ']" id="quest' . $this->num . '" class="form-control" placeholder="quest' . $this->num . '" required rows="4"> </textarea>';
        echo '</div>';
    }
}


// <h2>Question 1: I can see how this unit contributes to my overall programme of study.</h2>
//                         <div class="form-label-group">
//                             <p for="quest1">Value: <span id="val1"></span></p>

//                             <div class="slidecontainer">
//                                 <input type="range" class="slider" min="1" max="10" value="5" name="data[quest1]" id="quest1" placeholder="Question 1" required autofocus>
//                             </div>
//                         </div>
//                         <div class="form-label-group">
//                             <input type="text" name="data[lname]" id="lname" class="form-control" placeholder="last name" required>
//                             <label for="lname">Last Name</label>
//                         </div>
//                         <div class="form-label-group">
//                             <input type="number" name="data[studid]" id="studid" class="form-control" placeholder="studid" required>
//                             <label for="studid">Student Number</label>
//                         </div>
