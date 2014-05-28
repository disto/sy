<?php

namespace kd1\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movies
 *
 * @ORM\Table(name="movies")
 * @ORM\Entity
 */
class Movies
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="release_year", type="integer", nullable=false)
     */
    private $releaseYear;

    /**
     * @var boolean
     *
     * @ORM\Column(name="original", type="boolean", nullable=false)
     */
    private $original;

    /**
     * @var boolean
     *
     * @ORM\Column(name="label", type="boolean", nullable=false)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="backup_location", type="string", length=20, nullable=false)
     */
    private $backupLocation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="on_disk", type="boolean", nullable=false)
     */
    private $onDisk;

    /**
     * @var string
     *
     * @ORM\Column(name="disk_location", type="string", length=20, nullable=false)
     */
    private $diskLocation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="viewed", type="boolean", nullable=false)
     */
    private $viewed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_collection", type="boolean", nullable=false)
     */
    private $inCollection;

    /**
     * @var boolean
     *
     * @ORM\Column(name="burn_again", type="boolean", nullable=false)
     */
    private $burnAgain;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=100, nullable=false)
     */
    private $filename;

    /**
     * @var integer
     *
     * @ORM\Column(name="genre1", type="smallint", nullable=false)
     */
    private $genre1;

    /**
     * @var integer
     *
     * @ORM\Column(name="genre2", type="smallint", nullable=false)
     */
    private $genre2;

    /**
     * @var integer
     *
     * @ORM\Column(name="genre3", type="smallint", nullable=false)
     */
    private $genre3;

    /**
     * @var string
     *
     * @ORM\Column(name="trailer", type="string", length=255, nullable=false)
     */
    private $trailer;

    /**
     * @var integer
     *
     * @ORM\Column(name="imdbid", type="integer", nullable=false)
     */
    private $imdbid;

    /**
     * @var integer
     *
     * @ORM\Column(name="archiveid", type="integer", nullable=false)
     */
    private $archiveid;

    /**
     * @var string
     *
     * @ORM\Column(name="storyline", type="text", nullable=false)
     */
    private $storyline;

    /**
     * @var integer
     *
     * @ORM\Column(name="runtime", type="smallint", nullable=false)
     */
    private $runtime;

    /**
     * @var integer
     *
     * @ORM\Column(name="entry_dateline", type="integer", nullable=false)
     */
    private $entryDateline;

    /**
     * @var string
     *
     * @ORM\Column(name="rating_imdb", type="decimal", precision=3, scale=1, nullable=false)
     */
    private $ratingImdb;

    /**
     * @var string
     *
     * @ORM\Column(name="rating_moviemeter", type="decimal", precision=3, scale=1, nullable=false)
     */
    private $ratingMoviemeter;

    /**
     * @var integer
     *
     * @ORM\Column(name="date_cinema", type="integer", nullable=false)
     */
    private $dateCinema;

    /**
     * @var integer
     *
     * @ORM\Column(name="date_dvd", type="integer", nullable=false)
     */
    private $dateDvd;

    /**
     * @var integer
     *
     * @ORM\Column(name="moviemeter_id", type="integer", nullable=false)
     */
    private $moviemeterId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="wishlist", type="boolean", nullable=false)
     */
    private $wishlist;

    /**
     * @var boolean
     *
     * @ORM\Column(name="retrieve_status", type="boolean", nullable=false)
     */
    private $retrieveStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set name
     *
     * @param string $name
     * @return Movies
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set releaseYear
     *
     * @param integer $releaseYear
     * @return Movies
     */
    public function setReleaseYear($releaseYear)
    {
        $this->releaseYear = $releaseYear;

        return $this;
    }

    /**
     * Get releaseYear
     *
     * @return integer 
     */
    public function getReleaseYear()
    {
        return $this->releaseYear;
    }

    /**
     * Set original
     *
     * @param boolean $original
     * @return Movies
     */
    public function setOriginal($original)
    {
        $this->original = $original;

        return $this;
    }

    /**
     * Get original
     *
     * @return boolean 
     */
    public function getOriginal()
    {
        return $this->original;
    }

    /**
     * Set label
     *
     * @param boolean $label
     * @return Movies
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return boolean 
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set backupLocation
     *
     * @param string $backupLocation
     * @return Movies
     */
    public function setBackupLocation($backupLocation)
    {
        $this->backupLocation = $backupLocation;

        return $this;
    }

    /**
     * Get backupLocation
     *
     * @return string 
     */
    public function getBackupLocation()
    {
        return $this->backupLocation;
    }

    /**
     * Set onDisk
     *
     * @param boolean $onDisk
     * @return Movies
     */
    public function setOnDisk($onDisk)
    {
        $this->onDisk = $onDisk;

        return $this;
    }

    /**
     * Get onDisk
     *
     * @return boolean 
     */
    public function getOnDisk()
    {
        return $this->onDisk;
    }

    /**
     * Set diskLocation
     *
     * @param string $diskLocation
     * @return Movies
     */
    public function setDiskLocation($diskLocation)
    {
        $this->diskLocation = $diskLocation;

        return $this;
    }

    /**
     * Get diskLocation
     *
     * @return string 
     */
    public function getDiskLocation()
    {
        return $this->diskLocation;
    }

    /**
     * Set viewed
     *
     * @param boolean $viewed
     * @return Movies
     */
    public function setViewed($viewed)
    {
        $this->viewed = $viewed;

        return $this;
    }

    /**
     * Get viewed
     *
     * @return boolean 
     */
    public function getViewed()
    {
        return $this->viewed;
    }

    /**
     * Set inCollection
     *
     * @param boolean $inCollection
     * @return Movies
     */
    public function setInCollection($inCollection)
    {
        $this->inCollection = $inCollection;

        return $this;
    }

    /**
     * Get inCollection
     *
     * @return boolean 
     */
    public function getInCollection()
    {
        return $this->inCollection;
    }

    /**
     * Set burnAgain
     *
     * @param boolean $burnAgain
     * @return Movies
     */
    public function setBurnAgain($burnAgain)
    {
        $this->burnAgain = $burnAgain;

        return $this;
    }

    /**
     * Get burnAgain
     *
     * @return boolean 
     */
    public function getBurnAgain()
    {
        return $this->burnAgain;
    }

    /**
     * Set filename
     *
     * @param string $filename
     * @return Movies
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set genre1
     *
     * @param integer $genre1
     * @return Movies
     */
    public function setGenre1($genre1)
    {
        $this->genre1 = $genre1;

        return $this;
    }

    /**
     * Get genre1
     *
     * @return integer 
     */
    public function getGenre1()
    {
        return $this->genre1;
    }

    /**
     * Set genre2
     *
     * @param integer $genre2
     * @return Movies
     */
    public function setGenre2($genre2)
    {
        $this->genre2 = $genre2;

        return $this;
    }

    /**
     * Get genre2
     *
     * @return integer 
     */
    public function getGenre2()
    {
        return $this->genre2;
    }

    /**
     * Set genre3
     *
     * @param integer $genre3
     * @return Movies
     */
    public function setGenre3($genre3)
    {
        $this->genre3 = $genre3;

        return $this;
    }

    /**
     * Get genre3
     *
     * @return integer 
     */
    public function getGenre3()
    {
        return $this->genre3;
    }

    /**
     * Set trailer
     *
     * @param string $trailer
     * @return Movies
     */
    public function setTrailer($trailer)
    {
        $this->trailer = $trailer;

        return $this;
    }

    /**
     * Get trailer
     *
     * @return string 
     */
    public function getTrailer()
    {
        return $this->trailer;
    }

    /**
     * Set imdbid
     *
     * @param integer $imdbid
     * @return Movies
     */
    public function setImdbid($imdbid)
    {
        $this->imdbid = $imdbid;

        return $this;
    }

    /**
     * Get imdbid
     *
     * @return integer 
     */
    public function getImdbid()
    {
        return $this->imdbid;
    }

    /**
     * Set archiveid
     *
     * @param integer $archiveid
     * @return Movies
     */
    public function setArchiveid($archiveid)
    {
        $this->archiveid = $archiveid;

        return $this;
    }

    /**
     * Get archiveid
     *
     * @return integer 
     */
    public function getArchiveid()
    {
        return $this->archiveid;
    }

    /**
     * Set storyline
     *
     * @param string $storyline
     * @return Movies
     */
    public function setStoryline($storyline)
    {
        $this->storyline = $storyline;

        return $this;
    }

    /**
     * Get storyline
     *
     * @return string 
     */
    public function getStoryline()
    {
        return $this->storyline;
    }

    /**
     * Set runtime
     *
     * @param integer $runtime
     * @return Movies
     */
    public function setRuntime($runtime)
    {
        $this->runtime = $runtime;

        return $this;
    }

    /**
     * Get runtime
     *
     * @return integer 
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    /**
     * Set entryDateline
     *
     * @param integer $entryDateline
     * @return Movies
     */
    public function setEntryDateline($entryDateline)
    {
        $this->entryDateline = $entryDateline;

        return $this;
    }

    /**
     * Get entryDateline
     *
     * @return integer 
     */
    public function getEntryDateline()
    {
        return $this->entryDateline;
    }

    /**
     * Set ratingImdb
     *
     * @param string $ratingImdb
     * @return Movies
     */
    public function setRatingImdb($ratingImdb)
    {
        $this->ratingImdb = $ratingImdb;

        return $this;
    }

    /**
     * Get ratingImdb
     *
     * @return string 
     */
    public function getRatingImdb()
    {
        return $this->ratingImdb;
    }

    /**
     * Set ratingMoviemeter
     *
     * @param string $ratingMoviemeter
     * @return Movies
     */
    public function setRatingMoviemeter($ratingMoviemeter)
    {
        $this->ratingMoviemeter = $ratingMoviemeter;

        return $this;
    }

    /**
     * Get ratingMoviemeter
     *
     * @return string 
     */
    public function getRatingMoviemeter()
    {
        return $this->ratingMoviemeter;
    }

    /**
     * Set dateCinema
     *
     * @param integer $dateCinema
     * @return Movies
     */
    public function setDateCinema($dateCinema)
    {
        $this->dateCinema = $dateCinema;

        return $this;
    }

    /**
     * Get dateCinema
     *
     * @return integer 
     */
    public function getDateCinema()
    {
        return $this->dateCinema;
    }

    /**
     * Set dateDvd
     *
     * @param integer $dateDvd
     * @return Movies
     */
    public function setDateDvd($dateDvd)
    {
        $this->dateDvd = $dateDvd;

        return $this;
    }

    /**
     * Get dateDvd
     *
     * @return integer 
     */
    public function getDateDvd()
    {
        return $this->dateDvd;
    }

    /**
     * Set moviemeterId
     *
     * @param integer $moviemeterId
     * @return Movies
     */
    public function setMoviemeterId($moviemeterId)
    {
        $this->moviemeterId = $moviemeterId;

        return $this;
    }

    /**
     * Get moviemeterId
     *
     * @return integer 
     */
    public function getMoviemeterId()
    {
        return $this->moviemeterId;
    }

    /**
     * Set wishlist
     *
     * @param boolean $wishlist
     * @return Movies
     */
    public function setWishlist($wishlist)
    {
        $this->wishlist = $wishlist;

        return $this;
    }

    /**
     * Get wishlist
     *
     * @return boolean 
     */
    public function getWishlist()
    {
        return $this->wishlist;
    }

    /**
     * Set retrieveStatus
     *
     * @param boolean $retrieveStatus
     * @return Movies
     */
    public function setRetrieveStatus($retrieveStatus)
    {
        $this->retrieveStatus = $retrieveStatus;

        return $this;
    }

    /**
     * Get retrieveStatus
     *
     * @return boolean 
     */
    public function getRetrieveStatus()
    {
        return $this->retrieveStatus;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
