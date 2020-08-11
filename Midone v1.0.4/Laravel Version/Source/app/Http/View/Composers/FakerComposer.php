<?php

namespace App\Http\View\Composers;

use App\Faker;
use Illuminate\View\View;

class FakerComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $fakerData = [];
        for ($i = 0; $i < 20; $i++) {
            $fakerData[] = [
                'users' => Faker::fakeUsers(),
                'photos' => Faker::fakePhotos(),
                'images' => Faker::fakeImages(),
                'dates' => Faker::fakeDates(),
                'times' => Faker::fakeTimes(),
                'formatted_times' => Faker::fakeFormattedTimes(),
                'totals' => Faker::fakeTotals(),
                'true_false' => Faker::fakeTrueFalse(),
                'stocks' => Faker::fakeStocks(),
                'products' => Faker::fakeProducts(),
                'news' => Faker::fakeNews(),
                'files' => Faker::fakeFiles(),
                'jobs' => Faker::fakeJobs(),
                'notification_count' => Faker::fakeNotificationCount(),
                'foods' => Faker::fakeFoods()
            ];
        }

        $view->with('fakers', $fakerData);
    }
}