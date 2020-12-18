<?php
//Question class
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
        echo '<input type="range" class="slider" min="1" max="10" value="5" name="quest' . $this->num . '" id="quest' . $this->num . '" placeholder="Question ' . $this->num . '" required autofocus>
        ';
        echo '</div>';
        echo '</div>';
        echo '<script>',
       ' var slider = document.getElementById("quest' . $this->num . '");',
       ' var output = document.getElementById("val' . $this->num . '");',
        'output.innerHTML = slider.value;',
        'slider.oninput = function() {',
        'output.innerHTML = this.value; }</script>';
    }

    function build_text()
    {
        echo '<h2>Question ' . $this->num . ':' . $this->title . '</h2>';
        echo '<div class="form-label-group">';
        echo  '<textarea name="quest' . $this->num . '" id="quest' . $this->num . '" class="form-control" placeholder="quest' . $this->num . '" required rows="4"> </textarea>';
        echo '</div>';
    }
}

?>
