<?php
class CommitsCreator
{
    private $nodeHtml;

    /**
     * this method creates html text nodes
     * @param string $date message date
     * @param string $text text of the comment form
     * @return string returns a node with datea and comment
     */
    public function addCommit($date, $text)
    {
        if ($text != ""){
            $this->nodeHtml ="<li class='home__card'> <h2 class='home__subtitle'>$date</h2> <p class='home__text'>$text</p></li>";
            return $this->nodeHtml;
        }

    }
}