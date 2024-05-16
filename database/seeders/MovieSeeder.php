<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::insert([
            'title' => 'Spiderman',
            'description' => 'Spider-Man is a 2002 American superhero film based on the Marvel Comics character of the same name, created by Stan Lee and Steve Ditko. Directed by Sam Raimi from a screenplay by David Koepp, it is the first installment in Raimis.',
            'cover_url' => 'https://image.api.playstation.com/vulcan/ap/rnd/202306/1219/60eca3ac155247e21850c7d075d01ebf0f3f5dbf19ccd2a1.jpg',
            'trailer_url' => 'https://youtu.be/JfVOs4VSpmA?si=ArvOmD-nJZNBoC7Q',
            'viewer' => 100000 
        ]);
        Movie::insert([
            [
                'title' => 'Avengers: Endgame',
                'description' => 'After the devastating events of Avengers: Infinity War, the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos\' actions and restore balance to the universe.',
                'cover_url' => 'https://image.tmdb.org/t/p/original/ulzhLuWrPK07P1YkdWQLZnQh1JL.jpg',
                'trailer_url' => 'https://www.youtube.com/watch?v=TcMBFSGVi1c',
                'viewer' => 250000 
            ],
            [
                'title' => 'The Shawshank Redemption',
                'description' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
                'cover_url' => 'https://image.tmdb.org/t/p/original/q6y0Go1tsGEsmtFryDOJo3dEmqu.jpg',
                'trailer_url' => 'https://www.youtube.com/watch?v=6hB3S9bIaco',
                'viewer' => 300000 
            ]
        ]);
        
    }
}
