<?php

/* 
 * Modelas las redes sociales de los usuarios.
 */

class RedesSociales {
    private $facebook;  //nombre de usuario en facebook
    private $twitter;   //nombre de usuario en twitter
    private $linkedin;  //nombre de usuario en linkedin
    private $instagram; //nombre de usuario en instagram
    private $pinterest; //nombre de usuario en pinterest
    private $youtube;   //nommbre de canal en Youtube
    
    public function getFacebook() {
        return $this->facebook;
    }

    public function getTwitter() {
        return $this->twitter;
    }

    public function getLinkedin() {
        return $this->linkedin;
    }

    public function getInstagram() {
        return $this->instagram;
    }

    public function getPinterest() {
        return $this->pinterest;
    }

    public function getYoutube() {
        return $this->youtube;
    }

    public function setFacebook($facebook) {
        $this->facebook = $facebook;
    }

    public function setTwitter($twitter) {
        $this->twitter = $twitter;
    }

    public function setLinkedin($linkedin) {
        $this->linkedin = $linkedin;
    }

    public function setInstagram($instagram) {
        $this->instagram = $instagram;
    }

    public function setPinterest($pinterest) {
        $this->pinterest = $pinterest;
    }

    public function setYoutube($youtube) {
        $this->youtube = $youtube;
    }


    
}

?>