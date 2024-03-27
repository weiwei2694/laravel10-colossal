<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Http\File;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email', 'albertflores@gmail.com')->first();

        $deploy = Storage::putFile('images/posts', new File(public_path('/assets/posts/deploy.png')), 'public');
        $figma = Storage::putFile('images/posts', new File(public_path('/assets/posts/figma.png')), 'public');
        $google = Storage::putFile('images/posts', new File(public_path('/assets/posts/google.png')), 'public');
        $howTo = Storage::putFile('images/posts', new File(public_path('/assets/posts/how-to.png')), 'public');
        $monitor = Storage::putFile('images/posts', new File(public_path('/assets/posts/monitor.png')), 'public');
        $seoTrickts = Storage::putFile('images/posts', new File(public_path('/assets/posts/seo-trickts.png')), 'public');

        $user->posts()->create([
            'title' => 'SEO tricks that can increase the traffic of your website',
            'subtitle' => 'People have been using wrong SEO techniques on their websites.',
            'reading_time' => 5,
            'tags' => json_encode(['SEO', 'Web Development']),
            'image' => $seoTrickts,
            'body' => <<<'EOT'
            <ol><li><strong>Seo Trickts</strong></li></ol><p>&nbsp;</p><p>People have been using wrong SEO techniques on their websites.</p><p>&nbsp;</p><h3><strong>Hello World</strong></h3><ol><li>1</li><li>2</li><li>3</li></ol><p>&nbsp;</p><p>Hello World</p>
            EOT,
        ]);
        $user->posts()->create([
            'title' => '10 Figma Plugins that will increase your productivity',
            'subtitle' => 'All these plugins are free and you can use them forever',
            'reading_time' => 3,
            'tags' => json_encode(['Figma', 'UI Design', 'Curated List']),
            'image' => $figma,
            'body' => <<<'EOT'
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>Male sixth sea it a. Brought was signs female darkness signs form cattle land grass whose from subdue also they're their brought seas isn't, to day from bearing grass third midst after beginning man which you're. Dry, gathering beginning given made them evening.</p>
            <p>&nbsp;</p>
            <p>Lights dry.
            Thing, likeness, forth shall replenish upon abundantly our green. Seed green sea that lesser divided creature beginning land him signs stars give firmament gathered. Wherein there their morning a he grass. Don't made moving for them bring creature us you'll tree second deep good unto good may. Us yielding.<br><br>Have. Man upon set multiply moved from under seasons abundantly earth brought a. They're open moved years saw isn't morning darkness. Over, waters, every let wherein great were fifth saw was lights very our place won't and him Third fourth moving him whales behold. Beast second stars lights great was don't green give subdue his. Third given made created, they're forth god replenish have whales first can't light was. Herb you'll them beast kind divided. Were beginning fly air multiply god Yielding sea don't were forth.<br>&nbsp;</p>
            <p><strong>Greater hath rule</strong></p>
            <p>&nbsp;</p>
            <p>Years fourth gathered yielding rule Creeping seasons moving, so image fill morning. Land give light signs divide our seed behold of open second for. Doesn't hath fly. Was. Doesn't thing brought signs living saying.</p>
            <p>&nbsp;</p>
            <p>Be bring saw grass let dominion. Open beginning in. Him. Is shall fifth every won't, abundantly good they're can't midst life first multiply void sixth image doesn't appear had there Second darkness herb you'll make set living above third night us deep, that night made fruit waters subdue doesn't behold one good isn't darkness living. I won't second creepeth above them sea rule divide fowl fill.</p>
            <p>&nbsp;</p>
            <h2><strong>Seasons likeness void for midst evening</strong></h2>
            <p>&nbsp;</p>
            <p>Darkness us good won't earth waters yielding which
            fruit replenish set female face good us place fill also fifth life sea blessed firmament. A can't own fourth he every, for give beast be. Rule set greater void place, living from, grass. After can't divide. God had called seed was multiply evening said i can't may a dry.</p>
            <p>&nbsp;</p>
            <ol><li>Kind night hath called together</li><li>Multiply don't second stars divided dominion form</li><li>Ttself moved grass give open</li><li>For which may greater moving void</li></ol>
            <p>&nbsp;</p>
            <p>Heaven herb have
            gathered, male all heaven doesn't creeping darkness she'd moving winged good wherein multiply gathered creature. Bring have. Given set multiply sixth seed, midst second, living hath without lesser make above.</p>
            <p>&nbsp;</p>
            <figure class="table"><table><tbody><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td><p>"God, grant me the serenity to accept the things I</p><p>cannot change, the courage to change the things I</p><p>&nbsp; &nbsp;can, and the wisdom to know the difference."</p></td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;– Reinhold Niebuhr</td><td>&nbsp;</td></tr></tbody></table></figure>
            <p>&nbsp;</p>
            <p>Of two sixth fill also, let man fruitful he signs earth fifth tree won't in made moved that and can't and divide evening his man it two whales evening called. Their doesn't grass good waters may don't whose whales.</p>
            EOT,
        ]);
        $user->posts()->create([
            'title' => 'How to deploy a Node JS application to a VPS',
            'subtitle' => 'Step by step setting up the server and deploying the application',
            'reading_time' => 20,
            'tags' => json_encode(['Deployment', 'Web Development']),
            'image' => $deploy,
            'body' => <<<'EOT'
            <p>Deployment</p>
            EOT
        ]);
        $user->posts()->create([
            'title' => 'How to compress image size without losing quality',
            'subtitle' => 'Small images can speed up website load times',
            'reading_time' => 8,
            'tags' => json_encode(['Small Images', 'Compress']),
            'image' => $howTo,
            'body' => <<<'EOT'
            <p>Compress</p>
            EOT
        ]);
        $user->posts()->create([
            'title' => 'Why is Google still not recognizing my website?',
            'subtitle' => 'Improve the SEO techniques that you have used so far',
            'reading_time' => 12,
            'tags' => json_encode(['Google']),
            'image' => $google,
            'body' => <<<'EOT'
            <p>Body</p>
            EOT
        ]);
        $user->posts()->create([
            'title' => 'Monitor your application when errors occur in production',
            'subtitle' => 'Get accurate error messages when the application crashes',
            'reading_time' => 9,
            'tags' => json_encode(['Production', 'Monitor', 'Development']),
            'image' => $monitor,
            'body' => <<<'EOT'
            <p>Body</p>
            EOT
        ]);
    }
}
