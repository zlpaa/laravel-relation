<?php

namespace App\Models;  // Menentukan namespace model Comment, yang berada di dalam folder App\Models

use Illuminate\Database\Eloquent\Factories\HasFactory;  // Menggunakan trait HasFactory untuk memudahkan pembuatan instance factory (misalnya, untuk seeding data atau testing)
use Illuminate\Database\Eloquent\Model;  // Menggunakan kelas Model yang merupakan dasar dari setiap model Eloquent di Laravel

class Comment extends Model
{
    use HasFactory;  // Mengaktifkan penggunaan HasFactory trait, yang memungkinkan penggunaan factory untuk pembuatan data palsu atau testing
    
    /**
     * post
     *
     * Fungsi ini mendefinisikan hubungan antara model Comment dengan model Post
     *
     * @return void
     */
    public function post()
    {
        // Menentukan relasi "belongsTo" antara model Comment dan model Post.
        // Ini menunjukkan bahwa setiap Comment milik satu Post. 
        // Secara default, Laravel akan mencari kolom `post_id` di tabel comments untuk melakukan relasi ini.
        return $this->belongsTo(Post::class);
    }
}
