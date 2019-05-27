<?php

class Motivo {

	public $id;
	public $motivo;


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
		$sql = 'select * from motivo';

		// Return objects
		return self::getBySql($sql);
	}

	public static function getById($id) {

		// Initialize result array
		$result = array();

		// Build database query
		$sql = "select * from motivo where id = ?";

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
			$statement->bind_result($id, $motivo);

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
		$object->motivo = $motivo;
		return $object;
	}

	public function insert() {

		// Initialize affected rows
		$affected_rows = FALSE;

		// Build database query
		$sql = "insert into motivo (motivo) values (?)";

		// Open database connection
		$database = new Database();

		// Get instance of statement
		$statement = $database->stmt_init();

		// Prepare query
		if ($statement->prepare($sql)) {

			// Bind parameters
			$statement->bind_param('s', $this->motivo);

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
		$sql = "update motivo set motivo = ? where id = ?";

		// Open database connection
		$database = new Database();

		// Get instance of statement
		$statement = $database->stmt_init();

		// Prepare query
		if ($statement->prepare($sql)) {

			// Bind parameters
			$statement->bind_param('si', $this->motivo, $this->id);

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
		$sql = "delete from motivo where id = ?";

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
