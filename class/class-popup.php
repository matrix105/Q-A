<?php

class Popup
{

    public string $title, $text;

    function __construct(string $title, string $text)
    {
        $this->title = $title;
        $this->text = $text;
    }

    function build()
    {

        echo '<script>',
            'function myFunction() {',
            ' var popup = document.getElementById("myPopup");',
            ' popup.classList.toggle("show");',
            '}',
            '</script>';
        echo '<div class="popup popup btn btn-primary" onclick="myFunction()">' . $this->title;
        echo '<span class="popuptext" id="myPopup">' . $this->text . '</span></div>';
    }
}
