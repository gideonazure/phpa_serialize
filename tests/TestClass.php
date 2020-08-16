<?php


class TestClass
{
    public $project;
    public $goals;
    public $result;
    public $stack;


    /**
     * serializeTest constructor.
     * @param $project
     * @param $goals
     * @param $result
     * @param $stack
     */
    public function __construct($project, $goals, $result, $stack)
    {
        $this->project = $project;
        $this->goals = $goals;
        $this->result = $result;
        $this->stack = $stack;
    }


}