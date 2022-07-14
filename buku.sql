CREATE TABLE tb_buku (
	buku_id TINYINT(3) NOT NULL AUTO_INCREMENT,
	buku_kode TINYINT(3) NOT NULL,
	buku_judul VARCHAR(100) NOT NULL,
	buku_terbit DATE,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(buku_id),
	UNIQUE KEY(buku_kode)
	
);

CREATE TABLE tb_pengarang (
	pengarang_id TINYINT(3) NOT NULL AUTO_INCREMENT,
	pengarang_id_buku TINYINT(3) NOT NULL,
	pengarang_nama VARCHAR(100) NOT NULL,
	pengarang_daerah VARCHAR(100) NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(pengarang_id),
	FOREIGN KEY(pengarang_id_buku) REFERENCES tb_buku(buku_id) ON UPDATE CASCADE ON DELETE RESTRICT
);	