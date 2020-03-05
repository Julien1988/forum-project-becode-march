<?php


class Topic implements JsonSerializable{
    private $idtopics;
    private $name;
    private $date_creation;
    private $date_edit;
    private $messages = [];
    private $author;

public function jsonSerialize()
{
    return [
        'name' => $this->name
    ];
}

    /**
     * Get the value of messages
     */ 
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Set the value of messages
     *
     * @return  self
     */ 
    public function setMessages($messages)
    {
        $this->messages = $messages;

        return $this;
    }

    /**
     * Get the value of date_edit
     */ 
    public function getDate_edit()
    {
        return $this->date_edit;
    }

    /**
     * Set the value of date_edit
     *
     * @return  self
     */ 
    public function setDate_edit($date_edit)
    {
        $this->date_edit = $date_edit;

        return $this;
    }

    /**
     * Get the value of date_creation
     */ 
    public function getDate_creation()
    {
        return $this->date_creation;
    }

    /**
     * Set the value of date_creation
     *
     * @return  self
     */ 
    public function setDate_creation($date_creation)
    {
        $this->date_creation = $date_creation;

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
        $this->name = utf8_encode($name);

        return $this;
    }

    /**
     * Get the value of idtopics
     */ 
    public function getIdtopics()
    {
        return $this->idtopics;
    }

    /**
     * Set the value of idtopics
     *
     * @return  self
     */ 
    public function setIdtopics($idtopics)
    {
        $this->idtopics = $idtopics;

        return $this;
    }
}