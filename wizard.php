<?php

/*	header ("Content-Type:text/xml");


	$doc = new DOMDocument('1.0');
	$doc->formatOutput = true;

	$root = $doc->createElement('terrain');
	$root = $doc->appendChild($root);

	foreach ($_POST as $key => $value) {
		$element = $doc->createElement($key);
		$element = $root->appendChild($element);
		$text = $doc->createTextNode($value);
		$text = $element->appendChild($text);
	}

	echo $doc->saveXML();*/

	$mapWidthInBoxes = 8;
	$mapHeightInBoxes = 8;
	$mapTotalBoxes = $mapWidthInBoxes * $mapHeightInBoxes;
	$minTerrainX = $_POST['terrainInDZ'] == 1 ? 1 : $mapWidthInBoxes - ($mapWidthInBoxes - 3);
	$maxTerrainX = $_POST['terrainInDZ'] == 1 ? $mapWidthInBoxes : $mapWidthInBoxes - 2;

	$terrainArray = array();
	$terrainPiecesInThisMap = 6;
	$lastTableSide = "left";

	class Terrain {
		private $id = 0;
		private $type = "Not Set";
		private $row = 0;
		private $col = 0;
		private $tdId;
		private $canvasId;
		private $tableSide;
		private $rightMostColumn;
		private $leftMostColumn;


		public function setId($value) {
			$this->id = $value;
		}

		public function getId() {
			return $this->id;
		}

		public function setType($value) {
			if ($value) {
				$this->type = $value;
				$this->tdLabel = $value;
				$this->picName = 'img/' . strtolower($value) . '1.png';
			}
			return $this->type;
		}

		public function getType() {
			return $this->type;
		}

		public function setCol() {
			global $maxTerrainX;
        	global $minTerrainX;
        	global $mapWidthInBoxes;
        	global $lastTableSide;

			if ($lastTableSide == "right") {
				$rightMostColumn = ($mapWidthInBoxes / 2);
				$leftMostColumn = $minTerrainX;
				$this->tableSide = "left";
				/*echo "Placing: " . $this->type . " (" . $this->tableSide . ") l: " . $leftMostColumn . "(minX:" . $minTerrainX . ") r: " . $rightMostColumn . " (maxX:" . $maxTerrainX . " /2)<br/>";*/
			}
			else {
				$rightMostColumn = $maxTerrainX;
				$leftMostColumn = ($mapWidthInBoxes / 2) + 1;
				$this->tableSide = "right";
				/*echo "Placing: " . $this->type . " (" . $this->tableSide . ") l: " . $leftMostColumn . "(mapWiB:" . $mapWidthInBoxes . " / 2) r: " . $rightMostColumn . " (maxX:" . $maxTerrainX . ")<br/>";*/
			}

			$this->col = rand($leftMostColumn,$rightMostColumn);
			return $this->col;
		}

		public function getTableSide() {
			return $this->tableSide;
		}

		public function getCol() {
			return $this->col;
		}

		public function setRow() {
			global $mapHeightInBoxes;
			$this->row = rand(1,$mapHeightInBoxes);
			return $this->row;
		}

		public function getRow() {
        	return $this->row;
       	}

       	public function setTdId($value) {
			if ($value) {
				$this->tdId = 'c' . $value;
			}
			return $this->tdId;
		}

		public function getTdId() {
			return $this->tdId;
		}

		public function setCanvasId($value) {
			if ($value) {
				$this->canvasId = 'c' . $value . $this->picName;
			}
        	return $this->canvasId;
        }

	   	public function getCanvasId() {
			return $this->canvasId;
		}

		public function getPicName() {
			return  $this->picName;
		}


		public function __toString() {
			$oStr .= "ID: " . $this->id . "<br/>";
			$oStr .= "Type: " . $this->type . "<br/>";
			$oStr .= "Column: " . $this->col . "<br/>";
			$oStr .= "Row: " . $this->row . "<br/>";
			$oStr .= "tdId: " . $this->tdId . "<br/>";
			$oStr .= "canvasId: " . $this->canvasId . "<br/>";

			return $oStr;
		}
	}

	/* Create an array of terrain pieces */
	foreach ($_POST as $key => $value) {
		/*echo "Key($key): $value <br/>";*/
		/* Only count terrain pieces from $_POST! */
		if( $value && preg_match('#^t([A-Z].*)#',$key,$match) ) {
			$totalTerrainPieces += $value;

		    /* Create a Terrain object for each one */
			for ($i = 0; $i < $value; $i++ ) {
				$terrainPiece = new Terrain;
				$terrainPiece->setId($p++);
				$terrainPiece->setType($match[1]);
				$terrainArray[] = $terrainPiece;
			}
		}
	}

	/* randomize the terrain pieces */
	shuffle($terrainArray);
	$pieceCount = 1;

	$plotArray = array();
	$terrainLocations = array();

	foreach ($terrainArray as $piece) {
		/*echo "<br/>----------------[" . $pieceCount  . "] of [" . $terrainPiecesInThisMap . "]------------------<br/>";*/

		do {
			/* Make sure we aren't stacking pieces */
			$plot = $piece->setRow() . $piece->setCol();
				/*echo "Piece($pieceCount): rc: " . $plot . "(" . in_array($plot,$plotArray) . ") <br/>";*/
		} while ( in_array($plot, $plotArray) );
		$plotArray[] = $plot;

		$piece->setTdId($plot);
		$piece->setCanvasId($plot);

		/* keep track of which side we put the last piece on so we can balance the terrain */
		$lastTableSide = $piece->getTableSide();

		/* Place the terrain piece in the proper location so we can build the map */
		$terrainLocations[$plot] = $piece;

		/*echo $piece;*/
		if ($pieceCount++ == $terrainPiecesInThisMap) {
			break;
		}
	}

   	$oTable .= '<table id="wizardTable">
		<div id="leftPlayer" class="deploymentSecond deploymentZone deploymentLeft"></div>
		<div id="rightPlayer" class="deploymentFirst deploymentZone deploymentRight"></div>
		<tr>
			<th colspan="8">
				<div class="form-group-sm">
					<div class="checkboxSlider checkboxDZ checkboxControl">
						<input type="checkbox" value="1" id="checkboxDZInput" onload="toggleDZ()"  name="" />
						<label for="checkboxDZInput"></label>
					</div>
					<div id="checkboxDZSwap" class="checkboxSlider checkboxDZSwap checkboxControl">
						<input type="checkbox" value="1" id="checkboxDZSwapInput" name="" />
						<label for="checkboxDZSwapInput"></label>
					</div>
				</div>
			</th>
		</tr>';


	for ($row=1;$row <= $mapHeightInBoxes; $row++) {
		$oTable .= "<tr>";
		for ($col=1; $col <= $mapWidthInBoxes; $col++) {

			if( in_array( $row . $col, $plotArray ) ) {
				/*echo $row . $col . " is in plotArray and DZ: " . $_POST['terrainInDZ'] . " MinX: " . $minTerrainX . " MaxX: " . $maxTerrainX . "<br/>";*/
				$terrainPiece = $terrainLocations[$row . $col];
				$oTable .= 	"<td id='" . $terrainPiece->getTdId() . "'><img src='" . $terrainPiece->getPicName() . "'/><br/>" . $terrainPiece->getType() . "</td>";
				/*  echo "+++++++++++<br/>";
					echo $terrainPiece;
					echo "+++++++++++<br/>++++++++++<br/><br/>";*/
			}
			else {
					$oTable .= 	"<td id='c" . $row . $col . "' ></td>";
			}
		}
		$oTable .= "</tr>";
	}

	$oTable .= "</table>";

	echo $oTable;

?>