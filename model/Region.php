<?php

class Region

{

private $idRegion;

private $nomRegion;

private $nouvRegion;

function __construct($idRegion, $nomRegion, $nouvRegion)

{

$this->idRegion = $idRegion;

$this->nomRegion = $nomRegion;

$this->nouvRegion = $nouvRegion;

}

/**

* Get the value of idRegion

*/

public function getIdRegion()

{

return $this->idRegion;

}

/**

* Set the value of idRegion

*

* @return self

*/

public function setIdRegion($idRegion)

{

$this->idRegion = $idRegion;

return $this;

}

/**

* Get the value of nomRegion

*/

public function getNomRegion()

{

return $this->nomRegion;

}

/**

* Set the value of nomRegion

*

* @return self

*/

public function setNomRegion($nomRegion)

{

$this->nomRegion = $nomRegion;

return $this;

}

/**

* Get the value of nouvRegion

*/

public function getNouvRegion()

{

return $this->nouvRegion;

}

/**

* Set the value of nouvRegion

*

* @return self

*/

public function setNouvRegion($nouvRegion)

{

$this->nouvRegion = $nouvRegion;

return $this;

}

}

?>