<?php
class Message{
    private $content;
    private $date_creation;
    private $date_edit;
    private $idmessages;
    private $status;
    private $author;


    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of idmessages
     */ 
    public function getIdmessages()
    {
        return $this->idmessages;
    }

    /**
     * Set the value of idmessages
     *
     * @return  self
     */ 
    public function setIdmessages($idmessages)
    {
        $this->idmessages = $idmessages;

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
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }
}