<?php
class Board{
    private $name;
    private $description;
    private $topics = [];
    private $idboards;

    /**
     * Get the value of idboards
     */ 
    public function getIdboards()
    {
        return $this->idboards;
    }

    /**
     * Set the value of idboards
     *
     * @return  self
     */ 
    public function setIdboards($idboards)
    {
        $this->idboards = $idboards;

        return $this;
    }

    /**
     * Get the value of topics
     */ 
    public function getTopics()
    {
        return $this->topics;
    }

    /**
     * Set the value of topics
     *
     * @return  self
     */ 
    public function setTopics($topics)
    {
        $this->topics = $topics;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}