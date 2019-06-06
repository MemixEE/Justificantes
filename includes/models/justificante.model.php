<?php

class Justificante {

	public $id;
	public $numeroDeCuenta;
	public $fechaCreacion;
	public $fechaVigencia;
	public $fechaInicial;
	public $fechaFinal;
	public $correoTutor;
	public $correoCordinador;
	public $motivo;
	public $descripcion;
	public $evidencia;
	public $status;

	public static function getBySql($sql) {

		// Open database connection
		$database = new Database();

		// Execute database query
		$result = $database->query($sql);

		// Initialize object array
		$objects = array();

		// Fetch objects from database cursor
		while ($object = $result->fetch_object()) {
			$objects[] = $object;
		}

		// Close database connection
		$database->close();

		// Return objects
		return $objects;
	}


	public static function getAll() {

		// Build database query
		$sql = 'select * from justificante';

		// Return objects
		return self::getBySql($sql);
	}

	public static function getById($id) {

		// Initialize result array
		$result = array();

		// Build database query
		$sql = "select * from justificante where id = ?";

		// Open database connection
		$database = new Database();

		// Get instance of statement
		$statement = $database->stmt_init();

		// Prepare query
		if ($statement->prepare($sql)) {

			// Bind parameters
			$statement->bind_param('i', $id);

			// Execute statement
			$statement->execute();

			// Bind variable to prepared statement
		$statement->bind_result($id, $numeroDeCuenta, $fechaCreacion, $fechaVigencia,$fechaInicial, $fechaFinal,$correoTutor,$correoCordinador,$motivo,$descripcion,$evidencia,$status);

			// Populate bind variables
			$statement->fetch();

			// Close statement
			$statement->close();
		}

		// Close database connection
		$database->close();

		// Build new object
		$object = new self;
		$object->id = $id;
		$object->numeroDeCuenta =$numeroDeCuenta;
		$object->fechaCreacion=$fechaCreacion;
		$object->fechaVigencia=$fechaVigencia;
		$object->fechaInicial=$fechaInicial;
		$object->fechaFinal=$fechaFinal;
		$object->correoTutor=$correoTutor;
		$object->correoCordinador=$correoCordinador;
		$object->motivo=$motivo;
		$object->descripcion=$descripcion;
		$object->evidencia=$evidencia;
		$object->status=$status;

		return $object;
	}

	public function insert() {

		// Initialize affected rows
		$affected_rows = FALSE;

		// Build database query
		$sql = "insert into justificante (numeroDeCuenta,fechaVigencia,fechaInicial, fechaFinal,correoTutor,correoCordinador,motivo,descripcion,evidencia,status) values (?,?,?,?,?,?,?,?,?,?)";

		// Open database connection
		$database = new Database();

		// Get instance of statement
		$statement = $database->stmt_init();

		// Prepare query
		if ($statement->prepare($sql)) {

			// Bind parameters
			$statement->bind_param('isssssssss', $this->numeroDeCuenta,$this->fechaVigencia,$this->fechaInicial,$this->fechaFinal,$this->correoTutor,$this->correoCordinador,$this->motivo,$this->descripcion,$this->evidencia,$this->status);

			// Execute statement
			$statement->execute();

			// Get affected rows
			$affected_rows = $database->affected_rows;

			// Close statement
			$statement->close();
		}

		// Close database connection
		$database->close();

		// Return affected rows
		return $affected_rows;
	}

	public function update() {

		// Initialize affected rows
		$affected_rows = FALSE;

		// Build database query
		$sql = "update justificante set numeroDeCuenta = ?, fechaVigencia = ?, fechaInicial = ?, fechaFinal = ?, correoTutor = ? ,correoCordinador = ? ,motivo = ? ,descripcion = ?, evidencia = ?, status = ? where id = ?";

		// Open database connection
		$database = new Database();

		// Get instance of statement
		$statement = $database->stmt_init();

		// Prepare query
		if ($statement->prepare($sql)) {

			// Bind parameters
			$statement->bind_param('isssssssssi',$this->numeroDeCuenta, $this->fechaVigencia, $this->fechaInicial, $this->fechaFinal, $this->correoTutor, $this->correoCordinador, $this->motivo, $this->descripcion, $this->evidencia, $this->status,$this->id);

			// Execute statement
			$statement->execute();

			// Get affected rows
			$affected_rows = $database->affected_rows;

			// Close statement
			$statement->close();
		}

		// Close database connection
		$database->close();

		// Return affected rows
		return $affected_rows;

	}

	public function delete() {

		// Initialize affected rows
		$affected_rows = FALSE;

		// Build database query
		$sql = "delete from justificante where id = ?";

		// Open database connection
		$database = new Database();

		// Get instance of statement
		$statement = $database->stmt_init();

		// Prepare query
		if ($statement->prepare($sql)) {

			// Bind parameters
			$statement->bind_param('i', $this->id);

			// Execute statement
			$statement->execute();

			// Get affected rows
			$affected_rows = $database->affected_rows;

			// Close statement
			$statement->close();
		}

		// Close database connection
		$database->close();

		// Return affected rows
		return $affected_rows;

	}

	public function save() {

		// Check object for id
		if (isset($this->id)) {

			// Return update when id exists
			return $this->update();

		} else {

			// Return insert when id does not exists
			return $this->insert();
		}
	}
}
