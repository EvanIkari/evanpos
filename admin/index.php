<?php
session_start();

require 'config.php';

$stmt = $pdo->query('SELECT * FROM admins');
$data = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>EpanStore</title>
    <link rel="icon" href="../logo.jpg" type="image/x-icon">
</head>
<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-semibold text-gray-800">Daftar Admin</h1>
            <div>
                <a href="../dashboard.php" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-lg transition duration-200">Kembali</a>
                <a href="create.php" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg ml-4 transition duration-200">Tambah Baru</a>
            </div>
        </div>
        <table class="min-w-full bg-white rounded-lg overflow-hidden shadow">
            <thead class="bg-gray-200">
                <tr>
                    <th class="py-3 px-4 text-left text-gray-600">ID</th>
                    <th class="py-3 px-4 text-left text-gray-600">Email</th>
                    <th class="py-3 px-4 text-left text-gray-600">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row): ?>
                    <tr class="hover:bg-gray-100 transition duration-200">
                        <td class="py-3 px-4 border-b"><?= htmlspecialchars($row['id']) ?></td>
                        <td class="py-3 px-4 border-b"><?= htmlspecialchars($row['email']) ?></td>
                        <td class="py-3 px-4 border-b">
                            <a href="update.php?id=<?= $row['id'] ?>" class="text-green-500 hover:text-green-700 transition duration-200">Edit</a>
                            <a href="delete.php?id=<?= $row['id'] ?>" class="text-red-500 hover:text-red-700 ml-4 transition duration-200" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>