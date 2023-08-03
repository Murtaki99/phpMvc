<?php
class Student_model
{
    // private $student=[
    //     [
    //         "nama"=>"Murtaki",
    //         "nim"=>"1902011021",
    //         "jurusan"=>"Teknik Informatika",
    //     ],
    //     [
    //         "nama" => "Murtaki Shihab",
    //         "nim" => "1902011022",
    //         "jurusan" => "Teknik Informatika",
    //     ],
    //     [
    //         "nama" => "Murtaki SQ",
    //         "nim" => "1902011023",
    //         "jurusan" => "Teknik Informatika",
    //     ]
    //     ];
    // private $dbh; //database handler
    // private $stmt;
    // public function __construct()
    // {
    //     //data source name
    //     $dsn = 'mysql:host=localhost;dbname=student';
    //     try {
    //         $this->dbh = new PDO($dsn, 'root', '');
    //     } catch (PDOException $e) {
    //         die($e->getMessage());
    //     }
    // }

    // public function getAllStudent()
    // {
    //     $this->stmt = $this->dbh->prepare('SELECT * FROM tb_mhs');
    //     $this->stmt->execute();
    //     return $this->stmt->fetchAll((PDO::FETCH_ASSOC));
    // }

    private $table = 'tb_mhs';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllStudent()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY id DESC ');
        return $this->db->resultSet();
    }

    public function getById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id =:id ');
        $this->db->bind('id', $id);
        return $this->db->singel();
    }

    public function createData($data)
    {
        $query = "INSERT INTO " . $this->table . " (nama, nim, jurusan, angkatan) VALUES (:nama, :nim, :jurusan, :angkatan)";
        $this->db->query($query);

        $this->db->bind(':nama', $data['nama']);
        $this->db->bind(':nim', $data['nim']);
        $this->db->bind(':jurusan', $data['jurusan']);
        $this->db->bind(':angkatan', $data['angkatan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateData($data)
    {
        $query = "UPDATE "  . $this->table . " SET 
                            nama = :nama, 
                            nim = :nim, 
                            jurusan = :jurusan, 
                            angkatan = :angkatan
                             WHERE id = :id";
        $this->db->query($query);

        $this->db->bind(':nama', $data['nama']);
        $this->db->bind(':nim', $data['nim']);
        $this->db->bind(':jurusan', $data['jurusan']);
        $this->db->bind(':angkatan', $data['angkatan']);
        $this->db->bind(':id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteData($id)
    {
        $query = "DELETE FROM tb_mhs WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariStudent()
    {
        $keyword = $_POST['keyword'];
        $query   = "SELECT * FROM tb_mhs WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
