<?php

class Departement

{

private $idDepartement;

private $nomDepartement;

private $idRegion;

function __construct($idDepartement, $nomDepartement, $idRegion)

{

$this->idDepartement = $idDepartement;

$this->nomDepartement = $nomDepartement;

$this->idRegion = $idRegion;

}

/**

* Get the value of idDepartement

*/

public function getIdDepartement()

{

return $this->idDepartement;

}

/**

* Set the value of idDepartement

*

* @return self

*/

public function setIdDepartement($idDepartement)

{

$this->idDepartement = $idDepartement;

return $this;

}

/**

* Get the value of nomDepartement

*/

public function getNomDepartement()

{

return $this->nomDepartement;

}

/**

* Set the value of nomDepartement

*

* @return self

*/

public function setNomDepartement($nomDepartement)

{

$this->nomDepartement = $nomDepartement;

return $this;

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

}

?>