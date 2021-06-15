<?php
include 'connection.php';
class Model extends Connection
    {
        public function __construct(){
            $this->conn = $this->get_connection();
        }

        //********** prodi **********
        public function tampil_prodi(){
		$sql = "SELECT * FROM tbl_prodi";
		$bind = $this->conn->query($sql);
		while ($obj = $bind->fetch_object()) { 
			$baris[] = $obj;
		}
		if(!empty($baris)){
			return $baris;
		}
	    } 
        
        public function insert_prodi($kode_prodi, $nama_prodi){
            
            $sql = "INSERT INTO tbl_prodi (kode_prodi, nama_prodi) 
            VALUES ('$kode_prodi', '$nama_prodi')";
            $this->conn->query($sql);
        }

        public function delete_prodi($kode_prodi){ 
		$sql = "DELETE FROM tbl_prodi WHERE kode_prodi='$kode_prodi'";
		$this->conn->query($sql);
	}

    public function edit($kode_prodi){
		$sql = "SELECT * FROM tbl_prodi WHERE kode_prodi='$kode_prodi'";
		$bind = $this->conn->query($sql);
		while ($obj = $bind->fetch_object()) {
			$baris = $obj;
		}
		return $baris;
	}

    public function update_prodi($kode_prodi, $nama_prodi){
		$sql = "UPDATE tbl_prodi SET nama_prodi ='$nama_prodi' WHERE kode_prodi ='$kode_prodi'";
		$this->conn->query($sql);
	}

    
        //********** mata kuliah **********
        public function tampil_mk(){
		$sql = "SELECT * FROM tbl_mk";
		$bind = $this->conn->query($sql);
		while ($obj = $bind->fetch_object()) { 
			$baris[] = $obj;
		}
		if(!empty($baris)){
			return $baris;
		}
	    }

        public function insert_mk($kode_mk, $nama_mk, $jumlah_sks, $semester, $kode_prodi){
            
            $sql = "INSERT INTO tbl_mk (`kode_mk`, `nama_mk`, `jumlah_sks`, `semester`, `kode_prodi`) 
            VALUES ('$kode_mk', '$nama_mk', '$jumlah_sks', '$semester', '$kode_prodi')";
            $this->conn->query($sql);
        }

        public function delete_mk($kode_mk){ 
            $sql = "DELETE FROM `tbl_mk` WHERE kode_mk='$kode_mk'";
            $this->conn->query($sql);
        }

        public function edit_mk($kode_mk){
            $sql = "SELECT * FROM tbl_mk WHERE kode_mk='$kode_mk'";
            $bind = $this->conn->query($sql);
            while ($obj = $bind->fetch_object()) {
                $baris = $obj;
            }
            return $baris;
        }

        public function update_mk($kode_mk, $nama_mk, $jumlah_sks, $semester, $kode_prodi){
            $sql = "UPDATE tbl_mk SET nama_mk ='$nama_mk', jumlah_sks='$jumlah_sks', semester='$semester', kode_prodi='$kode_prodi'
            WHERE kode_prodi ='$kode_mk'";
            $this->conn->query($sql);
        }

        //********** jadwal **********
        public function tampil_jadwal(){
        $sql = "SELECT * FROM tbl_jadwal";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) { 
            $baris[] = $obj;
        }
        if(!empty($baris)){
            return $baris;
        }
        }

        public function insert_jadwal($id, $jadwal_id, $kode_dosen, $hari, $tahun_akademik, $semester, 
                                        $kode_mk, $sesi, $jam_masuk, $jam_keluar, $kelas, $ruang, $stat, $kelas_sesi){
            
            $sql = "INSERT INTO tbl_jadwal (`id`, `jadwal_id`, `kode_dosen`, `hari`, `tahun_akademik`, `semester`, `kode_mk`, `sesi`, 
                                            `jam_masuk`, `jam_keluar`, `kelas`, `ruang`, `stat`, `kelas_sesi`) 
            VALUES ('$id', '$jadwal_id', '$kode_dosen', '$hari', '$tahun_akademik', '$semester', '$kode_mk', 
            '$sesi', '$jam_masuk', '$jam_keluar', '$kelas', '$ruang', '$stat', '$kelas_sesi')";
            $this->conn->query($sql);
        }

        
        public function delete_jadwal($id){ 
            $sql = "DELETE FROM tbl_jadwal WHERE id='$id'";
            $this->conn->query($sql);
        }

        public function edit_jadwal($id){
            $sql = "SELECT * FROM tbl_jadwal WHERE id='$id'";
            $bind = $this->conn->query($sql);
            while ($obj = $bind->fetch_object()) {
                $baris = $obj;
            }
            return $baris;
        }

        public function update_jadwal($id, $jadwal_id, $kode_dosen, $hari, $tahun_akademik, $semester, 
        $kode_mk, $sesi, $jam_masuk, $jam_keluar, $kelas, $ruang, $stat, $kelas_sesi){
            $sql = "UPDATE tbl_prodi SET jadwal_id ='$jadwal_id', kode_dosen='$kode_dosen', hari='$hari', tahun_akademik='$tahun_akademik', 
            semester='$semester', kode_mk ='$kode_mk', sesi='$sesi', jam_masuk='$jam_masuk', jam_keluar='$jam_keluar', 
            kelas='$kelas', ruang='$ruang', stat='$stat', kelas_sesi ='$kelas_sesi'
            WHERE id ='$id'";
            $this->conn->query($sql);
        }


        //********** absen **********
        public function tampil_absen(){
        $sql = "SELECT * FROM tbl_absen";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) { 
            $baris[] = $obj;
        }
        if(!empty($baris)){
            return $baris;
        }
        }
        
        public function insert_absen($id_absen, $tgl_absen, $masuk, $keluar, $kode_dosen, $sesi, $kelas_sesi){
            
            $sql = "INSERT INTO tbl_absen (`id_absen`, `tgl_absen`, `masuk`, `keluar`, `kode_dosen`, `sesi`, `kelas_sesi`) 
            VALUES ('$id_absen', '$tgl_absen', '$masuk', '$keluar', '$kode_dosen', '$sesi', '$kelas_sesi')";
            $this->conn->query($sql);
        }

        public function delete_absen($id_absen){ 
            $sql = "DELETE FROM tbl_absen WHERE id_absen='$id_absen'";
            $this->conn->query($sql);
        }

        public function edit_absen($id_absen){
            $sql = "SELECT * FROM tbl_absen WHERE id_absen='$id_absen'";
            $bind = $this->conn->query($sql);
            while ($obj = $bind->fetch_object()) {
                $baris = $obj;
            }
            return $baris;
        }

    public function update_absen($id_absen, $tgl_absen, $masuk, $keluar, $kode_dosen, $sesi, $kelas_sesi){
		$sql = "UPDATE tbl_absen SET tgl_absen ='$tgl_absen' , masuk='$masuk', keluar='$keluar', kode_dosen='$kode_dosen', sesi='$sesi', kelas_sesi='$kelas_sesi'
         WHERE id_absen='$id_absen'";
		$this->conn->query($sql);
	}

        //********** dosen **********
        public function tampil_dosen(){
        $sql = "SELECT * FROM tbl_dosen";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) { 
            $baris[] = $obj;
        }
        if(!empty($baris)){
            return $baris;
        }
        }

        public function insert_dosen($kode_dosen, $nidn, $nipy, $nama_dosen, $kode_prodi){
            
            $sql = "INSERT INTO tbl_dosen (kode_dosen, nidn, nipy, nama_dosen, kode_prodi) 
            VALUES ('$kode_dosen', '$nidn', '$nipy', '$nama_dosen', '$kode_prodi')";
            $this->conn->query($sql);
        }

        public function delete_dosen($kode_dosen){ 
            $sql = "DELETE FROM tbl_dosen WHERE kode_dosen='$kode_dosen'";
            $this->conn->query($sql);
        }

        public function edit_dosen($kode_dosen){
            $sql = "SELECT * FROM tbl_dosen WHERE kode_dosen='$kode_dosen'";
            $bind = $this->conn->query($sql);
            while ($obj = $bind->fetch_object()) {
                $baris = $obj;
            }
            return $baris;
        }

        public function update_dosen($kode_dosen, $nidn, $nipy, $nama_dosen, $kode_prodi){
            $sql = "UPDATE tbl_absen SET nidn='$nidn', nipy='$nipy', nama_dosen='$nama_dosen', kode_prodi='$kode_prodi'
             WHERE kode_dosen ='$kode_dosen'";
            $this->conn->query($sql);
        }

    }


