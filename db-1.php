<?php

class Database {

    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db   = 'lelang';
    private $koneksi;

    /**
     * connect()
     * Method untuk mengkoneksikan website ke database
     *
     * @return void
     */
    public function connect()
    {
        $this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db);

        if ( mysqli_connect_errno() ) {
            echo "Terjadi kesalahan pada database!".mysqli_connect_error($this->koneksi);
        }

        return $this->koneksi;
    }


    /**
     * getAll()
     * Method untuk mengambil semua data pada suatu tabel
     *
     * @param string $table nama tabel
     * @return array
     */
    public function getAll($table)
    {
        $koneksi = $this->connect();

        $query = mysqli_query($koneksi, "SELECT * FROM {$table}");

        $result = [];
        while ( $row = mysqli_fetch_array($query, MYSQLI_ASSOC) ) {
            $result[] = $row;
        }
        return $result;
    }

    /**
     * getById()
     * Method untuk mengambil data berdasarkan ID
     *
     * @param string $table nama tabel
     * @param array $id nama kolom dan ID
     * @return array
     */
    public function getById($table, $id)
    {
        $koneksi = $this->connect();

        $where = [];
        foreach ($id as $key => $value) {
            $where[] = "{$key} = '$value'";
        }
        $fields = implode(' ', $where);
    
        $query = mysqli_query($koneksi, "SELECT * FROM {$table} WHERE $fields");
        $result = [];
        while ( $row = mysqli_fetch_array($query, MYSQLI_ASSOC) ) {
            $result[] = $row;
        }
        return $result;
    }


    /**
     * insert()
     * Method untuk memasukkan data pada suatu tabel
     *
     * @param string $table nama tabel
     * @param array $data data yg akan dimasukkan
     * @return int Jumlah data yang terpengaruh
     */
    public function insert($table, $data)
    {
        $koneksi = $this->connect();

        $values = [];
        foreach ($data as $key => $value) {
            $values[] = "'$value' ";
        }
        $new_values = implode(', ', $values);

        $query = mysqli_query($koneksi, "INSERT INTO {$table} VALUES({$new_values})");

        return mysqli_affected_rows($koneksi);
    }

    /**
     * update()
     *
     * @param string $table tablename
     * @param array $data data yg akan dimasukkan
     * @param array $id nama kolom dan id
     * @return int Jumlah data yang terpengaruh
     */
    public function update($table, $data, $id)
    {
        $koneksi = $this->connect();

        //Separating fields and values
        $values = [];
        foreach ($data as $key => $value) {
            $values[] = "{$key} = '$value'";
        }
        $new_values = implode(' , ', $values);

        //Separating PK Column and Identifier
        $where = [];
        foreach ($id as $key => $value) {
            $where[] = "{$key} = '$value'";
        }
        $fields = implode(' ', $where);

        $query = mysqli_query($koneksi, "UPDATE {$table} SET {$new_values} WHERE {$fields}");

        return mysqli_affected_rows($koneksi);
    }

    /**
     * delete()
     * Method untuk menghapus data berdasarkan ID
     *
     * @param string $table
     * @param array $id
     * @return int Jumlah data yang terpengaruh
     */
    public function delete($table, $id)
    {
        $koneksi = $this->connect();

        $where = [];
        foreach ($id as $key => $value) {
            $where[] = "{$key} = '$value'";
        }
        $fields = implode(' ', $where);
    
        $query = mysqli_query($koneksi, "DELETE FROM {$table} WHERE {$fields}");
    
        return mysqli_affected_rows($koneksi);
    }

}