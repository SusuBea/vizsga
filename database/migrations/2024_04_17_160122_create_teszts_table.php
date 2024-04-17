<?php

use App\Models\Teszt;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('teszts', function (Blueprint $table) {
            $table->id();
            $table->string('kerdes');
            $table->string('v1');
            $table->string('v2');
            $table->string('v3');
            $table->string('v4');
            $table->string('helyes');
            $table->foreignId('kategoriaId')->references('id')->on('kategorias');
            $table->timestamps();
        });

        Teszt::create(['kerdes'=> 'A papírt milyen színű szeelktív kukába gyűjtjük?', 'v1'=> 'kék', 'v2'=> 'piros', 'v3'=> 'fekete', 'v4'=> 'zöld', 'helyes'=> 'kék', 'kategoriaId'=> '1' ]);
        Teszt::create(['kerdes'=> 'Melyek komposztálhatóak?', 'v1'=> 'zöldség-gyümölcsmaradék - tojáshéj', 'v2'=> 'nagy ágak - fatörzsek - diófalevél', 'v3'=> 'fém - műanyag - vegyszerek', 'v4'=> 'ruhaneműk, egyéb textíliák', 'helyes'=> 'zöldség-gyümölcsmaradék - tojáshéj', 'kategoriaId'=> '1' ]);
        Teszt::create(['kerdes'=> 'Fogmosásnál...', 'v1'=> 'elzárom a csapot, amikor épp a fogamat sikálom és nem kell víz', 'v2'=> 'Nem zárom el a csapot, hogy lemossa a lehulló fogkrém habot a víz.', 'v3'=> 'kitekerem a csapot teljesen.', 'v4'=> 'csak akkor zárom el a csapot, hogyha végeztem.', 'helyes'=> 'elzárom a csapot, amikor épp a fogamat sikálom és nem kell víz', 'kategoriaId'=> '1' ]);
        
        
        Teszt::create(['kerdes'=> 'Mit jelent a kliens-szerver architectúra?', 'v1'=> 'jellemzően a kliens kezdeményez', 'v2'=> 'jellemzően a szerver kezdeményez', 'v3'=> 'valamilyen műveletet vagy lekérdezést végeztessen el a klienssel', 'v4'=> 'valamilyen műveletet vagy lekérdezést végeztessen el a szerverrel', 'helyes'=> 'jellemzően a kliens kezdeményez', 'kategoriaId'=> '2' ]);
        Teszt::create(['kerdes'=> 'Mi jellemző egy json fájlra?', 'v1'=> 'JavaScript objektumjelölés', 'v2'=> 'egy egyszerű, ember által is olvasható szöveg', 'v3'=> 'szöveg alapú szabvány számítógépek közötti adatcserére', 'v4'=> 'byte alapú fájlok együttese', 'helyes'=> 'JavaScript objektumjelölés', 'kategoriaId'=> '2' ]);
        Teszt::create(['kerdes'=> 'Minek a rövidítése a http?', 'v1'=> 'Hypertext Transfer Protocol', 'v2'=> 'Hypertext Transport Protocol', 'v3'=> 'Hypertext Token Practice', 'v4'=> 'Hypertext Transfer Practice', 'helyes'=> 'Hypertext Transfer Protocol', 'kategoriaId'=> '2' ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teszts');
    }
};
