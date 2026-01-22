CREATE DATABASE jasa_joki_db;
USE jasa_joki_db;

-- 1. Tabel User (Admin & Pelanggan)
CREATE TABLE users (
    id_user INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'customer') DEFAULT 'customer',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 2. Tabel Kategori Jasa (Game, Akademik, dll)
CREATE TABLE categories (
    id_category INT PRIMARY KEY AUTO_INCREMENT,
    nama_kategori VARCHAR(50) NOT NULL
);

-- 3. Tabel Produk Jasa
CREATE TABLE services (
    id_service INT PRIMARY KEY AUTO_INCREMENT,
    id_category INT,
    nama_jasa VARCHAR(100) NOT NULL,
    deskripsi TEXT,
    harga DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (id_category) REFERENCES categories(id_category) ON DELETE SET NULL
);

-- 4. Tabel Pesanan (Orders)
CREATE TABLE orders (
    id_order INT PRIMARY KEY AUTO_INCREMENT,
    id_user INT,
    id_service INT,
    tgl_pesan DATETIME DEFAULT CURRENT_TIMESTAMP,
    status_pembayaran ENUM('pending', 'success', 'failed') DEFAULT 'pending',
    status_pengerjaan ENUM('menunggu', 'proses', 'selesai') DEFAULT 'menunggu',
    total_bayar DECIMAL(10, 2),
    FOREIGN KEY (id_user) REFERENCES users(id_user),
    FOREIGN KEY (id_service) REFERENCES services(id_service)
);

-- Insert User
INSERT INTO users (username, email, password, role) VALUES 
('admin_joki', 'admin@mail.com', 'hash_password_admin', 'admin'),
('budi_pelanggan', 'budi@mail.com', 'hash_password_budi', 'customer');

-- Insert Kategori
INSERT INTO categories (nama_kategori) VALUES 
('Wuthering Waves'), 
('Zenless Zone Zero'), 
('Honkai Star Rail');
('Honkai Impact');
('Genhin Impact');

-- Insert Layanan Jasa
INSERT INTO services (id_category, nama_jasa, deskripsi, harga) VALUES 
(1, 'Daily Quest', 'Daily Quest', 15000),
(1, 'Grinding', 'Grinding Material Karakter', 87000),
(2, 'Event', 'Beresin semua event', 92000),
(3, 'Daily Quest', 'Beresin quest nya min', 15000);
(3, 'Grinding', 'Naikin lv karakter sampe mentok', 87000);
(3, 'Story', 'Beresin main quest sama side quest', 105000);

-- Insert Contoh Pesanan (Dummy Transaction)
INSERT INTO orders (id_user, id_service, status_pembayaran, status_pengerjaan, total_bayar) VALUES 
(2, 1, 'success', 'proses', 150000),
(2, 4, 'pending', 'menunggu', 25000);

SELECT SUM(total_bayar) AS total_pendapatan 
FROM orders 
WHERE status_pembayaran = 'success';