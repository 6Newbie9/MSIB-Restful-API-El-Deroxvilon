<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restful-API Blog MSIB</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-purple-600 text-white py-4">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold">Restful-API Blog MSIB</h1>
            <p class="text-lg">Dokumentasi Lengkap untuk Menggunakan API</p>
        </div>
    </header>
    <div class="container mx-auto p-6">
        <!-- Peringatan -->
        <div class="bg-yellow-200 border-l-4 border-yellow-500 p-4 mb-6">
            <p class="text-yellow-800 font-semibold">Peringatan: API ini hanya dapat diakses melalui aplikasi seperti Postman, Firebase, dan alat sejenis. Akses langsung melalui browser tidak didukung.</p>
        </div>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-4">Daftar Endpoint</h2>
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-4 text-left">Method</th>
                        <th class="py-2 px-4 text-left">Endpoint</th>
                        <th class="py-2 px-4 text-left">Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="py-2 px-4">POST</td>
                        <td class="py-2 px-4">/api/register</td>
                        <td class="py-2 px-4">Registrasi pengguna baru.</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 px-4">POST</td>
                        <td class="py-2 px-4">/api/login</td>
                        <td class="py-2 px-4">Login untuk mendapatkan token.</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 px-4">POST</td>
                        <td class="py-2 px-4">/api/logout</td>
                        <td class="py-2 px-4">Logout pengguna yang terautentikasi.</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 px-4">GET</td>
                        <td class="py-2 px-4">/api/articles{request}</td>
                        <td class="py-2 px-4">Mengambil semua artikel. Dapat difilter dengan query string <code>?category={name/id}</code> dan <code>?search={title}</code>.</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 px-4">GET</td>
                        <td class="py-2 px-4">/api/articles/{article}</td>
                        <td class="py-2 px-4">Mengambil artikel berdasarkan ID.</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 px-4">POST</td>
                        <td class="py-2 px-4">/api/articles</td>
                        <td class="py-2 px-4">Membuat artikel baru.</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 px-4">PUT/PATCH</td>
                        <td class="py-2 px-4">/api/articles/{article}</td>
                        <td class="py-2 px-4">Memperbarui artikel berdasarkan ID.</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 px-4">DELETE</td>
                        <td class="py-2 px-4">/api/articles/{article}</td>
                        <td class="py-2 px-4">Menghapus artikel berdasarkan ID.</td>
                    </tr>
                </tbody>
            </table>
        </section>


        <section>
            <h2 class="text-2xl font-semibold mb-4">Contoh Request dan Response</h2>

            <h3 class="text-lg font-medium">1. Registrasi</h3>
            <p class="text-gray-700">Menggunakan endpoint ini untuk membuat akun pengguna baru.</p>
            <strong>Request:</strong>
            <pre class="bg-gray-200 p-4 rounded-md overflow-x-auto">
POST /api/register
{
    "name": "Nama User",
    "email": "email@example.com",
    "password": "password123",
    "password_confirmation": "password123"
}
            </pre>
            <strong>Response:</strong>
            <pre class="bg-gray-200 p-4 rounded-md overflow-x-auto">
HTTP/1.1 201 Created
{
    "message": "User registered successfully.",
    "user": {
        "id": 1,
        "name": "Nama User",
        "email": "email@example.com"
    }
}
            </pre>

            <h3 class="text-lg font-medium mt-6">2. Login</h3>
            <p class="text-gray-700">Menggunakan endpoint ini untuk mendapatkan token otentikasi.</p>
            <strong>Request:</strong>
            <pre class="bg-gray-200 p-4 rounded-md overflow-x-auto">
POST /api/login
{
    "email": "email@example.com",
    "password": "password123"
}
            </pre>
            <strong>Response:</strong>
            <pre class="bg-gray-200 p-4 rounded-md overflow-x-auto">
HTTP/1.1 200 OK
{
    "token": "your_token_here"
}
            </pre>

            <h3 class="text-lg font-medium mt-6">3. Logout</h3>
            <p class="text-gray-700">Menggunakan endpoint ini untuk logout pengguna yang terautentikasi.</p>
            <strong>Request:</strong>
            <pre class="bg-gray-200 p-4 rounded-md overflow-x-auto">
POST /api/logout
Authorization: Bearer your_token_here
            </pre>
            <strong>Response:</strong>
            <pre class="bg-gray-200 p-4 rounded-md overflow-x-auto">
HTTP/1.1 200 OK
{
    "message": "User logged out successfully."
}
            </pre>

            <h3 class="text-lg font-medium mt-6">4. Mengambil Semua Artikel</h3>
            <p class="text-gray-700">Menggunakan endpoint ini untuk mengambil semua artikel yang tersedia.</p>
            <strong>Request:</strong>
            <pre class="bg-gray-200 p-4 rounded-md overflow-x-auto">
GET /api/articles
Authorization: Bearer your_token_here
            </pre>
            <strong>Response:</strong>
            <pre class="bg-gray-200 p-4 rounded-md overflow-x-auto">
HTTP/1.1 200 OK
[
    {
        "id": 1,
        "title": "Judul Artikel",
        "content": "Isi Artikel",
        "created_at": "2023-10-30T12:00:00.000000Z",
        "updated_at": "2023-10-30T12:00:00.000000Z"
    },
    ...
]
            </pre>

            <h3 class="text-lg font-medium mt-6">5. Mencari Artikel Berdasarkan Nama</h3>
            <p class="text-gray-700">Menggunakan endpoint ini untuk mencari artikel berdasarkan nama memiliki patterb terdekat.</p>
            <strong>Request:</strong>
            <pre class="bg-gray-200 p-4 rounded-md overflow-x-auto">
            GET /api/articles/search?search=Judul%20Artikel
            Authorization: Bearer your_token_here
            </pre>
            <strong>Response:</strong>
            <pre class="bg-gray-200 p-4 rounded-md overflow-x-auto">
HTTP/1.1 200 OK
[
    {
        "id": 1,
        "title": "Judul Artikel",
        "content": "Isi Artikel",
        "created_at": "2023-10-30T12:00:00.000000Z",
        "updated_at": "2023-10-30T12:00:00.000000Z"
    },
    ...
]
            </pre>

            <h3 class="text-lg font-medium mt-6">6. Mengambil Artikel Berdasarkan Kategori</h3>
            <p class="text-gray-700">Menggunakan endpoint ini untuk mengambil artikel berdasarkan kategori dapat berupa inputan id atau nama kategori.</p>
            <strong>Request:</strong>
            <pre class="bg-gray-200 p-4 rounded-md overflow-x-auto">
GET /api/articles?category=technology
Authorization: Bearer your_token_here
            </pre>
            <strong>Response:</strong>
            <pre class="bg-gray-200 p-4 rounded-md overflow-x-auto">
HTTP/1.1 200 OK
[
    {
        "id": 1,
        "title": "Judul Artikel",
        "content": "Isi Artikel",
        "category": "technology",
        "created_at": "2023-10-30T12:00:00.000000Z",
        "updated_at": "2023-10-30T12:00:00.000000Z"
    },
    ...
]
            </pre>

            <h3 class="text-lg font-medium mt-6">7. Mengambil Artikel Berdasarkan ID</h3>
            <p class="text-gray-700">Menggunakan endpoint ini untuk mengambil artikel berdasarkan ID.</p>
            <strong>Request:</strong>
            <pre class="bg-gray-200 p-4 rounded-md overflow-x-auto">
GET /api/articles/1
Authorization: Bearer your_token_here
            </pre>
            <strong>Response:</strong>
            <pre class="bg-gray-200 p-4 rounded-md overflow-x-auto">
HTTP/1.1 200 OK
{
    "id": 1,
    "title": "Judul Artikel",
    "content": "Isi Artikel",
    "category": "technology",
    "created_at": "2023-10-30T12:00:00.000000Z",
    "updated_at": "2023-10-30T12:00:00.000000Z"
}
            </pre>

            <h3 class="text-lg font-medium mt-6">8. Membuat Artikel Baru</h3>
            <p class="text-gray-700">Menggunakan endpoint ini untuk membuat artikel baru.</p>
            <strong>Request:</strong>
            <pre class="bg-gray-200 p-4 rounded-md overflow-x-auto">
POST /api/articles
Authorization: Bearer your_token_here
{
    "title": "Judul Artikel",
    "content": "Isi Artikel",
    "category_id": 1
}
            </pre>
            <strong>Response:</strong>
            <pre class="bg-gray-200 p-4 rounded-md overflow-x-auto">
HTTP/1.1 201 Created
{
    "message": "Artikel berhasil dibuat.",
    "article": {
        "id": 2,
        "title": "Judul Artikel",
        "content": "Isi Artikel",
        "category_id": 1
    }
}
            </pre>

            <h3 class="text-lg font-medium mt-6">9. Memperbarui Artikel</h3>
            <p class="text-gray-700">Menggunakan endpoint ini untuk memperbarui artikel berdasarkan ID.</p>
            <strong>Request:</strong>
            <pre class="bg-gray-200 p-4 rounded-md overflow-x-auto">
PUT /api/articles/1
Authorization: Bearer your_token_here
{
    "title": "Judul Artikel Baru",
    "content": "Isi Artikel Baru",
    "category_id": 1
}
            </pre>
            <strong>Response:</strong>
            <pre class="bg-gray-200 p-4 rounded-md overflow-x-auto">
HTTP/1.1 200 OK
{
    "message": "Artikel berhasil diperbarui.",
    "article": {
        "id": 1,
        "title": "Judul Artikel Baru",
        "content": "Isi Artikel Baru",
        "category_id": 1
    }
}
            </pre>

            <h3 class="text-lg font-medium mt-6">10. Menghapus Artikel</h3>
            <p class="text-gray-700">Menggunakan endpoint ini untuk menghapus artikel berdasarkan ID.</p>
            <strong>Request:</strong>
            <pre class="bg-gray-200 p-4 rounded-md overflow-x-auto">
DELETE /api/articles/1
Authorization: Bearer your_token_here
            </pre>
            <strong>Response:</strong>
            <pre class="bg-gray-200 p-4 rounded-md overflow-x-auto">
HTTP/1.1 200 OK
{
    "message": "Artikel berhasil dihapus."
}
            </pre>
        </section>
    </div>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-4 mt-8">
    <div class="container mx-auto text-center">
        <p>&copy; 2024 API Blog MSIB. All rights reserved.</p>
        <p>Dokumentasi ini dibuat untuk membantu pengembang dalam menggunakan API Blog MSIB.</p>
    </div>
</footer>

</body>
</html>
