<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use App\Models\{Faq, FaqCategory};

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transaction = FaqCategory::create(['name' => 'Transaction']);
        $general = FaqCategory::create(['name' => 'General']);
        $maintenance = FaqCategory::create(['name' => 'Maintenance']);
        $technology = FaqCategory::create(['name' => 'Technology']);

        Faq::create([
            'question' => 'How is the payment system?',
            'answer' => "If the project has agreed, you will pay an advance, and when the progress reaches 50% you will make a second payment, and when the progress is 100% you will pay it off.",
            'faq_category_id' => $transaction->id
        ]);
        Faq::create([
            'question' => 'Can I consult first?',
            'answer' => "Of course you can consult us first. We are very happy to help your problems and provide our best solutions. You can contact us via the contact page.",
            'faq_category_id' => $transaction->id
        ]);
        Faq::create([
            'question' => 'What if the project stops halfway?',
            'answer' => "We promise to always finish the project on time, if a problem occurs (because of our mistake), all payments will be refunded. And the project will be terminated.",
            'faq_category_id' => $transaction->id
        ]);
        Faq::create([
            'question' => 'Does it include servers and domains?',
            'answer' => "You don't need to think about anything else, we have everything prepared. You just need to check your progress and make sure the features you want are the right one.",
            'faq_category_id' => $transaction->id
        ]);
        Faq::create([
            'question' => 'Will I get the source code?',
            'answer' => "When the project is 100% complete, all the resources, such as design files, analysis diagrams, source code, etc. will be provided to you. You don't need to worry about this.",
            'faq_category_id' => $transaction->id
        ]);
        Faq::create([
            'question' => 'Is there a warranty?',
            'answer' => "1 year warranty for our errors or mistakes. If you want to add a feature that is not included in the warranty, there is another fee per feature, and the price depends on the difficulty.",
            'faq_category_id' => $transaction->id
        ]);
        Faq::create([
            'question' => 'How to perform routine maintenance for software?',
            'answer' => "To carry out routine maintenance, make sure to regularly check and update the software and clear the cache and cookies on the browser. Also perform regular antivirus scans and back up data regularly.",
            'faq_category_id' => $transaction->id
        ]);
    }
}
