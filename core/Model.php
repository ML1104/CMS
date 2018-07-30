<?php

class Model {
    public $description;

    public $votes;

    /**
     * Cheks if task is completed
     * @return mixed
     */
    public function hasVotes()
    {
        return $this->votes;
    }

    /**
     * Complete the task
     */
    public function lowVotes() {
        $this->votes = 0;
    }

    //TODO: Create a method for save

}