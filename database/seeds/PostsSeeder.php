<?php

use Illuminate\Database\Seeder;
use App\Post;
//use Illuminate\Support\Facades\Facade;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {     
        $post = new Post();
        $post -> title = "Witam";
        $post -> content = 'Niniejszy blog jest pierwszym projektem programistycznym jaki stworzyłem oraz opublikowałem w sieci. Został napisany przy użyciu najnowszych technologii, dzięki którym jest m.in. w pełni responsywny. Treści zostały wypełnione tylko, aby zasymulować rzeczywiste użycie, tego typu strony. Zapraszam do oglądania oraz testowania na ekranach różnej wielkości.';
        $post -> imageURL = "images/startLine.jpg";
        $post -> category_id = 5;
        $post->created_at = "2018-03-01";
        $post->updated_at = "2018-03-01"; 
        $post -> save();
        
        $post = new Post();
        $post -> title = "Laravel - wprowadzenie";
        $post -> content = "Jeden z najpopularniejszych frameworków do języka PHP. Najnowsza stabilna wersja została oznaczona numerem 5.6. Celem rozpoczęcia pracy z Laravelem proponuję zapoznać się z programem do obsługi pakietów: Composer'em. Jeden z najpopularniejszych frameworków do języka PHP. Najnowsza stabilna wersja została oznaczona numerem 5.6. Celem rozpoczęcia pracy z Laravelem proponuję zapoznać się z programem do obsługi pakietów: Composer'em.Jeden z najpopularniejszych frameworków do języka PHP. Najnowsza stabilna wersja została oznaczona numerem 5.6. Celem rozpoczęcia pracy z Laravelem proponuję zapoznać się z programem do obsługi pakietów: Composer'em.Jeden z najpopularniejszych frameworków do języka PHP. Najnowsza stabilna wersja została oznaczona numerem 5.6. Celem rozpoczęcia pracy z Laravelem proponuję zapoznać się z programem do obsługi pakietów: Composer'em.Jeden z najpopularniejszych frameworków do języka PHP. Najnowsza stabilna wersja została oznaczona numerem 5.6. Celem rozpoczęcia pracy z Laravelem proponuję zapoznać się z programem do obsługi pakietów: Composer'em.Jeden z najpopularniejszych frameworków do języka PHP. Najnowsza stabilna wersja została oznaczona numerem 5.6. Celem rozpoczęcia pracy z Laravelem proponuję zapoznać się z programem do obsługi pakietów: Composer'em.Jeden z najpopularniejszych frameworków do języka PHP. Najnowsza stabilna wersja została oznaczona numerem 5.6. Celem rozpoczęcia pracy z Laravelem proponuję zapoznać się z programem do obsługi pakietów: Composer'em.";
        $post -> imageURL = "images/laravel1.jpg";
        $post -> category_id = 1;
        $post->created_at = "2018-03-02";
        $post->updated_at = "2018-03-02";        
        $post -> save();
        
        $post = new Post();
        $post -> title = "MySQL";
        $post -> content = "Pierwszy post z kategorii baz danych będzie opisem tego co kryje się za słowem MySQL. Pierwszy post z kategorii baz danych będzie opisem tego co kryje się za słowem MySQL. Pierwszy post z kategorii baz danych będzie opisem tego co kryje się za słowem MySQL. Pierwszy post z kategorii baz danych będzie opisem tego co kryje się za słowem MySQL. Pierwszy post z kategorii baz danych będzie opisem tego co kryje się za słowem MySQL. Pierwszy post z kategorii baz danych będzie opisem tego co kryje się za słowem MySQL. Pierwszy post z kategorii baz danych będzie opisem tego co kryje się za słowem MySQL. Pierwszy post z kategorii baz danych będzie opisem tego co kryje się za słowem MySQL. Pierwszy post z kategorii baz danych będzie opisem tego co kryje się za słowem MySQL. Pierwszy post z kategorii baz danych będzie opisem tego co kryje się za słowem MySQL. <br/><br/> Pierwszy post z kategorii baz danych będzie opisem tego co kryje się za słowem MySQL. Pierwszy post z kategorii baz danych będzie opisem tego co kryje się za słowem MySQL. Pierwszy post z kategorii baz danych będzie opisem tego co kryje się za słowem MySQL. Pierwszy post z kategorii baz danych będzie opisem tego co kryje się za słowem MySQL. Pierwszy post z kategorii baz danych będzie opisem tego co kryje się za słowem MySQL. Pierwszy post z kategorii baz danych będzie opisem tego co kryje się za słowem MySQL. Pierwszy post z kategorii baz danych będzie opisem tego co kryje się za słowem MySQL. Pierwszy post z kategorii baz danych będzie opisem tego co kryje się za słowem MySQL. Pierwszy post z kategorii baz danych będzie opisem tego co kryje się za słowem MySQL. ";        
        $post -> imageURL = "images/MySQL1.jpg";
        $post -> category_id = 2;
        $post->created_at = "2018-03-06";
        $post->updated_at = "2018-03-07";        
        $post -> save();
        
        $post = new Post();
        $post -> title = "Windows";
        $post -> content = "Windows to system operacyjny rozwijany przez firmę Microsoft. Przykładowe wersje to: XP, Vista, 7, 8, 10. Windows to system operacyjny rozwijany przez firmę Microsoft. Przykładowe wersje to: XP, Vista, 7, 8, 10. Windows to system operacyjny rozwijany przez firmę Microsoft. Przykładowe wersje to: XP, Vista, 7, 8, 10.<br/><br/>Windows to system operacyjny rozwijany przez firmę Microsoft. Przykładowe wersje to: XP, Vista, 7, 8, 10. Windows to system operacyjny rozwijany przez firmę Microsoft. Przykładowe wersje to: XP, Vista, 7, 8, 10. Windows to system operacyjny rozwijany przez firmę Microsoft. Przykładowe wersje to: XP, Vista, 7, 8, 10. Windows to system operacyjny rozwijany przez firmę Microsoft. Przykładowe wersje to: XP, Vista, 7, 8, 10.";
        $post -> imageURL = "images/Windows1.jpg";
        $post -> category_id = 4;
        $post->created_at = "2018-03-26";
        $post->updated_at = "2018-03-27";        
        $post -> save();
        
        $post = new Post();
        $post -> title = "Linux";
        $post -> content = "Tytułowy system operacyjny jest w większości wersji darmowy. Jego ogromną zaletą jest szeroki wybór tzw. dystrybucji i środowisk graficznych. Za jego rozwój odpowiada społeczność programistów. Zastosowanie znajduje w prywatnym użytku jak i specjalistycznym czy naukowym. Tytułowy system operacyjny jest w większości wersji darmowy. Jego ogromną zaletą jest szeroki wybór tzw. dystrybucji i środowisk graficznych. Za jego rozwój odpowiada społeczność programistów. Zastosowanie znajduje w prywatnym użytku jak i specjalistycznym czy naukowym. Tytułowy system operacyjny jest w większości wersji darmowy. Jego ogromną zaletą jest szeroki wybór tzw. dystrybucji i środowisk graficznych. Za jego rozwój odpowiada społeczność programistów. Zastosowanie znajduje w prywatnym użytku jak i specjalistycznym czy naukowym.<br/><br/>Tytułowy system operacyjny jest w większości wersji darmowy. Jego ogromną zaletą jest szeroki wybór tzw. dystrybucji i środowisk graficznych. Za jego rozwój odpowiada społeczność programistów. Zastosowanie znajduje w prywatnym użytku jak i specjalistycznym czy naukowym. Tytułowy system operacyjny jest w większości wersji darmowy. Jego ogromną zaletą jest szeroki wybór tzw. dystrybucji i środowisk graficznych. Za jego rozwój odpowiada społeczność programistów. Zastosowanie znajduje w prywatnym użytku jak i specjalistycznym czy naukowym. Tytułowy system operacyjny jest w większości wersji darmowy. Jego ogromną zaletą jest szeroki wybór tzw. dystrybucji i środowisk graficznych. Za jego rozwój odpowiada społeczność programistów. Zastosowanie znajduje w prywatnym użytku jak i specjalistycznym czy naukowym.";
        $post -> imageURL = "images/server.jpg";
        $post -> category_id = 4;
        $post->created_at = "2018-03-27";
        $post->updated_at = "2018-03-27";        
        $post -> save();
        
        $post = new Post();
        $post -> title = "Dźwięk";
        $post -> content = "Dzisiejsze czasy pozwalają na profesjonalną edycję dźwięku za pomocą komputera. Narzędzia, które umożliwiają takie operacje dzielą się na darmowe i płatne. Do pierwszej grupy możemy zaliczyć program Audacity natomiast do drugiej Adobe Audition. Dzisiejsze czasy pozwalają na profesjonalną edycję dźwięku za pomocą komputera. Narzędzia, które umożliwiają takie operacje dzielą się na darmowe i płatne. Do pierwszej grupy możemy zaliczyć program Audacity. Dzisiejsze czasy pozwalają na profesjonalną edycję dźwięku za pomocą komputera. Narzędzia, które umożliwiają takie operacje dzielą się na darmowe i płatne. Do pierwszej grupy możemy zaliczyć program Audacity.<br/><br/> Dzisiejsze czasy pozwalają na profesjonalną edycję dźwięku za pomocą komputera. Narzędzia, które umożliwiają takie operacje dzielą się na darmowe i płatne. Do pierwszej grupy możemy zaliczyć program Audacity. Dzisiejsze czasy pozwalają na profesjonalną edycję dźwięku za pomocą komputera. Narzędzia, które umożliwiają takie operacje dzielą się na darmowe i płatne. Do pierwszej grupy możemy zaliczyć program Audacity. Dzisiejsze czasy pozwalają na profesjonalną edycję dźwięku za pomocą komputera. Narzędzia, które umożliwiają takie operacje dzielą się na darmowe i płatne. Do pierwszej grupy możemy zaliczyć program Audacity. Dzisiejsze czasy pozwalają na profesjonalną edycję dźwięku za pomocą komputera. Narzędzia, które umożliwiają takie operacje dzielą się na darmowe i płatne. Do pierwszej grupy możemy zaliczyć program Audacity.";
        $post -> imageURL = "images/mikrofon.jpg";
        $post -> category_id = 5;
        $post->created_at = "2018-04-04";
        $post->updated_at = "2018-04-04";        
        $post -> save();
        
        //FAKER wypelniajacy pseudolosowymi wartosciami tabele. Odkomentowac use.
//        $faker = Faker\Factory::create();
//        //MIN-MAX sa odpowiednio indexem poczatkowym i koncowym w tabeli kategorie.
//        $min = 1;
//        $max = 5;
//        //$maxNbChars określa ile znakow bedzie w tytule postu
//        $maxNbChars = 30;
//        
//        for($i = 0; $i < 20; $i++)
//        {
//            $post = new Post();
//            $post->title = $faker->text($maxNbChars);
//            $post->content = $faker->text;
//            $post ->imageURL = $faker->imageUrl();
//            $post->category_id = $faker->numberBetween($min, $max);
//            $post->created_at = $faker->dateTime();
//            $post->updated_at = $faker->dateTimeBetween($post->created_at);
//            $post->save();
//        };
        
    }
}
