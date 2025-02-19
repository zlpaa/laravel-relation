<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eloquent Relationships : Relasi One to Many</title>
    <!-- Menambahkan CSS Bootstrap untuk tampilan yang lebih rapi -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <!-- Menambahkan font-awesome untuk ikon pada komentar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <!-- Card untuk menampilkan tabel -->
        <div class="card mt-5">
            <div class="card-body">
                <!-- Judul dengan tautan menuju website -->
                <h3 class="text-center"><a href="https://santrikoding.com">www.santrikoding.com</a></h3>
                <!-- Subjudul untuk menjelaskan topik yang dibahas -->
                <h5 class="text-center my-4">Laravel Eloquent Relationship : One To Many</h5>
                <!-- Membuat tabel untuk menampilkan data judul post dan komentar -->
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Judul Post</th>
                            <th>Komentar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Melakukan iterasi melalui setiap post yang ada -->
                        @foreach($posts as $post)
                            <tr>
                                <!-- Menampilkan judul post -->
                                <td>{{ $post->title }}</td>
                                <td>
                                    <!-- Melakukan iterasi melalui setiap komentar yang terkait dengan post -->
                                    @foreach($post->comments()->get() as $comment)
                                        <!-- Membungkus komentar dalam card dengan shadow dan margin bawah -->
                                        <div class="card shadow-sm mb-2">
                                            <div class="card-body">
                                                <!-- Ikon komentar dan isi komentar -->
                                                <i class="fa fa-comments"></i> {{ $comment->comment }}
                                            </div>
                                        </div>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
